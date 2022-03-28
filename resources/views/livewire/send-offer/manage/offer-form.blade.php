<x-cms-root>
    <a href="{{route('ehost.manage.book-service')}}" class="font-weight-bold text-muted"> <i class="icon-arrow-left pr-2 "></i>Back</a>
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <h2 class="text-primary text-center mb-4">Accept Or Send Counter Offer</h4>
                <div class="pb-3">
                    <span>Event Host can send offer, Provider can accept or decline the offer<br> Update offer details  </span>
                </div>
                @php
                    $component_view = 'send-offer.manage.components.'.$serviceType.'-offer-form';
                @endphp
               @livewire($component_view,['serviceId' => $serviceId])
        </div>

    </div>

</x-cms-root>
