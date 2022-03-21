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
                                <label class="text-muted">Order By</label>
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
                                <label class="text-muted">Search By</label>
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
                                <label class="text-muted">Search</label>
                                    <input type="text" autocomplete="off" class="form-control" wire:model="search"
                                        placeholder="type...">
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
                                <div class="badge badge-primary  s-12">Booked</div>
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
                            {{Carbon\Carbon::parse($booking->date)->format('d-M-Y')}}
                        </div>

                        <div class="mt-2">
                            <i class="icon-wheelchair mr-1"> </i>
                            Capacity ( {{$booking->service->capacity}} )
                            <i class="icon-settings-3 mr-1 ml-2"> </i>
                            Maintenance ( {{$booking->service->under_maintenances->count() > 0 ? 'Required' : 'No Required'}} )
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



                        <div class="mt-2 d-flex justify-content-end">

                            @if($showEmail)
                            <div class="text-center">
                                <strong>Venue Provider Contact Details </strong>
                                <div class="s-12 text-primary " style="cursor:pointer" > Name : {{$booking->service->user->name}}</div>
                                <div class="s-12 text-primary " style="cursor:pointer" > Email : {{$booking->service->user->email}}</div>
                            </div>
                            @else
                            <div>
                                <div class="badge badge-success  s-12 text-dark" style="cursor:pointer" wire:click="showEmail" >Show Contact Email</div>
                            </div>
                            @endif

                        </div>


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
