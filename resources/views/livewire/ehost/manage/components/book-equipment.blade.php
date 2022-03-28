<div>
    <div class="row">
        <div class="col-lg-4 ">
            <div class="card-body">
                <div>
                    <h5>Equipment List  </h5>
                    <p>Search equipments by date, location , rate and capacity, If meet your requirements & available, send offer, if owner accept then book that.</p>
                </div>
            </div>

        </div>
        <div class="col-lg-8">
            <div class="card-body">
                 <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-material ">
                            <div class="form-group form-float">
                                @php
                                    $minDate = now()->format('Y-m-d')
                                @endphp
                                <div class="form-line">
                                    <lable class="text-muted">Select Booking Date</lable>
                                    <input type="date" min="{{$minDate}}" autocomplete="off" class="form-control" wire:model="searchDate"
                                        placeholder="Search by select type">
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <lable class="text-muted">Order By</lable>
                                    <select class="form-control" wire:model="orderBy">
                                        <option   class="text-muted">__ORDER BY__</option>
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
                                <lable class="text-muted">Search By</lable>
                                    <select class="form-control" wire:model="searchBy">
                                        <option   class="text-muted">__SEARCH BY__</option>
                                        <option value="name">Name</option>
                                        <option value="location">Location</option>
                                        <option value="quantity">Quantity</option>
                                        <option value="hourly_rate">Rate</option>


                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-material ">
                            <div class="form-group form-float">
                                <div class="form-line">
                                <lable class="text-muted">Search</lable>
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
        <div class="row no-gutters mx-auto">
            @forelse ($equipments as $equipment)

            <div class="col-lg-4 col-md-6 col-12">
                <div class="lslide active" style="width: 407.333px; margin-right: 10px;">
                    <div class="mb-2 card no-b p-3">
                        <h4 class="text-primary pb-0 mb-0">{{$equipment['equipment']->name}}</h4>
                        <small> {{$equipment['equipment']->description}} </small>
                        <small> {{$equipment['equipment']->location}} </small>
                        <div class="mt-2 d-flex justify-content-between">
                            <div>
                                @if($equipment['available'])
                                <div class="badge badge-success s-12">Available</div>
                                @else
                                <div class="badge badge-danger s-12">Un-Available</div>
                                @endif
                            </div>
                            <div>
                                <h2 class="text-primary">${{$equipment['equipment']->hourly_rate}}<span class="s-18 text-muted">/h</span>
                                </h2>
                            </div>
                        </div>
                        <div class="mt-1">
                            <i class="icon-clock-o mr-1"> </i>
                            {{Carbon\Carbon::parse($equipment['equipment']->opening_time)->format('g:i A')}} - {{
                            Carbon\Carbon::parse($equipment['equipment']->closing_time)->format('g:i A')}}
                        </div>

                        <div class="mt-2">
                            <i class="icon-pencil mr-1"> </i>
                            Color ( {{$equipment['equipment']->color}} )
                            <i class="icon-settings-3 mr-1 ml-2"> </i>
                            Weight ( {{$equipment['equipment']->weight}} )
                        </div>

                        <div class="mt-2">
                            <i class="icon-wheelchair mr-1"> </i>
                            Quantity ( {{$equipment['equipment']->quantity}} )
                            <i class="icon-settings-3 mr-1 ml-2"> </i>
                            Maintenance ( {{$equipment['equipment']->under_maintenances->count() > 0  ? "Required" : "No Required"}} )
                        </div>

                            <!-- Under Maintenences -->
                        @if($equipment['equipment']->under_maintenances->count() > 0)
                        <strong class="my-2 text-primary">Maintenance Dates</strong>
                        <div class="row ">
                        @forelse ($equipment['equipment']->under_maintenances as $under_maintenance)
                        <div class="col-6 mb-2 ">
                            <i class="icon-calendar mr-1 "> </i>
                            {{Carbon\Carbon::parse($under_maintenance->date)->format('d-M-Y')}}

                        </div>
                        @empty

                        @endforelse
                        </div>
                        @endif

                        <strong class="my-2">Equipment Gallery</strong>
                        <div class="d-flex justify-content-between">
                            <div class="avatar-group">
                                @forelse ($equipment['equipment']->images as $image)
                                <figure class="avatar no-shadow">
                                    <a
                                        href="{{route('service-gallery.manage.service-images',['serviceType' => 'equipment', 'serviceId' => $equipment['equipment']->id])}}"><img
                                            src="{{asset($image->image)}}" alt="image"></a>
                                </figure>
                                @empty
                                <span>images not found</span>
                                @endforelse
                            </div>

                            <div class="float-right">
                                @if($equipment['available'])
                                <a href="{{route('send-offer.manage.offer-form',['serviceType' => 'equipment','serviceId'=> $equipment['equipment']->id])}}"
                                    class="btn btn-sm btn-secondary">Send Offer</a>
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

        </div>


        <livewire:dev.comment align="left" component="Book EProvider" />
    </div>
</div>
