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
                                <input type="text" class="form-control @error('venue.name') is-invalid @enderror"
                                    wire:model.defer="venue.name" placeholder="Equipment name">
                                @error('venue.name')
                                <span class="invalid-feedback">{{ $errors->first('venue.name')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control @error('venue.location') is-invalid @enderror"
                                    wire:model.defer="venue.location" placeholder="color">

                                @error('venue.location')
                                <span class="invalid-feedback">{{ $errors->first('venue.location')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control  @error('venue.capacity') is-invalid @enderror"
                                    wire:model.defer="venue.capacity" placeholder="weight">
                                @error('venue.capacity')
                                <span class="invalid-feedback">{{ $errors->first('venue.capacity')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control  @error('venue.capacity') is-invalid @enderror"
                                    wire:model.defer="venue.capacity" placeholder="quantity">
                                @error('venue.capacity')
                                <span class="invalid-feedback">{{ $errors->first('venue.capacity')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea class="form-control  @error('venue.description') is-invalid @enderror" id=""
                                    cols="10" rows="2" wire:model.defer="venue.description"
                                    placeholder="description"></textarea>
                                @error('venue.description')
                                <span class="invalid-feedback">{{ $errors->first('venue.description')
                                    }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('venue.manage.index') }}" class="btn btn-outline-secondary btn-sm ">
                                Back
                            </a>
                            <a href="{{ route('equipment.manage.entity') }}" type="submit" class="btn btn-outline-primary btn-sm   ">
                                Add Equipment
                            </a>
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

