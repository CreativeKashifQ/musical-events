
        @switch(auth()->user()->active_role)
        @case(App\Helpers\UserRoles::SUPER_ADMIN)
            @include('layouts.common.cms.components.s-a-nav')
            @break
        @case(App\Helpers\UserRoles::VENUE_PROVIDER)
            @include('layouts.common.cms.components.v-p-nav')
            @break
        @case(App\Helpers\UserRoles::EQUIPMENT_PROVIDER)
            @include('layouts.common.cms.components.e-p-nav')
            @break
        @case(App\Helpers\UserRoles::MUSICAL_ARTIST)
            @include('layouts.common.cms.components.m-a-nav')
            @break
        @case(App\Helpers\UserRoles::ARTIST_MANAGER)
            @include('layouts.common.cms.components.a-m-nav')
            @break
        @case(App\Helpers\UserRoles::EVENT_HOST)
           @include('layouts.common.cms.components.e-h-nav')
            @break
        @case(App\Helpers\UserRoles::FOOD_SUPPLIER)
            @include('layouts.common.cms.components.f-s-nav')
            @break
        @case(App\Helpers\UserRoles::PROMOTER)
            @include('layouts.common.cms.components.p-nav')
            @break
        @case(App\Helpers\UserRoles::SPONSER)
            @include('layouts.common.cms.components.s-nav')
            @break
        @default
            @include('layouts.common.cms.components.a-r-nav')

        @endswitch
