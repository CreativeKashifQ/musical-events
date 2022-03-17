<?php

namespace App\Http\Livewire\Venue\Manage;

use App\Models\Venue;
use Livewire\Component;
use App\Models\ServiceGallery;
use Livewire\WithFileUploads;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Gallery extends Component
{
    use AuthorizesRequests,WithFileUploads;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $venue,$logo_image,$removeImage,$images = [],$galleries;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'logo_image' => 'required|image|max:2048',
        'images.*' => 'required|image|max:2048',
    ];
    /*
    |--------------------------------------------------------------------------
    | Listeners
    |--------------------------------------------------------------------------
    | Livewire event listeners like created, updated or deleted
    */
    protected $listeners = ['removeImage','galleryUpdated'];

    public function removeImage($image)
    {

        switch ($image) {
            case 'logo_image':
                $this->venue->update([$image => 'images/venues/default_logo.jpg']);
                $this->venue->update(['gallery_updated' => false]);
                $this->dispatchBrowserEvent('alert',['type' =>'success','message'=>'Logo Deleted Successfully !']);
                break;
            default:
                # code...
                break;
        }
    }

    public function galleryUpdated()
    {
        $this->loadGallery($this->venue);
    }
    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount(Venue $venue)
    {
        $this->authorize('managegallery', $venue);
        $this->venue = $venue;
        $this->loadGallery($this->venue);
    }

    public function updated($property)
    {

        $this->authorize('managegallery', $this->venue);
        // $this->validateOnly($property);
        switch ($property) {
            case 'logo_image':
                $this->venue->update([$property => $this->logo_image->store('images/venues', 'custom')]);
                $this->venue->update(['gallery_updated' => true]);
                break;
            case 'images':
                foreach($this->images as $image){
                    $gallery = new ServiceGallery();
                    $gallery->service_id = $this->venue->id;
                    $gallery->service_type = 'Venue';
                    $gallery->image = $image->store('images/venues', 'custom');
                    $gallery->save();
                }
                $this->emitSelf('galleryUpdated');
                break;

        }
    }

    public function render()
    {
        return view('livewire.venue.manage.gallery')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */
    public function removeGalleryImage($id)
    {
        $image_gallery = ServiceGallery::where('id',$id)->first();
        $image_gallery->delete();
        $this->emit('galleryUpdated');
    }

    public function gallery()
    {
        //$this->authorize('managegallery', new Venue);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */

    public function loadGallery($venue)
    {
        return $this->galleries =  $venue->images;
    }
}
