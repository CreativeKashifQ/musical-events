<x-cms-root>
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <h2 class="text-primary text-center mb-4">Add Equipment</h4>
                <div class="pb-3">
                    <h5>Add Your Equipment Detail</h5>
                    <p>Fill the form below to publish equipment,We need equipment name, location , capacity for people and
                        little bit description to start the step</p>
                </div>
                <form wire:submit.prevent="create">
                    <!-- Input -->
                    <div class="body form-material">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control @error('equipment.name') is-invalid @enderror"
                                    wire:model.defer="equipment.name" placeholder="Equipment name">
                                @error('equipment.name')
                                <span class="invalid-feedback">{{ $errors->first('equipment.name')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control @error('equipment.color') is-invalid @enderror"
                                    wire:model.defer="equipment.color" placeholder="color">

                                @error('equipment.color')
                                <span class="invalid-feedback">{{ $errors->first('equipment.color')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control  @error('equipment.weight') is-invalid @enderror"
                                    wire:model.defer="equipment.weight" placeholder="weight">
                                @error('equipment.weight')
                                <span class="invalid-feedback">{{ $errors->first('equipment.weight')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control  @error('equipment.quantity') is-invalid @enderror"
                                    wire:model.defer="equipment.quantity" placeholder="quantity">
                                @error('equipment.quantity')
                                <span class="invalid-feedback">{{ $errors->first('equipment.quantity')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control  @error('equipment.location') is-invalid @enderror"
                                    wire:model.defer="equipment.location" placeholder="Location">
                                @error('equipment.location')
                                <span class="invalid-feedback">{{ $errors->first('equipment.location')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea class="form-control  @error('equipment.description') is-invalid @enderror" id=""
                                    cols="10" rows="2" wire:model.defer="equipment.description"
                                    placeholder="description"></textarea>
                                @error('equipment.description')
                                <span class="invalid-feedback">{{ $errors->first('equipment.description')
                                    }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('equipment.manage.index') }}" class="btn btn-outline-secondary btn-sm ">
                                Back
                            </a>
                            <button type="submit" type="button" class="btn btn-outline-primary btn-sm   ">
                                Add Equipment
                                </button>
                        </div>
                    </div>
                    <!-- #END# Input -->
                </form>
                <br>
                <br>
                <livewire:dev.comment align="left" component="Add Equipment" />
        </div>

    </div>

</x-cms-root>

