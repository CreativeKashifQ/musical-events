<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">{{$venue->name}}</h2>
                    <p>Manage your Venue features and publish settings.</p>
                </div>
                {{-- venue provider sub-nav --}}
                <div class="sub-nav">
                    @livewire('venue.manage.components.sub-nav', ['venue' => $venue], key($venue->id))
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card-body">
                    <div class="pb-3">
                        <h5>Review All Steps</h5>
                        <p>Steps are checked, which are completed to publish venue, Kindly, Complete those steps which are cross check</p>
                    </div>
                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                        <h6 class="text-primary"><a href="{{ route('venue.manage.entity', [$venue]) }}">Details</a></h6>
                        <span class="text-lead">Just to make sure ! you have completed <strong>Details</strong>  for venue</span>
                        </div>
                        <div class=" p-2">
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                        <h6 class="text-primary"><a href="{{ route('venue.manage.gallery', [$venue]) }}">Gallery</a></h6>
                        <span class="text-lead">Just to make sure ! you have setup the <strong>Gallery</strong> for venue</span>
                        </div>
                        <div class=" p-2">
                            @if($venue->gallery_updated)
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @else
                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>
                            @endif
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>

                        <h6 class="text-primary"><a href="{{ route('venue.manage.schedule', [$venue]) }}">Schedule</a></h6>
                        <span class="text-lead">Just to make sure ! you have setup the <strong>Schedule</strong> for venue</span>
                        </div>
                        <div class=" p-2">
                            @if($venue->schedule_updated)
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @else
                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>
                            @endif
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                        <h6 class="text-primary"><a href="{{ route('venue.manage.pricing', [$venue]) }}">Pricing</a></h6>
                        <span class="text-lead">Just to make sure ! you have setup the <strong>Pricing</strong> for venue</span>
                        </div>
                        <div class=" p-2">
                            @if($venue->pricing_updated)
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @else
                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>
                            @endif
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                        <h6 class="text-primary"><a href="{{ route('venue.manage.maintenance', [$venue]) }}">Maintenance</a></h6>
                        @if($venue->under_maintenances->count() > 0)
                        <span class="text-lead"> <strong>Maintenance Required</span>
                        @else
                        <span class="text-lead"> <strong>No Maintenance Required</span>
                        @endif
                        </div>
                        <div class=" p-2">

                            @if($venue->under_maintenances->count() > 0)
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @else
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @endif
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('venue.manage.schedule', [$venue]) }}"
                            class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                            Back
                        </a>
                        <div class="d-flex justify-content-end">
                            @if($venue->status == 'Inactive')
                            <a wire:click="updateStatus('Active')"
                                class="btn btn-outline-success btn-sm ml-1 px-4 text-light ">
                                <div class="spinner-border spinner-border-sm text-light mr-2" role="status"
                                        wire:loading.delay wire:target="updateStatus">
                                        <span class="sr-only">Loading...</span>
                                </div>
                                Publish
                            </a>
                            @else
                            <a wire:click="updateStatus('Inactive')"
                                class="btn btn-outline-primary btn-sm ml-1 px-4 text-light ">
                                <div class="spinner-border spinner-border-sm text-light mr-2" role="status"
                                        wire:loading.delay wire:target="updateStatus">
                                        <span class="sr-only">Loading...</span>
                                </div>
                                Pause
                            </a>
                            @endif
                        </div>
                    </div>

                </div>

                <br>
                <livewire:dev.comment align="left" component="Venue Settings" />
            </div>
        </div>

        <script>
            document.getElementById('nav-venue-6').classList.add('active');
        </script>

    </div>

</x-cms-root>
