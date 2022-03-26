<x-cms-root>
    <div class="wrapper">
    @livewire('equipment.manage.components.sub-nav', ['equipment' => $equipment], key($equipment->id))
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card-body">
                    <div class="pb-3">
                        <h5>Equipment Pricing /Hour</h5>
                        <p>Update Pricing for your equipment, Manage your equipment and save settings</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">

                        <div class="form-material form-row">
                            <div class="form-group">
                                <div class="form-line">
                                <div class="row no-gutters">
                                        <div class="col-md-1 col-1">
                                        <strong class="d-flex pt-2 pl-1 font-weight-bold ">$</strong>
                                        </div>
                                        <div class="col-md-11 col-11">
                                        
                                        <input type="number" class="form-control @error('equipment.hourly_rate') is-invalid @enderror "
                                        wire:model.defer="equipment.hourly_rate" placeholder="15">
                                        </div>
                                    </div>
                                    @error('equipment.hourly_rate')
                                    <span class="invalid-feedback">{{ $errors->first('equipment.hourly_rate')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{route('equipment.manage.schedule',[$equipment])}}"
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

                                <a href="{{ route('equipment.manage.maintainence',[$equipment]) }}"
                                    class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                    Next
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
                <br>
                <livewire:dev.comment align="left" component="Equipment Pricing" />
            </div>
        </div>

        <script>
            document.getElementById('nav-equipment-4').classList.add('active');
        </script>

    </div>

</x-cms-root>
