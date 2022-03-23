<?php

namespace App\Http\Livewire\Equipment\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Equipment;
use App\Models\ServiceGallery;

class Gallery extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $equipment, $logo_image, $removeImage, $images = [], $galleries;
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
    protected $listeners = ['removeImage', 'galleryUpdated'];

    public function removeImage($image)
    {

        switch ($image) {
            case 'logo_image':
                $this->equipment->update([$image => 'images/equipment-default.png']);
                $this->equipment->update(['gallery_updated' => false]);
                $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Logo Deleted Successfully !']);
                break;
            default:
                # code...
                break;
        }
    }

    public function galleryUpdated()
    {
        $this->loadGallery($this->equipment);
    }
    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount(Equipment $equipment)
    {
        $this->authorize('manageGallery', $equipment);
        $this->equipment = $equipment;
        $this->loadGallery($this->equipment);
    }

    public function render()
    {
        return view('livewire.equipment.manage.gallery')->layout('layouts.cms');
    }

    public function updated($property)
    {

        $this->authorize('managegallery', $this->equipment);
        // $this->validateOnly($property);
        switch ($property) {
            case 'logo_image':
                $this->equipment->update([$property => $this->logo_image->store('images/equipments', 'custom')]);
                $this->equipment->update(['gallery_updated' => true]);
                break;
            case 'images':
                foreach ($this->images as $image) {
                    $gallery = new ServiceGallery();
                    $gallery->service_id = $this->equipment->id;
                    $gallery->service_type = 'Equipment';
                    $gallery->image = $image->store('images/equipments', 'custom');
                    $gallery->save();
                }
                $this->emitSelf('galleryUpdated');
                break;
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function removeGalleryImage($id)
    {
        $image_gallery = ServiceGallery::where('id', $id)->first();
        $image_gallery->delete();
        $this->emit('galleryUpdated');
    }

    public function gallery()
    {
        //$this->authorize('manageGallery', new Equipment);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function loadGallery($equipment)
    {
        return $this->galleries =  $equipment->images;
    }
}
