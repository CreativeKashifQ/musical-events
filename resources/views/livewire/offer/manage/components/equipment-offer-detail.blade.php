<div>

    <div class="card no-b shadow no-r">
        <div class="card-body">
            <div class="row no-gutters">

                <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                        <div class="pl-4 my-3 text-uppercase ">
                            <h5 class="text-primary">Equipment Detail</h5>
                        </div>
                        <div class="mt-3 mr-5" >
                            <figure class="avatar  ">
                                <img src="{{ asset($gallery->image) }}" alt="">
                            </figure>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <div class="px-4">
                                <strong>Name</strong>
                                <p><span>{{$equipment->name}}</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <div class="px-4">
                                <strong>Location</strong>
                                <p><span>{{$equipment->location}} </span></p>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-6 ">
                            <div class="px-4">
                                <strong>Rate/hr</strong>
                                <p><span>$ {{$equipment->hourly_rate}} </span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 ">
                            <div class="px-4">
                                <strong>Quantity</strong>
                                <p><span>{{$equipment->quantity}} </span></p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-6 ">
                            <div class="px-4">
                                <strong>Availability From-To</strong>
                                <p><span>{{Carbon\Carbon::parse($equipment->opening_time)->format('g:i
                                A')}} - {{
                                Carbon\Carbon::parse($equipment->closing_time)->format('g:i A')}}
                                    </span></p>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-6 ">
                            <div class="px-4">
                                <strong>Status</strong>

                                <p><span class="badge badge-success">Available</span></p>

                                <!-- <p><span class="badge badge-danger">Booked</span></p> -->

                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12 ">
                            <div class="px-4">
                                <strong>Description</strong>
                                <p><span>{{$equipment->description}} </span></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>



    <div class="my-3">
        <h3 class="text-primary">equipment Offers</h3>
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
                            <div class="col-lg-4 col-md-6 col-12 ">
                                <div class="px-4">
                                    <strong>Offer Rate/hr</strong>
                                    <p><span> $ {{$offer->rate}} </span></p>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 col-6 ">
                                <div class="px-4">
                                    <strong>Hours</strong>
                                    <p><span>{{$offer->hours}} </span></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 ">
                                <div class="px-4">
                                    <strong>Quantity</strong>
                                    <p><span>{{$offer->capacity}} </span></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 ">
                                <div class="px-4">
                                    <strong>Model/Company</strong>
                                    <p><span>{{$offer->message}} </span></p>
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
                                @php
                                    $totalOfferAmount = $offer->rate * $offer->hours;
                                @endphp
                                <div class="px-4">
                                    <strong>Offer Total Amount</strong>
                                    <p><span>$ {{$totalOfferAmount}}
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
                                    <p><span>Offer Sent </span></p>
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
    <div>Offers not found !</div>
     @endforelse

</div>
