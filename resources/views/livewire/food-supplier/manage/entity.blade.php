<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">{{$supplier->name}} </h2>
                    <p>Manage your Food Supplier Profile and publish settings.</p>
                </div>
                {{-- food supplier sub-nav --}}
                <div class="sub-nav">
                    @livewire('food-supplier.manage.components.sub-nav', ['supplier' => $supplier], key($supplier->id))
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">

                <div class="card-body">
                    <div class="pb-3">
                        <h5>Basic Information </h5>
                        <p>Update basic informarion , Manage your Food features and publish settings</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">
                        <!-- Input -->
                        <div class="body form-material">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <lable>Name of Business</lable>
                                    <input type="text"  class="form-control @error('supplier.profile.business_name') is-invalid @enderror" wire:model.defer="supplier.profile.business_name">
                                    @error('supplier.profile.business_name')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.business_name')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <lable>Business Email</lable>
                                    <input type="text"  class="form-control @error('supplier.profile.business_email') is-invalid @enderror" wire:model.defer="supplier.profile.business_email">
                                    @error('supplier.profile.business_email')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.business_email')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <lable>Business Phone Number</lable>
                                    <input type="number" class="form-control @error('supplier.profile.phone') is-invalid @enderror" wire:model.defer="supplier.profile.phone">
                                    @error('supplier.profile.phone')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.phone')
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
                                    <label>Type Of Food Supplier</label>
                                    <select class="form-control  @error('supplier.profile.type') is-invalid @enderror " wire:model="supplier.profile.type">
                                        <option selected value="">----- Select -----</option>
                                        <option value="FoodTruck">Food Truck</option>
                                        <option value="Resturent/Caterer">Resturent/Caterer</option>
                                        <option value="Private Chef">Private Chef</option>
                                    </select>
                                    @error('supplier.profile.type')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.type')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-lin">
                                    <label>Types Of Food </label>
                                    <div class="row">
                                        @foreach($foods as $food)
                                        <div class="col-lg-4 col-md-4 col-6">
                                            <div class="row">
                                                <div class="col-md-6 col-6">
                                                <label class="font-weight-bold pr-3">{{$food['name']}} </label>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                <label class="switch">
                                                <input type="checkbox" value="{{$food['name']}}" wire:model='selectedFoodTypes'>
                                                <span class="slider round"></span>
                                                </label>
                                                </div>
                                            </div>
                                        
                                            
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label>Experience eg.3 Y </label>
                                    <input type="text" class="form-control  @error('supplier.profile.experience') is-invalid @enderror" wire:model.defer="supplier.profile.experience">
                                    @error('supplier.profile.experience')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.experience')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <lable>Services Areas by comma seprated City/State</lable>
                                    <input type="text" class="form-control  @error('supplier.profile.address') is-invalid @enderror" wire:model.defer="supplier.profile.address" l services areas seprated by commas Eg. Birmingham,Sheffield">
                                    @error('supplier.profile.address')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.address')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <lable>Bio</lable>
                                    <textarea class="form-control  @error('supplier.profile.bio') is-invalid @enderror" id="" cols="10" rows="2" wire:model.defer="supplier.profile.bio"> </textarea>
                                    @error('supplier.profile.bio')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.bio')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary btn-sm px-4">
                                    Save Changes
                                </button>

                                <a wire:click="update" href="{{route('food-supplier.manage.menu',['supplier' => $supplier])}}" class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                    Next
                                </a>
                            </div>
                                       
                        </div>
                        <!-- #END# Input -->
                    </form>
                </div>

                <livewire:dev.comment align="left" component="Supplier Details" />
            </div>
        </div>

        <script>
            document.getElementById('supplier-profile').classList.add('active');
        </script>

    </div>

</x-cms-root>
