<div>
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="py-2">
                <div>
                    <h5>{{$offer->service->name}} Booking Detail</h5>
                    <p>Verify Service Details, to do booking first</p>
                </div>
            </div>
            <div class=" card p-4 ">
                <h4 class="text-primary pb-0 mb-0">{{$offer->service->user->name}}</h4>
                <small> {{$offer->service->address}}</small>
                <div class="mt-2 d-flex justify-content-between">
                    <div>
                        @if($offer->status == 'pending' )
                        <div class="badge badge-secondary s-12">Pending</div>
                        @elseif($offer->status == 'declined')
                        <div class="badge badge-primary  s-12">Declined</div>
                        @else
                        <div class="badge badge-success  s-12">Accepted</div>
                        @endif

                        <strong class="ml-3"> You have to pay initial amount first. </strong>
                    </div>
                    <div>
                        <h2 class="text-primary">$ {{$payable_amount}}<span class="s-18 text-muted"></span>
                        </h2>
                    </div>
                </div>
                <div class="mt-1">
                    <i class="icon-clock-o mr-1"> </i>
                    {{Carbon\Carbon::parse($offer->start_time)->format('g:i A')}} - {{
                    Carbon\Carbon::parse($offer->end_time)->format('g:i A')}}
                    <i class="icon-clock-o mr-1 ml-2"> </i>
                    Hours ( {{$offer->hours}} )

                </div>

                <div class="mt-2">
                    <i class="icon-calendar mr-1  "> </i>
                    {{Carbon\Carbon::parse($offer->date)->format('d-M-Y')}}

                </div>


            </div>
            <div class="d-flex justify-content-between py-3">
                <a href="{{route('my-offer.manage.sent-offer')}}" class="btn btn-outline-secondary btn-sm px-4">
                    Back
                </a>

                <a href="javascript:void(0)" wire:click="payableVenueServiceDetail"
                    class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                    Next
                </a>
            </div>

            <livewire:dev.comment align="left" component="Payable Food Supplier Detail Card" />
        </div>
    </div>

    <script>
        document.getElementById('service-detail').classList.add('active');
    </script>
