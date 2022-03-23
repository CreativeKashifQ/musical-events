<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">{{$supplier->name}}</h2>
                    <p>Manage your food menues and publish settings.</p>
                </div>
                {{-- venue provider sub-nav --}}
                <div class="sub-nav">
                @livewire('food-supplier.manage.components.sub-nav', ['supplier' => $supplier], key($supplier->id))
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card-body">
                    <div class="pb-3">
                        <h5>Update Schedule </h5>
                        <p>Set schedule timing for your food with opening_time and closing_time</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">
                        <div>
                            <div class="form-material form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-line">
                                        <label>Opening Time</label>
                                        <input type="time"
                                            class="form-control @error('supplier.profile.opening_time') is-invalid @enderror "
                                            wire:model.defer="supplier.profile.opening_time" placeholder="Opening Time">

                                        @error('supplier.profile.opening_time')
                                        <span class="invalid-feedback">{{ $errors->first('supplier.profile.opening_time')
                                            }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-line">
                                        <label>Closing Time</label>
                                        <input type="time"
                                            class="form-control @error('supplier.profile.closing_time') is-invalid @enderror "
                                            wire:model.defer="supplier.profile.closing_time" placeholder="Closing Time">
                                        @error('supplier.profile.closing_time')
                                        <span class="invalid-feedback">{{ $errors->first('supplier.profile.closing_time')
                                            }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                           

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('food-supplier.manage.menu', ['supplier' => $supplier]) }}"
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

                                    <a href="{{ route('food-supplier.manage.settings', ['supplier' => $supplier]) }}"
                                        class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                        Next
                                    </a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <br>
                        <livewire:dev.comment align="left" component="supplier.profile Schedule" />
            </div>
        </div>

        <script>
            document.getElementById('supplier-schedule').classList.add('active');
        </script>

    </div>

</x-cms-root>
