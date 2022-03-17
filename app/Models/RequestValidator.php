<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RequestValidator extends Model
{
    use HasFactory, RequestValidatorRelations;

    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component proerties like fillable, casts.
    */

    public const EMAIL_VERIFICATION = 'Email Verificaion Request';
    public const FORGOT_PASSWORD = 'Forgot Password Request';

    protected $fillable = ['type'];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $casts = ['secret_expiry' => 'datetime'];


    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    /*
    |--------------------------------------------------------------------------
    | Get Attributes
    |--------------------------------------------------------------------------
    | User defined get property attributes.
    */

    /*
    |--------------------------------------------------------------------------
    | Business Logic
    |--------------------------------------------------------------------------
    | User defined entity methods
    */

    public function isValidSecret($secret)
    {
        return $this->secret_expiry && $this->secret_expiry->diffInMinutes() > 0 && Hash::check($secret, $this->secret_hash);
    }


    public function makeSecret($size = 256)
    {
        $secret = Str::random($size);
        $this->secret_hash = Hash::make($secret);
        $this->secret_expiry = now()->addMinutes(60);
        $this->save();
        return $secret;
    }

    public function expire()
    {
        $this->clearSecret();
        $this->secret_expiry = now();
        $this->save();
    }

    public function clearSecret()
    {
        $this->secret_hash = null;
        $this->secret_expiry = null;
    }

    public function setId()
    {
        $this->id = uniqid();
    }

}

trait RequestValidatorRelations
{
    public function user()
    {
       return  $this->belongsTo(User::class);
    }
}
