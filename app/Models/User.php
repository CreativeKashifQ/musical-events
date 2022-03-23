<?php

namespace App\Models;


use App\Models\Role;
use App\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use App\Notifications\RequestValidationNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, UserRelations;


    /*
    |--------------------------------------------------------------------------
    | Constant Properties
    |--------------------------------------------------------------------------
    | Entiry static constant properties.
    */

    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component proerties like fillable, casts.
    */

    protected $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime', 'email_verified_at' => 'datetime',];
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token', 'otp_hash', 'active_role'];

    /*
    |--------------------------------------------------------------------------
    | Get Attributes
    |--------------------------------------------------------------------------
    | User defined get property attributes.
    */

    // avalable venues
    // venueByCategoryWithAvaialbity
    public function getVenueByCategory($category,$availability = true)
    {
        $this->venues->where('cateagory',$category)->where('avaialble',$availability);
    }




    /*
    |--------------------------------------------------------------------------
    | Business Logic
    |--------------------------------------------------------------------------
    | User defined entity methods.
    */

    public function setPassword($password)
    {
        $this->password = Hash::make($password);
    }

    public function passPasswordChallenge($password)
    {
        return Hash::check($password, $this->password);
    }

    public function failPasswordChallenge($password)
    {
        return !$this->passPasswordChallenge($password);
    }



    public function dispatchRequestValidator($type, $route)
    {
        $requestValidator = $this->makeRequestValidator($type);
        $secret = $requestValidator->makeSecret();
        $link = route($route, [$requestValidator->id, $secret]);
        return $link;
        // $this->notify(new RequestValidationNotification($link, $type));
    }

    public function hasRole($role)
    {
        return  $this->roles->where('name', $role)->count() > 0;
    }


    public function setActiveRole($role = null)
    {
        $primaryRole = $role ??  $this->roles->first();
        $this->active_role= $primaryRole->name;
        $this->save();
    }

    public function setStripeAccount($accountId)
    {
        $this->stripe_account = $accountId;
        $this->stripe_connect_date = now();
        $this->save();
    }

    public function makeRequestValidator($type)
    {
        $requestValidator = new RequestValidator(['type' => $type]);
        $requestValidator->setId();
        $requestValidator->user()->associate($this);
        $requestValidator->save();
        return $requestValidator;
    }
}
/*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    | User defined entity relations.
    */
trait UserRelations
{
    public function profile()
    {
        return $this->hasOne(FoodSupplier::class);
    }
   
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function requestValidations()
    {
        return $this->hasMany(RequestValidator::class);
    }

    public function venues()
    {
        return $this->hasMany(Venue::class);
    }

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }

    public function menues()
    {
        return $this->hasMany(MenuGallery::class,'user_id','id');
    }
    
}
