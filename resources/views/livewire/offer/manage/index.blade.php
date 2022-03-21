<x-cms-root>
    <div class="wrapper">
        @php
            $component_view = 'offer.manage.components.'.strtolower($service).'-offer-list';
        @endphp
        @livewire($component_view,['service' => $service])
    </div>

</x-cms-root>
