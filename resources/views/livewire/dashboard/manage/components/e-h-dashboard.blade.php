

<div class="dashboard-card">
    <div class="row ">

        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary">00</h1>
                        <div class="mt-2"><i class="icon icon-layers s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Total Events !</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary">00</h1>
                        <div class="mt-2"><i class="icon icon-notebook-3 s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Scheduled Events !</small>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary">00</h1>
                        <div class="mt-2"><i class="icon icon-incoming s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Successful Events !</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <a href="{{route('my-offer.manage.sent-offer')}}">
                <div class="card ">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$count['offers']}}</h1>
                            <div class="mt-2"><i class="icon icon-layers s-20 align-items-center bg-black rounded-circle p-2"></i>
                            </div>
                        </div>


                        <div class="d-flex justify-content-between">
                            <small class="text-muted">My Offers ( For All Services ) !</small>

                        </div>

                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <a href="{{route('my-booking.manage.my-booking-cards')}}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$count['bookings']}}</h1>
                            <div class="mt-2"><i class="icon icon-incoming s-20 align-items-center bg-black rounded-circle p-2"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <small class="text-muted">My Bookings ( For All Services )!</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>



        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary">00</h1>
                        <div class="mt-2"><i class="icon icon-dollar s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Sold Tickets Revenue !</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Events Calender --}}
<!-- <div>
<div>
    <h2 class="text-primary text-capitalize">Calendar Veiw</h2>
    <p>Event Calender, you can view your booked events with dates and details on calendar.</p>
</div>

<div mbsc-page class="demo-event-labels">
    <div style="height:100%">
        <div id="demo-events-labels"></div>
    </div>
</div>
</div> -->



