<div class="row">
    <div class="col-lg-6 ">
        <h2 class="text-primary">Food Supplier Bookings</h2>
        <div class="pb-3">
            <h5>Active Food Supplier Bookings</h5>
            <p>Track your active or Iactive Food Suppliers Bookings, Use Details link to Accept or Decline Offer</p>
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
                        <th><span class="d-none d-lg-block">Food Supplier Name </span></th>
                        <th><span class="d-none d-lg-block">Location </span></th>
                        <th><span class="d-none d-lg-block">Duration </span></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

               
                    <tr>
                        <td>1</td>
                        <td><span class="d-none d-lg-block">{{$fSupplier->user->name}} </span></td>
                        <td><span class="d-none d-lg-block">{{$fSupplier->address}} </span></td>

                        <td>
                            <span class="d-none d-lg-block">{{Carbon\Carbon::parse($fSupplier->start_time)->format('g:iA')}} - {{
                                Carbon\Carbon::parse($fSupplier->end_time)->format('g:i A')}}</span></td>

                        </td>

                        <td><a
                                href="{{ route('booking.manage.booking-card',['serviceType' => 'f-supplier','serviceId' => $fSupplier->id])}}">Bookings</a>
                        </td>
                    </tr>
                

                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<livewire:dev.comment align="left" component="Food Supplier Bookings" />
