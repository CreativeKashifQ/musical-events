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
                                <lable>Equipment Name</lable>
                                <input type="text" class="form-control @error('equipment.name') is-invalid @enderror" wire:model.defer="equipment.name" >
                                @error('equipment.name')
                                <span class="invalid-feedback">{{ $errors->first('equipment.name')
                                        }}</span>
                                @enderror
                            </div>
                        </div>
                        <style type="text/css">
                            select {
                                font-size: 16px !important;

                            }

                            select option {
                                color: var(--primary) !important;
                                text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                            }
                        </style>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Category</label>
                                <select class="form-control  @error('equipment.category') is-invalid @enderror " wire:model="equipment.category">
                                    <option selected value="">Select Category </option>
                                    @forelse($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @empty
                                    <option value="">Not found !</option>
                                    @endif
                                </select>
                                @error('equipment.category')
                                <span class="invalid-feedback">{{ $errors->first('equipment.category')
                                        }}</span>
                                @enderror
                            </div>
                        </div>
                        @if($sub_categories)
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Sub Category</label>
                                <select class="form-control  @error('equipment.sub_category') is-invalid @enderror " wire:model="equipment.sub_category">
                                    <option selected value="">Select Sub Category </option>
                                    @forelse($sub_categories as $sub_category)
                                    <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                    @empty
                                    <option value="">Not found !</option>
                                    @endif
                                </select>
                                @error('equipment.sub_category')
                                <span class="invalid-feedback">{{ $errors->first('equipment.sub_category')
                                        }}</span>
                                @enderror
                            </div>
                        </div>
                        @endif
                        <div class="form-group form-float">
                            <div class="form-line">
                            <lable>Location (All service areas with seprated by comma eg. Birmingham, Sheffield. So Event host can find your equipment with related area.)</lable>
                                <input type="text" class="form-control  @error('equipment.location') is-invalid @enderror"
                                    wire:model.defer="equipment.location" >
                                @error('equipment.location')
                                <span class="invalid-feedback">{{ $errors->first('equipment.location')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                      
                        <div class="form-group form-float">
                            <div class="form-line">
                            <lable>Color</lable>
                                <input type="text" class="form-control @error('equipment.color') is-invalid @enderror" wire:model.defer="equipment.color" >
                                @error('equipment.color')
                                <span class="invalid-feedback">{{ $errors->first('equipment.color')
                                        }}</span>
                                @enderror
                            </div>
                        </div>
                      
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control  @error('equipment.quantity') is-invalid @enderror" wire:model.defer="equipment.quantity" >
                                @error('equipment.quantity')
                                <span class="invalid-feedback">{{ $errors->first('equipment.quantity')
                                        }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <lable>Add Description</lable>
                                <textarea type="text" class="form-control  @error('equipment.description') is-invalid @enderror" id="" cols="10" rows="2" wire:model.defer="equipment.description" ></textarea>
                                @error('equipment.description')
                                <span class="invalid-feedback">{{ $errors->first('equipment.description')
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