<?php

namespace App\Http\Livewire\FoodSupplier\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\FoodSupplier;
use App\Models\MenuGallery;
use App\Models\User;
use Livewire\WithFileUploads;

class Menu extends Component
{
    use AuthorizesRequests,WithFileUploads;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $menue_galleries, $supplier, $logo_image, $removeImage, $images = [],$toggleAddMenuForm = false,$menu_image,$menu_name;
    public $foodSupplier;
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
    protected $listeners = ['removeImage', 'menuGalleryUpdated'];

    public function removeImage($image)
    {

        switch ($image) {
            case 'logo_image':
                $this->supplier->profile->update([$image => 'images/menu-default.png']);
                $this->supplier->profile->update(['supplier_logo_updated' => false]);
                $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Logo Deleted Successfully !']);
                break;
            default:
                # code...
                break;
        }
    }

    public function menuGalleryUpdated()
    {
        $this->loadMenueGallery($this->supplier);
    }
    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount(User $supplier)
    {
        $this->foodSupplier = FoodSupplier::where('user_id',$supplier->id)->first();
        if(!$this->foodSupplier){
            $foodSupplier = new FoodSupplier();
            $foodSupplier->user_id = $supplier->id;
            $foodSupplier->save();
        }
        $this->authorize('manageMenu', $this->foodSupplier);
        $this->supplier = $supplier;
        $this->loadMenueGallery($supplier);
    }

    public function render()
    {
        return view('livewire.food-supplier.manage.menu')->layout('layouts.cms');
    }

    public function updated($property)
    {

        $this->authorize('manageMenu', $this->foodSupplier);
        // $this->validateOnly($property);
        switch ($property) {
            case 'logo_image':
                $this->supplier->profile->update([$property => $this->logo_image->store('images/menues', 'custom')]);
                $this->supplier->profile->supplier_logo_updated = true;
                $this->supplier->profile->save();
                break;
            case 'images':
                foreach ($this->images as $image) {
                    $meneu_gallery = new MenuGallery();
                    $meneu_gallery->user_id = $this->supplier->id;
                    $meneu_gallery->service_type = 'F_Supplier';
                    $meneu_gallery->image = $image->store('images/menues', 'custom');
                    $meneu_gallery->save();
                }
                $this->emitSelf('menuGalleryUpdated');
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
        $image_gallery = MenuGallery::where('id', $id)->first();
        $image_gallery->delete();
        $this->emit('menuGalleryUpdated');
    }

    public function toggleAddMenuForm()
    {
        $this->toggleAddMenuForm = !$this->toggleAddMenuForm;
    }


    public function attemptAddMenu()
    {
        $this->validate([
           'menu_image' => 'required|image|max:2048',
           'menu_name' => 'required'
        ]);
        $menu_gallery = new  MenuGallery();
        $menu_gallery->user_id = $this->supplier->id;
        $menu_gallery->name = $this->menu_name;
        $menu_gallery->service_type = 'F_Supplier';
        $menu_gallery->image = $this->menu_image->store('images/menues','custom');
        $menu_gallery->save();
        $this->toggleAddMenuForm = !$this->toggleAddMenuForm;
        $this->emptyForm();
        $this->loadMenueGallery($this->supplier);

    }
    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */

    public function loadMenueGallery($supplier)
    {
        $this->menue_galleries = MenuGallery::where('service_type', 'F_Supplier')->where('user_id', $supplier->id)->get();
    }

    public function emptyForm()
    {
        $this->menu_image = '';
        $this->menu_name = '';
    }
}
