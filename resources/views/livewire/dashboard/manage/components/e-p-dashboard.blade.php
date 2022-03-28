<div>


            <h2 class="text-primary text-capitalize">Hello {{auth()->user()->name}}</h2>
            <p>Welcome Back!</p>




    <div class="dashboard-card">
        <div class="row ">

            <div class="col-lg-4 col-md-6 col-12  mb-3">
            <a href="{{route('equipment.manage.index')}}">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$count['equipments']}}</h1>
                            <div class="mt-2"><i
                                    class="icon icon-layers s-20 align-items-center bg-black rounded-circle p-2"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <small class="text-muted">Total Equipments !</small>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-12  mb-3">
            <a href="{{route('booking.manage.index',['service' => 'equipment'])}}">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$count['bookings']}}</h1>
                            <div class="mt-2"><i
                                    class="icon icon-notebook-3 s-20 align-items-center bg-black rounded-circle p-2"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <small class="text-muted">Booked Equipments !</small>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-lg-4 col-md-6 col-12  mb-3">
            <a href="{{route('equipment.manage.index')}}">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$count['under_maintenances']}}</h1>
                            <div class="mt-2"><i
                                    class="icon icon-lock s-20 align-items-center bg-black rounded-circle p-2"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <small class="text-muted">Under-Maintenance Equipments !</small>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-12  mb-3">
            <a href="{{route('offer.manage.index',['service_type' => 'equipment'])}}">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$count['offers']}}</h1>
                            <div class="mt-2"><i
                                    class="icon icon-incoming s-20 align-items-center bg-black rounded-circle p-2"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <small class="text-muted">Total Offers For Equpments !</small>
                        </div>
                    </div>
                </div>
                </a>
            </div>


            <div class="col-lg-4 col-md-6 col-12  mb-3">
            <a href="{{route('equipment.manage.index')}}">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$count['InActive']}}</h1>
                            <div class="mt-2"><i
                                    class="icon icon-pause s-20 align-items-center bg-black rounded-circle p-2"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <small class="text-muted">Total Inactive Equipments !</small>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12  mb-3">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1 class=" font-weight-bold text-primary">{{$totalAmount}}</h1>
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
</div>
