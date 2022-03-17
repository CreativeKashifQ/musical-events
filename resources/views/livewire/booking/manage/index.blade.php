<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-6 ">
                <h2 class="text-primary">Venues Bookings</h2>
                <div class="pb-3">
                    <h5>Active  Venues Bookings</h5>
                    <p>Track your active or Iactive Venues Bookings, Use Details link to Accept or Decline Booking</p>
                </div>
            </div>
            <div class="col-lg-6">
               <div class="row">
                <div class="col-lg-2 col-md-2 col-2">
                    <style type="text/css">
                        select  {
                        font-size: 14px!important;
                        text-indent: 3%;
                       }

                       select option {
                       color:var(--primary)!important;
                       text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                        }

                    </style>
                    <div class="form-material pt-5 pb-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                               <select class="form-control" wire:model="orderBy">
                                <option disabled selected class="text-muted">__ORDER BY__</option>
                                <option value="asc">Asc</option>
                                <option value="desc" >Desc</option>
                               </select>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-2">

                    <div class="form-material pt-5 pb-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                               <select class="form-control" wire:model="searchBy">
                                <option disabled selected class="text-muted">__SEARCH BY__</option>
                                <option value="name">Name</option>
                                <option value="location" >Location</option>
                                <option value="capacity">Capacity</option>
                                <option value="hourly_rate">Rate</option>
                                <option value="description">Description</option>

                               </select>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-8">
                    <div class="form-material pt-5 pb-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" autocomplete="off" class="form-control" wire:model="search"
                                    placeholder="Search by selected type">

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
                                <th>Host Name</th>
                                <th>Offer</th>
                                <th><span class="d-none d-lg-block">Duration </span></th>
                                <th><span class="d-none d-lg-block">Venue Name </span></th>
                                <th><span class="d-none d-lg-block">Rate/hr </span></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- @forelse($venues as $key => $venue) --}}
                            <tr>

                                <td>1</td>
                                <td>Marvin Mckinney</td>
                                <td>$ 35</td>
                                <td><span class="d-none d-lg-block">1 AM  to 5 PM </span></td>
                                <td><span class="d-none d-lg-block">02 Academy Brixton,The SSE Arena </span></td>
                                <td><span
                                        class="d-none d-lg-block">$ 50</span>
                                </td>
                                <td><a href="{{ route('booking.manage.detail') }}">Details</a></td>
                            </tr>
                            {{-- @empty --}}
                            <tr class="text-center my-4">
                                <td colspan="7"><strong> Records Not Found !</strong></td>
                            </tr>
                            {{-- @endforelse --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <livewire:dev.comment align="left" component="VBookings" />
    </div>

</x-cms-root>

