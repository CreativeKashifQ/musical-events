


        <h2 class="text-primary text-capitalize">Hello {{auth()->user()->name}}</h2>
        <p>Welcome Back!</p>




<div class="dashboard-card">
    <div class="row ">

        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary">00</h1>
                        <div class="mt-2"><i
                                class="icon icon-layers s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Total Venues !</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary">00</h1>
                        <div class="mt-2"><i
                                class="icon icon-notebook-3 s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Booked Venues !</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary">00</h1>
                        <div class="mt-2"><i
                                class="icon icon-lock s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Under-Maintenance Venues !</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary">00</h1>
                        <div class="mt-2"><i
                                class="icon icon-incoming s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Total Offers For Venues !</small>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary">00</h1>
                        <div class="mt-2"><i
                                class="icon icon-pause s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Total Inactive Venues !</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12  mb-3">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h1 class=" font-weight-bold text-primary">00</h1>
                        <div class="mt-2"><i
                                class="icon icon-dollar s-20 align-items-center bg-black rounded-circle p-2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <small class="text-muted">Total Amount !</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Events Calender --}}
<div>
    <div>
        <h2 class="text-primary text-capitalize">Calendar Veiw</h2>
        <p>Event Calender, you can view your booked events with dates and details on calendar.</p>
    </div>

    <div mbsc-page class="demo-event-labels">
        <div style="height:100%">
            <div id="demo-events-labels"></div>
        </div>
    </div>
</div>



<br>
<livewire:dev.comment align="left" component="VPDashboard" />
