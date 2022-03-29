<div>
    <div class="row">
            <div class="col-lg-8 ">
                <h2 class="text-primary"> Food Supplier Bookings Detail</h2>
                <div>
                    <h5>Active Food Supplier Bookings Detail</h5>
                    <p>Track your Active Food Supplier Bookings Detail</p>
                </div>
            </div>
          

        </div>
        <div class="d-flex justify-content-between">
                    <div class="d-flex justify-content-start">
                        <ul class="nav nav-material ">
                            <li class="nav-item">
                                <a class="nav-link active text-success " href="{{route('booking.manage.index',['service' => 'f-supplier'])}}">Go
                                    Back</a>
                            </li>

                        </ul>
                    </div>

                </div>
    <div class="card no-b shadow no-r">
        <div class="card-body">
            <div class="row no-gutters">

                <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                        <div class="pl-4 my-3 text-uppercase ">
                            <h5 class="text-primary">Food Supplier Detail</h5>
                        </div>
                        <div class="mt-3 mr-5" >
                            <figure class="avatar  ">
                                @if($fSupplier->menu_gallery)
                                <img src="{{ asset($fSupplier->menu_gallery) }}" alt="">
                                @endif
                            </figure>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <div class="px-4">
                                <strong>Name</strong>
                                <p><span>{{$fSupplier->user->name}}</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <div class="px-4">
                                <strong>Location</strong>
                                <p><span>{{$fSupplier->address}} </span></p>
                            </div>
                        </div>



                        <div class="col-lg-4 col-md-6 col-6 ">
                            <div class="px-4">
                                <strong>Available From/To</strong>
                                <p><span>{{Carbon\Carbon::parse($fSupplier->opening_time)->format('g:i
                                A')}} - {{
                                Carbon\Carbon::parse($fSupplier->closing_time)->format('g:i A')}}
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



                    </div>
                </div>

            </div>
        </div>

    </div>



    <div class="my-3">
        <h3 class="text-primary">Food Supplier Bookings</h3>
    </div>
    @forelse($bookings as $booking)
    <div class="card no-b shadow mb-3 ">
        <div class="card-body">
            <div class="row no-gutters">
                <div class="col-md-12">
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
                                    <strong>Available From/To</strong>
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
                                    <strong>Booking Status</strong>
                                    @if($booking->status == 'pending')
                                    <p><span class="badge badge-secondary">Pending</span></p>
                                    @elseif($booking->status == 'declined')
                                    <p><span class="badge badge-primary">Declined</span></p>
                                    @else
                                    <p><span class="badge badge-success">Accepted</span></p>
                                    @endif

                                </div>
                            </div>





                        </div>
                    </div>
                </div>


            </div>

            <div class="row no-gutters">
                <div class="col-md-12">
                    <div>
                        <div class="pl-4 my-3 text-uppercase ">
                            <h5 class="text-primary">Event Host Contact Detail</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 ">
                                <div class="px-4">
                                    <strong>Host Name</strong>
                                    <p><span>{{$booking->event_host->name}}</span></p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 ">
                                <div class="px-4">
                                    <strong>Host Email</strong>
                                    <p><span>{{$booking->event_host->email}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
    @empty
    <div>bookings not found !</div>
     @endforelse




</div>
