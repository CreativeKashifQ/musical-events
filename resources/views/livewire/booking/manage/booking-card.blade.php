<x-cms-root>
    <div class="wrapper">


        @php
        $view = "booking.manage.components." . strtolower($serviceType) ."-booking-detail-card";
        @endphp
        @livewire($view,['serviceId' => $serviceId])

        
        <livewire:dev.comment align="left" component="Booking Detail" />
    </div>


</x-cms-root>