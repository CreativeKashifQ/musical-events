
  
@foreach(auth()->user()->roles as $role)
    @if($role->name == App\Helpers\UserRoles::VENUE_PROVIDER)
<!-- venues -->
<div class="py-2">
    <h5 class="text-primary text-capitalize">Venues</h5>
</div>
@livewire('dashboard.manage.components.v-p-dashboard')
<div class="d-flex justify-content-end">
@livewire('account.manage.components.manage-role' , ['role' => $role->name], key($role->id) )
    </div>
@endif
<!-- equipments -->

@if($role->name == App\Helpers\UserRoles::EQUIPMENT_PROVIDER)
<div class="py-2">
    <h5 class="text-primary text-capitalize">Equipments</h5>
</div>
    @livewire('dashboard.manage.components.e-p-dashboard')
    <div class="d-flex justify-content-end">
        @livewire('account.manage.components.manage-role' , ['role' => $role->name], key($role->id) )
    </div>
@endif
  
<!-- event-host -->

@if($role->name == App\Helpers\UserRoles::EVENT_HOST)  
<div class="py-2">
    <h5 class="text-primary text-capitalize">Event Host</h5>
</div>
@livewire('dashboard.manage.components.e-h-dashboard')
<div class="d-flex justify-content-end">
        @livewire('account.manage.components.manage-role' , ['role' => $role->name], key($role->id) )
    </div>
@endif
   
<!-- food-supplier -->

@if($role->name == App\Helpers\UserRoles::FOOD_SUPPLIER)
<div class="py-2">
    <h5 class="text-primary text-capitalize">Food Supplier</h5>
</div>
@livewire('dashboard.manage.components.f-s-dashboard')
<div class="d-flex justify-content-end">
        @livewire('account.manage.components.manage-role' , ['role' => $role->name], key($role->id) )
    </div>
@endif
<!-- music artisa -->
@if($role->name == App\Helpers\UserRoles::MUSICAL_ARTIST)
<div class="py-2">
    <h5 class="text-primary text-capitalize">Musical Artist</h5>
</div>
@livewire('dashboard.manage.components.m-a-dashboard')
<div class="d-flex justify-content-end">
        @livewire('account.manage.components.manage-role' , ['role' => $role->name], key($role->id) )
    </div>
@endif

<!-- artist manager -->
@if($role->name == App\Helpers\UserRoles::ARTIST_MANAGER)
<div class="py-2">
    <h5 class="text-primary text-capitalize">Artist Manager</h5>
</div>
@livewire('dashboard.manage.components.a-m-dashboard')
<div class="d-flex justify-content-end">
        @livewire('account.manage.components.manage-role' , ['role' => $role->name], key($role->id) )
    </div>
@endif

<!-- promotors -->
@if($role->name == App\Helpers\UserRoles::PROMOTER)
<div class="py-2">
    <h5 class="text-primary text-capitalize">Promoter</h5>
</div>
@livewire('dashboard.manage.components.p-dashboard')
<div class="d-flex justify-content-end">
        @livewire('account.manage.components.manage-role' , ['role' => $role->name], key($role->id) )
    </div>
@endif

<!-- sponsors -->
@if($role->name == App\Helpers\UserRoles::SPONSER)
<div class="py-2">
    <h5 class="text-primary text-capitalize">Sponser</h5>
</div>
@livewire('dashboard.manage.components.s-dashboard')
<div class="d-flex justify-content-end">
        @livewire('account.manage.components.manage-role' , ['role' => $role->name], key($role->id) )
    </div>
@endif
@endforeach

