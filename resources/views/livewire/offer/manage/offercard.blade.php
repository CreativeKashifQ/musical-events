<x-cms-root>
    <div class="wrapper">


                @php
                $serviceType == 'FoodSupplier' ? $serviceType = 'f-supplier' : '';

                $view = "offer.manage.components." . strtolower($serviceType) ."-offer-detail";
                @endphp
                @livewire($view,['serviceId' => $serviceId])



        <livewire:dev.comment align="left" component="Offer Detail" />
    </div>


</x-cms-root>
