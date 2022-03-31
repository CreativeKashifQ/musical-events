<x-cms-root>
<div>
    <div class="my-3">
    <h2 class="text-primary"> Food Supplier Offers </h2>
            <div>
                <h5>Active Food Supplier Offers Detail</h5>
                <p>You can track your offers , received from event host. You can accept/reject offers by adding remarks. <br>
                    If you accept offer, event host will be able to pay initial ammount for the security reasons. It can be between $ 10 to 50 $.
                </p>
                
            </div>
    </div>
    @forelse($offers as $offer)
    <div class="card no-b shadow mb-3 ">
        <div class="card-body">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div>
                        <div class="pl-4 my-3 text-uppercase ">
                            <h5 class="text-primary">Offer Detail</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 ">
                                <div class="px-4">
                                    <strong>Host Name</strong>
                                    <p><span>{{$offer->event_host->name}}</span></p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-6 ">
                                <div class="px-4">
                                    <strong>Availability From-To</strong>
                                    <p><span>{{Carbon\Carbon::parse($offer->start_time)->format('g:i
                                A')}} - {{
                                Carbon\Carbon::parse($offer->end_time)->format('g:i A')}}
                                        </span></p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-6 ">
                                <div class="px-4">
                                    <strong>Booking Date</strong>
                                    <p><span>{{Carbon\Carbon::parse($offer->date)->format('d, M Y')}}
                                        </span></p>
                                </div>
                            </div>




                            <div class="col-lg-4 col-md-6 col-6 ">
                                <div class="px-4">
                                    <strong>Offer Status</strong>
                                    @if($offer->status == 'pending')
                                    <p><span class="badge badge-secondary">Pending</span></p>
                                    @elseif($offer->status == 'declined')
                                    <p><span class="badge badge-primary">Declined</span></p>
                                    @else
                                    <p><span class="badge badge-success">Accepted</span></p>
                                    @endif

                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12 ">
                                <div class="px-4">
                                    <i class="icon-envelope-o mr-1"> </i>
                                    <strong class="font-weight-bold">{{$offer->event_host->name}} : ( Event Host ) </strong>
                                    <br>
                                    <p><span>{{$offer->message}} </span></p>
                                </div>
                            </div>

                            @if($offer->remarks != null)
                            <div class="col-lg-12 col-md-12 col-12 ">
                                <div class="px-4">
                                    <i class="icon-envelope-o mr-1"> </i>
                                    <small class="font-weight-bold">{{$offer->service->user->name}} : ( You ) </small>

                                    @if($offer->ask_amount != null)
                                    <br>
                                    <small>Ask Amount ({{$offer->ask_amount}} $)</small>
                                    @endif
                                    <br>
                                    <small>{{$offer->remarks}}</small>
                                </div>
                            </div>

                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @livewire('offer.manage.components.offer-accept-decline',['offer' => $offer , 'id' => $offer->id])
                </div>

            </div>
        </div>

    </div>
    @empty
    <div class="text-primary">Offers not found !</div>
    @endforelse

</div>

</x-cms-root>
