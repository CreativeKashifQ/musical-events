<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">My Offers</h2>
                    <p>Manage your offers, by bargaining.</p>
                </div>
            </div>
        </div>
        @livewire('my-offer.manage.components.sub-nav',['service' => $service])

        @php
            $component_view = 'my-offer.manage.components.my-'.$service.'-offers';
        @endphp
        @livewire($component_view,['service' => $service])

    </div>

</x-cms-root>
