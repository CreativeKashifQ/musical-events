
<x-cms-root>
        <div class="d-flex justify-content-between">
            <div>
            <h2 class="text-primary text-capitalize">Hello {{auth()->user()->name}}</h2>
                <p>Welcome Back!</p>
            </div>
            <div>
            @livewire('account.manage.components.switch-role')
            </div>
        </div>
        
        @switch($active_role)
            @case(App\Helpers\UserRoles::SUPER_ADMIN)
                @livewire('dashboard.manage.components.s-a-dashboard')
                @break
            @case(App\Helpers\UserRoles::VENUE_PROVIDER)
                @livewire('dashboard.manage.components.v-p-dashboard')
                @break
            @case(App\Helpers\UserRoles::EQUIPMENT_PROVIDER)
                @livewire('dashboard.manage.components.e-p-dashboard')
                @break
            @case(App\Helpers\UserRoles::MUSICAL_ARTIST)
                @livewire('dashboard.manage.components.m-a-dashboard')
                @break
            @case(App\Helpers\UserRoles::ARTIST_MANAGER)
                @livewire('dashboard.manage.components.a-m-dashboard')
                @break
            @case(App\Helpers\UserRoles::EVENT_HOST)
                @livewire('dashboard.manage.components.e-h-dashboard')
                @break
            @case(App\Helpers\UserRoles::FOOD_SUPPLIER)
                @livewire('dashboard.manage.components.f-s-dashboard')
                @break
            @case(App\Helpers\UserRoles::PROMOTER)
                @livewire('dashboard.manage.components.p-dashboard')
                @break
            @case(App\Helpers\UserRoles::SPONSER)
                @livewire('dashboard.manage.components.s-dashboard')
                @break
            @case('AllRoles')
                @livewire('dashboard.manage.components.a-r-dashboard')
                @break
            @default
        @endswitch
</x-cms-root>
