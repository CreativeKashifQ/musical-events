<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">Book Services</h2>
                    <p>Manage your services's features to be host and publish settings.</p>
                </div>
                {{-- venue provider sub-nav --}}
                <div class="sub-nav">
                    @livewire('ehost.manage.components.sub-nav',['service'=> $service])
                </div>

            </div>
        </div>

        @php
            $component_view = "ehost.manage.components.book-".strtolower($service);
        @endphp
        @livewire($component_view)
    </div>
</x-cms-root>
