

<div class="dashboard-card">
    <div class="row ">
        <div class="col-lg-4 col-md-6 col-12  mb-3">

            <div class="card ">
                <div class="card-body">
                    <a href="{{route('offer.manage.index',['service_type' => 'f-supplier'])}}">
                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$count['offers']}}</h1>
                            <div class="mt-2"><i class="icon icon-layers s-20 align-items-center bg-black rounded-circle p-2"></i>
                            </div>
                        </div>
                    </a>

                    <div class="d-flex justify-content-between">
                        <small class="text-muted">Total Offers !</small>
                        @if($count['unseen_offers'] > 0)
                        <a href="{{route('offer.manage.index',['service_type' => 'f-supplier'])}}">
                            <span class="badge badge-danger"> Unseen Offers ( {{$count['unseen_offers']}} )</span>
                        </a>
                        @endif
                    </div>

                </div>
            </div>

        </div>



        <div class="col-lg-4 col-md-6 col-12  mb-3">

            <div class="card ">
                <div class="card-body">
                    <a href="{{route('booking.manage.index',['service' => 'f-supplier'])}}">
                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$count['bookings']}}</h1>
                            <div class="mt-2"><i class="icon icon-notebook-3 s-20 align-items-center bg-black rounded-circle p-2"></i>
                            </div>
                        </div>
                    </a>

                    <div class="d-flex justify-content-between">
                        <small class="text-muted">Total Bookings !</small>
                        @if($count['unseen_bookings'] > 0)
                        <a href="{{route('booking.manage.index',['service' => 'f-supplier'])}}">
                            <span class="badge badge-danger"> Unseen Bookings ( {{$count['unseen_bookings']}} )</span>
                        </a>
                        @endif
                    </div>

                </div>
            </div>

        </div>



        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <a href="{{ route('food-supplier.manage.menu',['supplier' => auth()->user()->id]) }}">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$count['menues']}}</h1>
                            <div class="mt-2"><i class="icon icon-lock s-20 align-items-center bg-black rounded-circle p-2"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <small class="text-muted">Total Menu Items !</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>



        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary"> $ {{$totalAmount}}</h1>
                        <div class="mt-2"><i class="icon icon-dollar s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Total Revenue !</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<livewire:dev.comment align="left" component="Food Supplier Dashboard" />

<!-- {{-- Events Calender --}} -->
<!-- <div>
    <div>
        <h2 class="text-primary text-capitalize">Calendar Veiw</h2>
        <p>Event Calender, you can view your booked events with dates and details on calendar.</p>
    </div>

    <div mbsc-page class="demo-event-labels">
        
            <div id="demo-events-labels"></div>
   
    </div>
</div> -->


