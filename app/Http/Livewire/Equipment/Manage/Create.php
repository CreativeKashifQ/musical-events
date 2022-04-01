<?php

namespace App\Http\Livewire\Equipment\Manage;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Equipment;
use App\Models\SubCategory;

class Create extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $equipment,$categories, $sub_categories = null;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'equipment.name' => 'required',
        'equipment.color' => 'required',
        'equipment.category' => 'required',
        'equipment.sub_category' => 'required',
        'equipment.quantity' => 'required',
        'equipment.location' => 'required',
        'equipment.description' => 'required'
    ];
    /*
    |--------------------------------------------------------------------------
    | Listeners
    |--------------------------------------------------------------------------
    | Livewire event listeners like created, updated or deleted
    */

    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount()
    {
        $this->authorize('manageCreate', new Equipment);
        $this->equipment = new Equipment();
        $this->loadCategories();
       
       
    }

    public function updated($property)
    {
        if($property == 'equipment.category'){
            $this->sub_categories = SubCategory::where('category_id',$this->equipment->category)->get();
        }
        
    }

    public function render()
    {
        return view('livewire.equipment.manage.create')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

  
    public function create()
    {
        
        //authorize
        $this->authorize('managecreate', new Equipment());

        //validate
        $this->validate();

        //prepare date
        $category = Category::where('id',$this->equipment->category)->first();
        $sub_category = SubCategory::where("id",$this->equipment->sub_category)->first();
        $this->equipment->user_id = auth()->id();
        $this->equipment->category = $category->name;
        $this->equipment->sub_category = $sub_category->name;

        //save date
        $this->equipment->save();

        //redirect
        return redirect()->route('equipment.manage.entity',['equipment' => $this->equipment]);

    }
    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function loadCategories()
    {
       return $this->categories = Category::where('service_type','Equipment')->get();
    }

  
}
