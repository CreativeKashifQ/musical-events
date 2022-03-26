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
                                    <input type="text" readonly class="form-control @error('supplier.name') is-invalid @enderror" wire:model.defer="supplier.name" placeholder="supplier name">
                                    @error('supplier.name')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.name')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" readonly class="form-control @error('supplier.email') is-invalid @enderror" wire:model.defer="supplier.email" placeholder="Email">

                                    @error('supplier.email')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.email')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control @error('supplier.profile.phone') is-invalid @enderror" wire:model.defer="supplier.profile.phone" placeholder="Phone">

                                    @error('supplier.profile.phone')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.phone')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control  @error('supplier.profile.experience') is-invalid @enderror" wire:model.defer="supplier.profile.experience" placeholder="Experience eg. 3 Y, 2 M ">
                                    @error('supplier.profile.experience')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.experience')
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
                                    <select class="form-control  @error('supplier.profile.gender') is-invalid @enderror " wire:model="supplier.profile.gender">
                                        <option selected value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('supplier.profile.gender')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.gender')
                                        }}</span>
                                    @enderror


                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control  @error('supplier.profile.address') is-invalid @enderror" wire:model.defer="supplier.profile.address" placeholder="add all services areas seprated by commas Eg. Birmingham,Sheffield">
                                    @error('supplier.profile.address')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.profile.address')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control  @error('supplier.profile.bio') is-invalid @enderror" id="" cols="10" rows="2" wire:model.defer="supplier.profile.bio" placeholder="Bio"></textarea>
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

                                <a href="{{route('food-supplier.manage.menu',['supplier' => $supplier])}}" class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
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