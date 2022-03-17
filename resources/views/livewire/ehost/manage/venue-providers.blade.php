<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">Book Services</h2>
                    <p>Manage your services's features to be host and publish settings.</p>
                </div>
                {{-- venue provider sub-nav --}}
                <div class="sub-nav">
                    @livewire('ehost.manage.components.sub-nav')
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 ">
                <div class="card-body">
                    <div>
                        <h5>Venues List</h5>
                        <p>Search Venues, If meet your requirements, booked them</p>
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

        <div class="row no-gutters mx-auto">
            @forelse ($venues as $venue)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="lslide active" style="width: 407.333px; margin-right: 10px;">
                    <div class="mb-2 card no-b p-3">
                        <h4 class="text-primary">{{$venue->name}}</h4>
                        <small> {{$venue->location}}</small>
                        <div class="mt-2 d-flex justify-content-between">
                            <div>
                                @if($venue->is_available)
                                <div class="badge badge-success s-12">Available</div>
                                @else
                                <div class="badge badge-primary  s-12">Booked</div>
                                @endif
                            </div>
                            <div>
                                <h2 class="text-primary">${{$venue->hourly_rate}}<span class="s-18 text-muted">/h</span>
                                </h2>
                            </div>
                        </div>
                        <div class="mt-1">
                            <i class="icon-clock-o mr-1"> </i>
                            {{Carbon\Carbon::parse($venue->opening_time)->format('g:i A')}} - {{
                            Carbon\Carbon::parse($venue->closing_time)->format('g:i A')}}
                            <i class="icon-calendar mr-1 ml-2"> </i>
                            {{Carbon\Carbon::parse($venue->date)->format('d-M-Y')}}
                        </div>

                        <div class="mt-2">
                            <i class="icon-wheelchair mr-1"> </i>
                            Capacity ( {{$venue->capacity}} )
                            <i class="icon-settings-3 mr-1 ml-2"> </i>
                            Maintenance ( {{$venue->maintenance_updated_status}} )
                        </div>

                        @if($venue->maintenance_updated_status == 'required')
                        <strong class="my-2">Maintenance Detail</strong>
                        @forelse ($under_maintenances as $under_maintenance)
                        @if($under_maintenance->venue_id == $venue->id)
                        <div>
                            <i class="icon-calendar mr-1"> </i>
                            {{Carbon\Carbon::parse($under_maintenance->date)->format('d-M-Y')}}
                            <i class="icon-clock-o mr-1 ml-2"> </i>
                            {{Carbon\Carbon::parse($under_maintenance->start_time)->format('g:i A')}} - {{
                            Carbon\Carbon::parse($under_maintenance->end_time)->format('g:i A')}}
                        </div>
                        @endif
                        @empty

                        @endforelse
                        @endif

                        <strong class="my-2">Venue Gallery</strong>
                        <div class="d-flex justify-content-between">
                            <div class="avatar-group">
                                @forelse ($images as $image)
                                @if($image->service_id == $venue->id)
                                <figure class="avatar no-shadow">
                                    <a href="{{route('ehost.manage.gallery',['galleryId' => $venue->id])}}"><img
                                            src="{{asset($image->image)}}" alt="image"></a>
                                </figure>
                                @endif
                                @empty
                                <span>images not found</span>
                                @endforelse
                            </div>

                            <div class="float-right">
                                <a href="events-single.html" class="btn btn-sm btn-success mr-2 ">Book</a>
                                @if(auth()->user()->offer_status == true )
                                <a  class="btn btn-sm btn-primary">Offer Sent</a>
                                @else
                                <a href="{{route('ehost.manage.send-offer',['venueId' => $venue->id])}}" class="btn btn-sm btn-secondary">Send Offer</a>
                                @endif
                            </div>
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
        <div class="s-12">
            {{$venues->links()}}
        </div>
        <livewire:dev.comment align="left" component="Event Host Services" />



        <script>
            document.getElementById('nav-venue-1').classList.add('active');
        </script>

    </div>

</x-cms-root>
