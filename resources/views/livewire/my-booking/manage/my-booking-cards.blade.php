<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">My Bookings</h2>
                    <p>Manage your bookings</p>
                </div>
            </div>
        </div>
        @livewire('my-booking.manage.components.sub-nav',['service' => $service])

        @php
            $component_view = 'my-booking.manage.components.my-'.$service.'-bookings';
        @endphp
        @livewire($component_view,['service' => $service])

    </div>

</x-cms-root>
