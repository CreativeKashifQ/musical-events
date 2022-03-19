<div>

        <style>
            .offer-detail-wrapper strong {
                font-weight: 700;

            }
        </style>
        <div class="p5 b-b offer-detail-wrapper">
            <div class="pl-4 my-3 text-uppercase ">
                <h5 class="text-primary">Venue Detail</h5>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="px-4">
                        <strong>Name</strong>
                        <p><span>{{$offer->service->name}}</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="px-4">
                        <strong>Location</strong>
                        <p><span>{{$offer->service->location}} </span></p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="px-4">
                        <strong>Rate/hr</strong>
                        <p><span>$ {{$offer->service->hourly_rate}} </span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="px-4">
                        <strong>Capacity</strong>
                        <p><span>{{$offer->service->capacity}} </span></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="px-4">
                        <strong>Opening-Closing Time</strong>
                        <p><span>{{Carbon\Carbon::parse($offer->service->opening_time)->format('g:i
                                A')}} - {{
                                Carbon\Carbon::parse($offer->service->closing_time)->format('g:i A')}}
                            </span></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="px-4">
                        <strong>Date</strong>
                        <p><span>{{Carbon\Carbon::parse($offer->service->date)->format('d,M Y')}} </span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="px-4">
                        <strong>Status</strong>
                        @if($offer->service->status == true)
                        <p><span class="badge badge-success">Available</span></p>
                        @else
                        <p><span class="badge badge-danger">Booked</span></p>
                        @endif
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-12 ">
                    <div class="px-4">
                        <strong>Description</strong>
                        <p><span>{{$offer->service->description}} </span></p>
                    </div>
                </div>

            </div>
        </div>
        <div class="p5 b-b offer-detail-wrapper">
            <div class="pl-4 my-3 text-uppercase ">
                <h5 class="text-primary">Offer Detail</h5>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="px-4">
                        <strong>Host Name</strong>
                        <p><span>{{$offer->event_host->name}}</span></p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="px-4">
                        <strong>Offer Rate/hr</strong>
                        <p><span> $ {{$offer->rate}} </span></p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="px-4">
                        <strong>Hours</strong>
                        <p><span>{{$offer->hours}} </span></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="px-4">
                        <strong>Duration</strong>
                        <p><span>{{Carbon\Carbon::parse($offer->start_time)->format('g:i
                                A')}} - {{
                                Carbon\Carbon::parse($offer->end_time)->format('g:i A')}}
                            </span></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="px-4">
                        <strong>Offer Total Amount</strong>
                        <p><span>$ {{$totalOfferAmount}}</span></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6 ">
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
                    <br>
                    <small>Ask Amount ({{$offer->ask_amount}} $)</small>
                    <br>
                    <small>{{$offer->remarks}}</small>
                    </div>
                </div>

                @endif

            </div>
        </div>


</div>
