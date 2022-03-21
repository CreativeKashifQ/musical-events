<div>
    <div class="row">
        <div class="col-lg-6 ">
            <div class="card-body">
                <div>
                    <h5>My Bookings List</h5>
                    <p>Manage your bookings.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-6">
                        <style type="text/css">
                            select {
                                font-size: 14px !important;
                                text-indent: 3%;
                            }

                            select option {
                                color: var(--primary) !important;
                                text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                            }
                        </style>
                        <div class="form-material  ">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select class="form-control" wire:model="orderBy">
                                        <option disabled selected class="text-muted">__ORDER BY__</option>
                                        <option value="asc">Asc</option>
                                        <option value="desc">Desc</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-6">

                        <div class="form-material ">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select class="form-control" wire:model="searchBy">
                                        <option disabled selected class="text-muted">__SEARCH BY__</option>
                                        <option value="name">Name</option>
                                        <option value="location">Location</option>
                                        <option value="capacity">Capacity</option>
                                        <option value="hourly_rate">Rate</option>
                                        <option value="description">Description</option>

                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="form-material ">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" autocomplete="off" class="form-control" wire:model="search"
                                        placeholder="Search by select type">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="card-body">

        <div class="row no-gutters ">
            @forelse ($bookings as $booking)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="lslide active" style="width: 407.333px; margin-right: 10px;">
                    <div class="mb-2 card no-b p-3">
                        <h4 class="text-primary">{{$booking->service->name}}</h4>
                        <small> {{$booking->service->location}}</small>
                        <div class="mt-2 d-flex justify-content-between">
                            <div>
                                @if($booking->service->is_available )
                                <div class="badge badge-success s-12">Available</div>
                                @else
                                <div class="badge badge-primary  s-12">Booked</div>
                                @endif
                            </div>
                            <div>
                                <h2 class="text-primary">${{$booking->service->hourly_rate}}<span
                                        class="s-18 text-muted">/h</span>
                                </h2>
                            </div>
                        </div>
                        <div class="mt-1">
                            <i class="icon-clock-o mr-1"> </i>
                            {{Carbon\Carbon::parse($booking->service->opening_time)->format('g:i A')}} - {{
                            Carbon\Carbon::parse($booking->service->closing_time)->format('g:i A')}}
                            <i class="icon-calendar mr-1 ml-2"> </i>
                            {{Carbon\Carbon::parse($booking->service->date)->format('d-M-Y')}}
                        </div>

                        <div class="mt-2">
                            <i class="icon-wheelchair mr-1"> </i>
                            Capacity ( {{$booking->service->capacity}} )
                            <i class="icon-settings-3 mr-1 ml-2"> </i>
                            Maintenance ( {{$booking->service->maintenance_updated_status}} )
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 col-12">
                                <i class="icon-info mr-1"> </i>
                                <small>Offer ( {{$booking->rate}} $ )</small> ,
                                <small>Capacity ( {{$booking->capacity}} $ )</small> ,
                                <small>Hours ( {{$booking->hours}} $ )</small> ,
                                <small>Date ( {{Carbon\Carbon::parse($booking->date)->format('d-M-Y')}} )</small> ,
                                <small>Time (  {{Carbon\Carbon::parse($booking->start_time)->format('g:i A')}} - {{
                                    Carbon\Carbon::parse($booking->end_time)->format('g:i A')}} )</small>
                            </div>
                        </div>


                        @if($booking->status == 'declined' && $booking->remarks != null)
                        <div class="d-flex justify-content-end" >
                            <a href="{{route('send-offer.manage.offer-form',['serviceType' => 'venue','serviceId' => $booking->service->id])}}"
                                class="btn btn-sm btn-secondary">Send Offer Again</a>
                        </div>
                        @elseif($booking->status == 'accepted' && $booking->remarks != null)
                        <div class="d-flex justify-content-end" >
                            <a href="{{route('my-booking.manage.my-booking-cards',['service' => 'venue','offer' => $booking->id])}}"
                                class="btn btn-sm btn-success">Pay Now </a>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
            @empty
            Records Not Found
            @endforelse
        </div>

        <style>
            .pagination .page-link {
                width: 30px !important;
                height: 30px !important;
                background-color: #0c101b !important;
                line-height: 28px !important;
            }

            .page-item.disabled .page-link {
                border-color: rgb(31, 31, 31) !important;
            }
        </style>
        <div class="s-12 mt-4">
            {{$bookings->links()}}
        </div>
        <livewire:dev.comment align="left" component="My Venue Bookings" />
    </div>
</div>
