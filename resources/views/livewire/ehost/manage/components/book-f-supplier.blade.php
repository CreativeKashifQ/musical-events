<div>
    <div class="row">
        <div class="col-lg-4 ">
            <div class="card-body">
                <div>
                    <h5>Food Supplier (Search by Name, Location) </h5>
                    <p>Search food supplier by Name, location , If meet your requirements & is available, then contact with food supplier, If you book the service owner will pause the service.</p>
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
                                        <option class="text-muted">__ORDER BY__</option>
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
                                        <option class="text-muted">__SEARCH BY__</option>
                                        <option value="address">Location</option>
                                        <option value="bio">Bio</option>


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

    <div class="row">
        @forelse ($fSuppliers as $fSupplier )
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card  shadow ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9 col-9">
                                <h3 class="text-primary pb-0 mb-0">{{ $fSupplier['fSupplier']->user->name }} </h3>
                                <small class="text-muted">{{ $fSupplier['fSupplier']->user->email }} (Food
                                    Supplier)</small><br>
                                <small> {{ $fSupplier['fSupplier']->address }} </small>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="text-center pt-2  ">
                                    <figure class="avatar avatar-lg" style="width:50px;height:50px;">
                                        <img src="{{  asset($fSupplier['fSupplier']->avatar) }}"
                                            alt=""/>
                                    </figure>
                                </div>
                            </div>

                        </div>
                        <div class="mt-2">
                            @if($fSupplier['available'])
                            <div class="badge badge-success s-12">Available</div>
                            @else
                            <div class="badge badge-danger s-12">Un-Available</div>
                            @endif
                        </div>
                        <div class="mt-1">
                            <strong class="my-2 text-primary">Personal Information</strong>
                            <div>
                                <i class="icon-wheelchair mr-1"> </i>
                                Gender ( {{ $fSupplier['fSupplier']->user->profile->gender }} )
                                <i class="icon-settings-3 mr-1 ml-2"> </i>
                                Experience ( {{ $fSupplier['fSupplier']->user->profile->experience }} )

                            </div>
                            <div class="mt-2">
                                <i class="icon-phone mr-1"> </i>
                                Contact ( {{ $fSupplier['fSupplier']->user->profile->phone }} )
                            </div>

                            <div class="mt-2">
                                <i class="icon-book mr-1"> </i>
                                Bio ( {{ $fSupplier['fSupplier']->user->profile->bio }} )
                            </div>
                        </div>
                        <div class="mt-1">
                            <strong class="my-2 text-primary">Available Time</strong>
                            <div class="mt-1">
                                <i class="icon-clock-o mr-1"> </i>
                                {{ Carbon\Carbon::parse($fSupplier['fSupplier']->opening_time)->format('g:i A') }} -
                                {{                                 Carbon\Carbon::parse($fSupplier['fSupplier']->closing_time)->format('g:i A') }}
                            </div>
                        </div>
                        <div class="mt-1">
                            <strong class=" text-primary">Menu Items</strong>
                            <br>
                            <br>
                            <div class="row">
                                @forelse ($fSupplier['fSupplier']->menu_gallery as $menu)
                                    <div class="col-md-3 col-4">
                                        <figure class="avatar avatar-lg mr-2" style="width:80px;height:80px;">
                                            <a target="blank" href="{{asset($menu->image)}}">
                                            <img src="{{ $menu->image != null ? asset($menu->image) : asset('images/default.png') }}"
                                                alt="">
                                            </a>
                                        </figure><br>
                                        <strong class="pt-1">{{$menu->name}}</strong>
                                    </div>
                                @empty

                                @endforelse
                            </div>
                            <div class="mt-1">
                                <div class="d-flex justify-content-end">
                                    @if($fSupplier['available'])
                                <a href="{{route('send-offer.manage.offer-form',['serviceType' => 'f-supplier','serviceId'=> $fSupplier['fSupplier']->id])}}"
                                    class="btn btn-sm btn-secondary">Send Booking Request</a>
                                @endif
                                </div>
                            </div>
                        </div>










                    </div>

                </div>
            @empty

        @endforelse


    </div>
    @forelse ($fSuppliers as $fSupplier)
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


<livewire:dev.comment align="left" component="Book Food Supplier" />

</div>
