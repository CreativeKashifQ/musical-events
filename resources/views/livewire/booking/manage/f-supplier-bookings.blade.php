<x-cms-root>
<div>
   
    <div class="my-3">
    <h2 class="text-primary"> Food Supplier Bookings </h2>
            <div>
                <h5>Active Food Supplier Bookings Detail</h5>
                <p>You can track your bookings , booked from event host.</p>
            </div>
    </div>
    @forelse($bookings as $booking)
    <div class="card no-b shadow mb-3 ">
        <div class="card-body">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div>
                        <div class="pl-4 my-3 text-uppercase ">
                            <h5 class="text-primary">booking Detail</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 ">
                                <div class="px-4">
                                    <strong>Host Name</strong>
                                    <p><span>{{$booking->event_host->name}}</span></p>
                                </div>
                            </div>







                            <div class="col-lg-4 col-md-6 col-6 ">
                                <div class="px-4">
                                    <strong>Availability From-To</strong>
                                    <p><span>{{Carbon\Carbon::parse($booking->start_time)->format('g:i
                                A')}} - {{
                                Carbon\Carbon::parse($booking->end_time)->format('g:i A')}}
                                        </span></p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-6 ">
                                <div class="px-4">
                                    <strong>Booking Date</strong>
                                    <p><span>{{Carbon\Carbon::parse($booking->date)->format('d, M Y')}}
                                        </span></p>
                                </div>
                            </div>




                            <div class="col-lg-4 col-md-6 col-6 ">
                                <div class="px-4">
                                    <strong>booking Status</strong>
                                    @if($booking->status == 'pending')
                                    <p><span class="badge badge-secondary">Pending</span></p>
                                    @elseif($booking->status == 'declined')
                                    <p><span class="badge badge-primary">Declined</span></p>
                                    @else
                                    <p><span class="badge badge-success">Accepted</span></p>
                                    @endif

                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12 ">
                                <div class="px-4">
                                    <i class="icon-envelope-o mr-1"> </i>
                                    <strong class="font-weight-bold">{{$booking->event_host->name}} : ( Event Host ) </strong>
                                    <br>
                                    <p><span>{{$booking->message}} </span></p>
                                </div>
                            </div>

                            @if($booking->remarks != null)
                            <div class="col-lg-12 col-md-12 col-12 ">
                                <div class="px-4">
                                    <i class="icon-envelope-o mr-1"> </i>
                                    <small class="font-weight-bold">{{$booking->service->user->name}} : ( You ) </small>

                                    @if($booking->ask_amount != null)
                                    <br>
                                    <small>Ask Amount ({{$booking->ask_amount}} $)</small>
                                    @endif
                                    <br>
                                    <small>{{$booking->remarks}}</small>
                                </div>
                            </div>

                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @livewire('booking.manage.components.booking-accept-decline',['booking' => $booking , 'id' => $booking->id])
                </div>

            </div>
        </div>

    </div>
    @empty
    <div class="text-primary">Bookings not found !</div>
    @endforelse

</div>

</x-cms-root>
