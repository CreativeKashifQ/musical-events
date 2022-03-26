<x-cms-root>
    @livewire('equipment.manage.components.sub-nav', ['equipment' => $equipment], key($equipment->id))
    <div class="row">
        <div class="col-lg-6 offset-lg-3">

            <div class="card-body">
                <div class="pb-3">
                    <h5>Basic Information</h5>
                    <p>Update basic informarion about your equipment, Manage your equipment features and publish settings</p>
                </div>
                <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">
                    <!-- Input -->
                    <div class="body form-material">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control @error('equipment.name') is-invalid @enderror" wire:model.defer="equipment.name" placeholder="Ins">
                                @error('equipment.name')
                                <span class="invalid-feedback">{{ $errors->first('equipment.name')
                                        }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control  @error('equipment.description') is-invalid @enderror" id="" cols="10" rows="2" wire:model.defer="equipment.description" placeholder="Add Detail Eg. Model,Brand etc"></input>
                                @error('equipment.description')
                                <span class="invalid-feedback">{{ $errors->first('equipment.description')
                                        }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control @error('equipment.color') is-invalid @enderror" wire:model.defer="equipment.color" placeholder="Wooden Brown">

                                @error('equipment.color')
                                <span class="invalid-feedback">{{ $errors->first('equipment.color')
                                        }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control  @error('equipment.weight') is-invalid @enderror" wire:model.defer="equipment.weight" placeholder="6.6 lbs">
                                @error('equipment.weight')
                                <span class="invalid-feedback">{{ $errors->first('equipment.weight')
                                        }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control  @error('equipment.quantity') is-invalid @enderror" wire:model.defer="equipment.quantity" placeholder="3">
                                @error('equipment.quantity')
                                <span class="invalid-feedback">{{ $errors->first('equipment.quantity')
                                        }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control  @error('equipment.location') is-invalid @enderror"
                                    wire:model.defer="equipment.location" placeholder="add all services areas seprated by commas Eg. Birmingham,Sheffield">
                                @error('equipment.location')
                                <span class="invalid-feedback">{{ $errors->first('equipment.location')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                      

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-outline-primary btn-sm px-4">
                                Save Changes
                            </button>

                            <a href="{{route('equipment.manage.gallery',[$equipment])}}" class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                Next
                            </a>
                        </div>

                    </div>
                    <!-- #END# Input -->
                </form>
            </div>

            <livewire:dev.comment align="left" component="Equipment Detail" />
        </div>
    </div>

    <script>
        document.getElementById('nav-equipment-1').classList.add('active');
    </script>



</x-cms-root>