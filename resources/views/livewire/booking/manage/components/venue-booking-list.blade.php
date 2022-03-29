<div>
<div class="row">
    <div class="col-lg-6 ">
        <h2 class="text-primary">Venue Bookings</h2>
        <div class="pb-3">
            <h5>Active Venue Bookings</h5>
            <p>Track your active or Iactive Venues Bookings, Use Details link to Accept or Decline Offer</p>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-2">
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
                <div class="form-material pt-5 pb-3">
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
            <div class="col-lg-2 col-md-2 col-2">

                <div class="form-material pt-5 pb-3">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="text-muted">Search By</label>
                            <select class="form-control" wire:model="searchBy">
                                <option disabled selected class="text-muted">__SEARCH BY__</option>
                                <option value="name">Name</option>
                                <option value="location">Location</option>
                                <option value="city">City</option>
                                <option value="country">Country</option>
                                <option value="capacity">Capacity</option>
                                <option value="hourly_rate">Price</option>
                               

                            </select>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-8">
                <div class="form-material pt-5 pb-3">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="text-muted">Search</label>
                            <input type="text" autocomplete="off" class="form-control" wire:model="search" placeholder="type...">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row">

    <div class="col-lg-12">

        <div class="d-flex justify-content-between">
            <div class="d-flex justify-content-start">
                <ul class="nav nav-material ">
                    <li class="nav-item">
                        <a class="nav-link active text-success " href="">Active</a>
                    </li>

                </ul>
            </div>

        </div>
        <div class="table-responsive ">
            <style>
                table thead tr {
                    color: white !important;
                }

                tbody tr {
                    color: #9ca8b0 !important;
                }
            </style>
            <table class="table table-borderless card-body p-5">
                <thead>
                    <tr class="bg-dark font-weight-bold ">
                        <th>#</th>
                        <th><span class="d-none d-lg-block">Venue Name </span></th>
                        <th><span class="">Location </span></th>
                        <th><span class="d-none d-lg-block">City </span></th>
                        <th><span class="d-none d-lg-block">Country </span></th>
                        <th>Capacity</th>
                        <th><span class="d-none d-lg-block">Duration </span></th>
                        <th><span class="d-none d-lg-block">Rate/hr </span></th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($venues as $key => $venue)
                    <tr>
                        <td>{{++$key}}</td>
                        <td><span class="d-none d-lg-block">{{$venue->name}} </span></td>
                        <td><span >{{$venue->location}} </span></td>
                        <td><span class="d-none d-lg-block">{{$venue->city}} </span></td>
                        <td><span class="d-none d-lg-block">{{$venue->country}} </span></td>
                        <td>{{$venue->capacity}}</td>
                        <td>
                            <span class="d-none d-lg-block">{{Carbon\Carbon::parse($venue->start_time)->format('g:iA')}} - {{
                                        Carbon\Carbon::parse($venue->end_time)->format('g:i A')}}</span>
                        </td>
                        <td><span class="d-none d-lg-block">$ {{$venue->hourly_rate}}</span>
                        </td>

                        <td>
                        <a href="{{ route('booking.manage.booking-card',['serviceType' => 'venue','serviceId' => $venue])}}">Bookings</a>
                        @foreach($venue->bookings as $booking)
                        @if(!$booking->is_seen)
                        <a href="{{ route('booking.manage.booking-card',['serviceType' => 'venue','serviceId' => $venue])}}"><span class="badge badge-danger p-1 " >Un-seen </span></a>
                        </td>|
                        @endif
        
                        @endforeach
                        
                        </td>
                    </tr>
                    @empty
                    <tr class="text-center my-4">
                        <td colspan="7"><strong> Records Not Found !</strong></td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<livewire:dev.comment align="left" component="Venue Bookings" />
</div>