<?php

namespace App\Http\Livewire\Equipment\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Equipment;
use App\Models\Category;
use App\Models\SubCategory;

class Entity extends Component
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

    public function mount(Equipment $equipment)
    {
        //authorize
        $this->authorize('manageEntity', $equipment);
        //loading equipment entity details by providing equipment as an argumanet.
        $this->loadEntityDetails($equipment);
       
    }
    public function updated($property)
    {
        if($property == 'equipment.category'){
            //return sub categories related to specific category selected
            $this->sub_categories = SubCategory::where('category_id',$this->equipment->category)->get();
        }
        
    }

    public function render()
    {
        return view('livewire.equipment.manage.entity')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function update()
    {
        $this->authorize('manageEntity', $this->equipment);
        $this->validate();
        //prepare date
        $category = Category::where('id', $this->equipment->category)->first();
        $sub_category = SubCategory::where("id", $this->equipment->sub_category)->first();
        $this->equipment->category = $category->name;
        $this->equipment->sub_category = $sub_category->name;
        $this->equipment->update();
        $this->loadEntityDetails($this->equipment);
        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Changes Updated!']);
        
    }


    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function loadEntityDetails($equipment)
    {
        $this->loadCategories();
        $this->equipment->category = $this->categories->where('name',$equipment->category)->first()->id;
        $this->loadSubCategories($this->equipment->category);
        $this->equipment->sub_category = $this->sub_categories->where('name',$equipment->sub_category)->first()->id;
    }
    public function loadCategories()
    {
       return $this->categories = Category::where('service_type','Equipment')->get();
    }
    public function loadSubCategories($categoryId)
    {
        return $this->sub_categories = SubCategory::where('category_id',$categoryId)->get();
        
    }
}
