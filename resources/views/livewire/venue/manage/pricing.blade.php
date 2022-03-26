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
                        <h5>Setting Pricing /Hour</h5>
                        <p>Update Pricing for your venue, Manage your Venue features and publish settings</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">

                        <div class="form-material form-row">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Hourly Price</label>
                                    <div class="row no-gutters">
                                        <div class="col-md-1 col-1">
                                        <strong class="d-flex pt-2 pl-1 font-weight-bold ">$</strong>
                                        </div>
                                        <div class="col-md-11 col-11">
                                        <input type="number" class="form-control @error('venue.hourly_rate') is-invalid @enderror "
                                        wire:model.defer="venue.hourly_rate" placeholder="12">
                                        </div>
                                    </div>
                                    
                                    @error('venue.hourly_rate')
                                    <span class="invalid-feedback">{{ $errors->first('venue.hourly_rate')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('venue.manage.schedule', [$venue]) }}"
                                class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                Back
                            </a>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary btn-sm px-4   ">
                                    <div class="spinner-border spinner-border-sm text-danger mr-2" role="status"
                                        wire:loading.delay wire:target="update">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    Save Changes
                                </button>

                                <a href="{{ route('venue.manage.maintenance', [$venue]) }}"
                                    class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                    Next
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
                <br>
                <livewire:dev.comment align="left" component="Venue Pricing" />
            </div>
        </div>

        <script>
            document.getElementById('nav-venue-pricing').classList.add('active');
        </script>

    </div>

</x-cms-root>
