<?php

namespace App\Http\Livewire\Equipment\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Equipment;
use App\Models\UnderMaintenance;

class Maintainence extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $e_under_maintenance,$under_maintenances;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'e_under_maintenance.date' => 'required',
    ];
    /*
    |--------------------------------------------------------------------------
    | Listeners
    |--------------------------------------------------------------------------
    | Livewire event listeners like created, updated or deleted
    */
    protected $listeners = ['removeFromUnderMaintenance','addForUnderMaintenance'];

    public function removeFromUnderMaintenance()
    {
        $this->loadUnderMaintenanceEquipment($this->equipment);
    }

    public function addForUnderMaintenance()
    {
        $this->loadUnderMaintenanceEquipment($this->equipment);
    }
    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount(Equipment $equipment)
    {
        $this->authorize('manageMaintainence', $equipment);
        $this->equipment = $equipment;
        $this->loadUnderMaintenanceEquipment($this->equipment);
    }

    public function render()
    {
        return view('livewire.equipment.manage.maintainence')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function maintainence()
    {
        //$this->authorize('manageMaintainence', new Equipment);
    }
    public function update()
    {
        $this->authorize('manageMaintainence', $this->equipment);
        $this->validate();
        $under_maintenance = new UnderMaintenance();
        $under_maintenance['service_id'] = $this->equipment->id;
        $under_maintenance['service_type'] = 'Equipment';
        $under_maintenance['date'] = $this->e_under_maintenance['date'];
        $under_maintenance->save();
        $this->emitSelf('addForUnderMaintenance');
        $this->emptyForm();


    }

    public function remove($id)
    {
        $e_under_maintenance = UnderMaintenance::where('id',$id)->first();
        $e_under_maintenance->delete();
        $this->emitSelf('removeFromUnderMaintenance');

    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function loadUnderMaintenanceEquipment($equipment)
    {

       return  $this->under_maintenances = $equipment->under_maintenances;
    }

    public function emptyForm()
    {
        $this->e_under_maintenance['date'] = '';
    }
}
