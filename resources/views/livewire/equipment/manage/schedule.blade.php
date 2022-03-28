<x-cms-root>
    <div class="wrapper">
    @livewire('equipment.manage.components.sub-nav', ['equipment' => $equipment], key($equipment->id))
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card-body">
                    <div class="pb-3">
                        <h5>Update Schedule</h5>
                        <p>Set schedule timing for your equipment with opening_time and closing_time</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">
                        <div>
                            <div class="form-material form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-line">
                                        <label>Available Form</label>
                                        <input type="time"
                                            class="form-control @error('equipment.opening_time') is-invalid @enderror "
                                            wire:model.defer="equipment.opening_time" placeholder="Opening Time">

                                        @error('equipment.opening_time')
                                        <span class="invalid-feedback">{{ $errors->first('equipment.opening_time')
                                            }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-line">
                                        <label>Available To</label>
                                        <input type="time"
                                            class="form-control @error('equipment.closing_time') is-invalid @enderror "
                                            wire:model.defer="equipment.closing_time" placeholder="Closing Time">
                                        @error('equipment.closing_time')
                                        <span class="invalid-feedback">{{ $errors->first('equipment.closing_time')
                                            }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{route('equipment.manage.gallery',[$equipment])}}"
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

                                    <a wire:click="update" href="{{ route('equipment.manage.pricing',[$equipment]) }}"
                                        class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                        Next
                                    </a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <br>
                <livewire:dev.comment align="left" component="Equipment Schedule" />
            </div>
        </div>

        <script>
            document.getElementById('nav-equipment-3').classList.add('active');
        </script>

    </div>

                                            
</x-cms-root>

