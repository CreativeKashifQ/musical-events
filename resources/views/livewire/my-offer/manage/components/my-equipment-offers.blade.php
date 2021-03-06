<div>
    <div class="row">
        <div class="col-lg-6 ">
            <div class="card-body">
                <div>
                    <h5>My Offers List</h5>
                    <p>Manage your offers, by bargaining.</p>
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
                                        <option value="quantity">Quantity</option>
                                        <option value="hourly_rate">Rate</option>


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
                                        placeholder="type....">
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
            @forelse ($offers as $offer)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="lslide active" style="width: 407.333px; margin-right: 10px;">
                    <div class="mb-2 card no-b p-3">
                        <h4 class="text-primary">{{$offer->service->name}}</h4>
                        <small> {{$offer->service->location}}</small>
                        <div class="mt-2 d-flex justify-content-between">
                            <div>
                                @if($offer->status == 'pending' )
                                <div class="badge badge-secondary s-12">Pending</div>
                                @elseif($offer->status == 'declined')
                                <div class="badge badge-primary  s-12">Declined</div>
                                @else
                                <div class="badge badge-success  s-12">Accepted</div>
                                @endif
                            </div>
                            <div>
                                <h2 class="text-primary">${{$offer->service->hourly_rate}}<span
                                        class="s-18 text-muted">/h</span>
                                </h2>
                            </div>
                        </div>
                        <div class="mt-1">
                            <i class="icon-clock-o mr-1"> </i>
                            {{Carbon\Carbon::parse($offer->service->opening_time)->format('g:i A')}} - {{
                            Carbon\Carbon::parse($offer->service->closing_time)->format('g:i A')}}
                            <i class="icon-calendar mr-1 ml-2"> </i>
                            {{Carbon\Carbon::parse($offer->date)->format('d-M-Y')}}
                        </div>

                        <div class="mt-2">
                            <i class="icon-wheelchair mr-1"> </i>
                            Quantity ( {{$offer->service->quantity}} )
                            <i class="icon-settings-3 mr-1 ml-2"> </i>
                            Maintenance ( {{$offer->service->under_maintenances->count() > 0 ? 'Required' : 'No Required'}} )
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 col-12">
                                <i class="icon-info mr-1"> </i>
                                <small>Offer ( {{$offer->rate}} $ )</small> ,
                                <small>Quantity ( $ {{$offer->capacity}} )</small> ,
                                <small>Hours (  {{$offer->hours}}  )</small> ,
                                <small>Date ( {{Carbon\Carbon::parse($offer->date)->format('d-M-Y')}} )</small> ,
                                <small>Time (  {{Carbon\Carbon::parse($offer->start_time)->format('g:i A')}} - {{
                                    Carbon\Carbon::parse($offer->end_time)->format('g:i A')}} )</small>,
                                 <small>Model/Company ({{$offer->message}})</small>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col-md-8 col-8">
                                <i class="icon-envelope-o mr-1"> </i>
                                <small class="font-weight-bold">{{$offer->event_host->name}} ( You ) :</small>
                                <br>
                                <small>Offer Sent</small>
                            </div>
                            @if($offer->remarks != null )
                            <div class="col-md-8 col-8">
                                <i class="icon-envelope-o mr-1"> </i>
                                <small class="font-weight-bold">{{$offer->service->user->name}} ( Owner ) :</small>
                                <br>
                                @if($offer->ask_amount != null)
                                <small>Ask Amount ( {{$offer->ask_amount}} $ )</small>
                                <br>
                                @endif
                                <small>{{$offer->remarks}}</small>
                            </div>
                            @else
                            <div class="col-md-8 col-8">
                                <i class="icon-envelope-o mr-1"> </i>
                                <small class="font-weight-bold">{{$offer->service->user->name}} ( Owner ) :</small>
                                <br>
                                <small>(Response) Waiting......</small>
                            </div>
                            @endif
                            <div class="col-md-4 col-4"> </div>
                        </div>
                        @if($offer->status == 'declined' && $offer->remarks != null)
                        <div class="d-flex justify-content-end" >
                            <a href="{{route('send-offer.manage.offer-form',['serviceType' => 'venue','serviceId' => $offer->service->id])}}"
                                class="btn btn-sm btn-secondary">Send Offer Again</a>
                        </div>
                        @elseif($offer->status == 'accepted' && $offer->remarks != null)
                        <div class="d-flex justify-content-end" >
                           @if($offer->booking == null || $offer->booking->status == 'pending' )
                            <a href="{{route('payment.manage.payable-service-card',['service' => 'equipment','offer' => $offer->id])}}"
                                class="btn btn-sm btn-success">Pay Now </a>
                            @else
                            <a
                                class="btn btn-sm btn-secondary">PAID </a>
                            @endif
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
            {{$offers->links()}}
        </div>
        <livewire:dev.comment align="left" component="My Venue Offers" />
    </div>
</div>
