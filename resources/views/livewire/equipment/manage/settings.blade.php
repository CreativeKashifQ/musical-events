<x-cms-root>
    <div class="wrapper">
        @livewire('equipment.manage.components.sub-nav', ['equipment' => $equipment], key($equipment->id))
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card-body">
                    <div class="pb-3">
                        <h5>Review All Steps</h5>
                        <p>Steps are checked, which are completed to publish equipment, Kindly, Complete those steps which are cross check</p>
                    </div>
                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                            <h6 class="text-primary"><a href="{{route('equipment.manage.entity',[$equipment])}}">Details</a></h6>
                            <span class="text-lead">Just to make sure ! you have completed <strong>Details</strong> for equipments</span>
                        </div>
                        <div class=" p-2">
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                            <h6 class="text-primary"><a href="{{route('equipment.manage.gallery',[$equipment])}}">Gallery</a></h6>
                            <span class="text-lead">Just to make sure ! you have setup the <strong>Gallery</strong> for equipments</span>
                        </div>
                        <div class=" p-2">
                            @if($equipment->gallery_updated)
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @else
                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>
                            @endif
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>

                            <h6 class="text-primary"><a href="#">Schedule</a></h6>
                            <span class="text-lead">Just to make sure ! you have setup the <strong>Schedule</strong> for equipments</span>
                        </div>
                        <div class=" p-2">

                            @if($equipment->schedule_updated)
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @else
                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>
                            @endif

                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                            <h6 class="text-primary"><a href="#">Pricing</a></h6>
                            <span class="text-lead">Just to make sure ! you have setup the <strong>Pricing</strong> for equipments</span>
                        </div>
                        <div class=" p-2">
                            @if($equipment->pricing_updated)
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @else
                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>
                            @endif
                        </div>
                    </div>
                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                        <h6 class="text-primary"><a href="{{ route('equipment.manage.maintainence', [$equipment]) }}">Maintenance</a></h6>
                        @if($equipment->under_maintenances->count() > 0)
                        <span class="text-lead"> <strong>Maintenance Required</span>
                        @else
                        <span class="text-lead"> <strong>No Maintenance Required</span>
                        @endif
                        </div>
                        <div class=" p-2">

                            @if($equipment->under_maintenances->count() > 0)
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @else
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('equipment.manage.maintainence', [$equipment]) }}"
                            class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                            Back
                        </a>
                        <div class="d-flex justify-content-end">
                            @if($equipment->status == 'Inactive')
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
                <livewire:dev.comment align="left" component="Equipment Settings" />
            </div>
        </div>

        <script>
            document.getElementById('nav-equipment-6').classList.add('active');
        </script>

    </div>

</x-cms-root>