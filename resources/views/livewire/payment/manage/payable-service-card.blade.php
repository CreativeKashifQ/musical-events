<x-cms-root>

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">Payment Method</h2>
                    <p>Complete all steps and pay to book service</p>
                </div>
            </div>
        </div>
        
        @livewire('payment.manage.components.sub-nav',['offer' => $offer])
        @php
            $component_view = 'payment.manage.components.payable-'.$service.'-service-detail';
        @endphp
        @livewire($component_view,['offer' => $offer])



</x-cms-root>
