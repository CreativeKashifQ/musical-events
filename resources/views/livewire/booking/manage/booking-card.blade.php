<x-cms-root>
    <div class="wrapper">

        <div class="row">
            <div class="col-lg-8 ">
                <h2 class="text-primary"> {{ucfirst($serviceType)}} Bookings Detail</h2>
                <div>
                    <h5>Active {{ucfirst($serviceType)}} Bookings Detail</h5>
                    <p>Track your Active {{ucfirst($serviceType)}} Bookings Detail</p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between">
                    <div class="d-flex justify-content-start">
                        <ul class="nav nav-material ">
                            <li class="nav-item">
                                <a class="nav-link active text-success " href="{{route('offer.manage.index')}}">Go
                                    Back</a>
                            </li>

                        </ul>
                    </div>

                </div>

                @php
                $view = "booking.manage.components." . strtolower($serviceType) ."-booking-detail-card";
                @endphp
                @livewire($view,['serviceId' => $serviceId])
            </div>
        </div>
        <br>
        <livewire:dev.comment align="left" component="OfferDetail" />
    </div>


</x-cms-root>
