<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">{{$supplier->name}}</h2>
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
                                    <input type="text" class="form-control @error('supplier.name') is-invalid @enderror"
                                        wire:model.defer="supplier.name" placeholder="supplier name">
                                    @error('supplier.name')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.name')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control @error('supplier.email') is-invalid @enderror"
                                        wire:model.defer="supplier.email" placeholder="Email">

                                    @error('supplier.email')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.email')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control  @error('supplier.experience') is-invalid @enderror"
                                        wire:model.defer="supplier.experience" placeholder="Experience">
                                    @error('supplier.experience')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.experience')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select  class="form-control  @error('supplier.gender') is-invalid @enderror" wire:model="supplier.gender">
                                        <option value="" >Male</option>
                                        <option value="" >Female</option>
                                    </select>
                                    @error('supplier.gender')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.gender')
                                        }}</span>
                                    @enderror
                                  
                                  
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control  @error('supplier.bio') is-invalid @enderror" id=""
                                        cols="10" rows="2" wire:model.defer="supplier.bio"
                                        placeholder="Bio"></textarea>
                                    @error('supplier.bio')
                                    <span class="invalid-feedback">{{ $errors->first('supplier.bio')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary btn-sm px-4">

                                    Save Changes
                                </button>

                                <a href=""
                                    class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
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
