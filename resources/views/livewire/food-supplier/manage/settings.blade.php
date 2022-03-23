<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">{{$supplier->name}}</h2>
                    <p>Manage your food menues and publish settings.</p>
                </div>
                {{-- venue provider sub-nav --}}
                <div class="sub-nav">
                @livewire('food-supplier.manage.components.sub-nav', ['supplier' => $supplier], key($supplier->id))
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
                        <h6 class="text-primary"><a href="{{ route('food-supplier.manage.entity', ['supplier' => $supplier]) }}">Details</a></h6>
                        <span class="text-lead">Just to make sure ! you have completed <strong>Details</strong>  for food supplier</span>
                        </div>
                        <div class=" p-2">
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                        <h6 class="text-primary"><a href="{{ route('food-supplier.manage.menu', ['supplier' => $supplier]) }}">Menues Gallery</a></h6>
                        <span class="text-lead">Just to make sure ! you have setup the <strong>Gallery</strong> for food menues</span>
                        </div>
                        <div class=" p-2">
                            @if($supplier->profile->supplier_logo_updated)
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @else
                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>
                            @endif
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>

                        <h6 class="text-primary"><a href="{{ route('food-supplier.manage.schedule', ['supplier' => $supplier]) }}">Schedule</a></h6>
                        <span class="text-lead">Just to make sure ! you have setup the <strong>Schedule</strong> for venue</span>
                        </div>
                        <div class=" p-2">
                            @if($supplier->profile->supplier_schedule_updated)
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            @else
                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>
                            @endif
                        </div>
                    </div>

                 
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('food-supplier.manage.schedule', ['supplier' => $supplier]) }}"
                            class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                            Back
                        </a>
                        <div class="d-flex justify-content-end">
                            @if($supplier->profile->status == 'Inactive')
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
                <livewire:dev.comment align="left" component="F Supplier Settings" />
            </div>
        </div>

        <script>
            document.getElementById('supplier-settings').classList.add('active');
        </script>

    </div>

</x-cms-root>
