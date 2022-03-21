<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 ">
                <h2 class="text-primary">Venue Booking Detail</h2>
                <div >
                    <h5>Active  Venue Offer Detail</h5>
                    <p>Track your Active Venues Offer Detail, Accept or Decline Offer By Accept or Decline Button</p>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="d-flex justify-content-between">
                    <div class="d-flex justify-content-start">
                        <ul class="nav nav-material ">
                            <li class="nav-item">
                                <a class="nav-link active text-success " href="{{ route('booking.manage.index') }}">Go Back</a>
                            </li>

                        </ul>
                    </div>

                </div>
                <div class="card no-b shadow no-r">
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-md-4 b-r">
                                <div class="text-center p-5 mt-5">
                                    <figure class="avatar avatar-xl">
                                        <img src="{{ asset('images/logo.png') }}" alt=""></figure>
                                    <div>
                                        <h4 class="p-t-10">02 Academy Brixton,The SSE Arena</h4>

                                    </div>

                                    <div class="mt-5">
                                        <div class="d-flex justify-content-between">
                                            <a href=""  class="btn btn-outline-primary btn-sm px-4   ">
                                                <div class="spinner-border spinner-border-sm text-danger mr-2" role="status"
                                                    wire:loading.delay wire:target="update">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                Decline
                                            </a>
                                            <a href=""  class="btn btn-outline-success btn-sm px-4   ">
                                                <div class="spinner-border spinner-border-sm text-success mr-2" role="status"
                                                    wire:loading.delay wire:target="update">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                Accepted
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <style>
                                    .offer-detail-wrapper strong{
                                        font-weight: 700;

                                    }
                                </style>
                                <div class="p5 b-b offer-detail-wrapper">
                                    <div class="pl-4 my-3 text-uppercase ">
                                        <h5 class="text-primary">Venue Detail</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12 ">
                                            <div class="px-4">
                                                <strong>Name</strong>
                                                <p><span>Taj Mehal Markee</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12 ">
                                            <div class="px-4">
                                                <strong>Location</strong>
                                                <p><span>Tibba Sultan Pur </span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-6 ">
                                            <div class="px-4">
                                                <strong>Capacity</strong>
                                                <p><span>200 </span></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6 ">
                                            <div class="px-4">
                                                <strong>Rate/hr</strong>
                                                <p><span>$ 500 </span></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12 ">
                                            <div class="px-4">
                                                <strong>Description</strong>
                                                <p><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </span></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="p5 b-b offer-detail-wrapper">
                                    <div class="pl-4 my-3 text-uppercase ">
                                        <h5 class="text-primary">Booking Detail</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12 ">
                                            <div class="px-4">
                                                <strong>Host Name</strong>
                                                <p><span>Marvin Mckinney</span></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6 ">
                                            <div class="px-4">
                                                <strong>Expected Rev</strong>
                                                <p><span>$ 1000 USD </span></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6 ">
                                            <div class="px-4">
                                                <strong>Offer</strong>
                                                <p><span> $ 200 </span></p>
                                            </div>
                                        </div>


                                        <div class="col-lg-3 col-md-6 col-6 ">
                                            <div class="px-4">
                                                <strong>Hours</strong>
                                                <p><span>04 </span></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-6 ">
                                            <div class="px-4">
                                                <strong>Duration</strong>
                                                <p><span>14 Aug 2021 / 10 AM : 2 PM </span></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-6 ">
                                            <div class="px-4">
                                                <strong>Offer Total Amount</strong>
                                                <p><span>$ 800</span></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <br>
        <livewire:dev.comment align="left" component="VOfferDetail" />
    </div>


</x-cms-root>
