<x-cms-root>
    <div class="wrapper">
        @php
            $component_view = 'booking.manage.components.'.$service.'-booking-list';
        @endphp
        @livewire($component_view,['service' => $service])
    </div>

</x-cms-root>

