<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">{{$venue->name}}</h2>
                    <p>Manage your Venue features and publish settings.</p>
                </div>
                {{-- venue provider sub-nav --}}
                <div class="sub-nav">
                    @livewire('venue.manage.components.sub-nav', ['venue' => $venue], key($venue->id))
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card-body">
                    <div class="pb-3">
                        <h5>Update Schedule </h5>
                        <p>Set schedule timing for your venue with opening_time and closing_time</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">
                        <div>
                            <div class="form-material form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-line">
                                        <label>Opening Time</label>
                                        <input type="time"
                                            class="form-control @error('venue.opening_time') is-invalid @enderror "
                                            wire:model.defer="venue.opening_time" placeholder="Opening Time">

                                        @error('venue.opening_time')
                                        <span class="invalid-feedback">{{ $errors->first('venue.opening_time')
                                            }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-line">
                                        <label>Closing Time</label>
                                        <input type="time"
                                            class="form-control @error('venue.closing_time') is-invalid @enderror "
                                            wire:model.defer="venue.closing_time" placeholder="Closing Time">
                                        @error('venue.closing_time')
                                        <span class="invalid-feedback">{{ $errors->first('venue.closing_time')
                                            }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                           

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('venue.manage.gallery', [$venue]) }}"
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

                                    <a wire:click="update" href="{{ route('venue.manage.pricing', [$venue]) }}"
                                        class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                        Next
                                    </a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <br>
                        <livewire:dev.comment align="left" component="Venue Schedule" />
            </div>
        </div>

        <script>
            document.getElementById('nav-venue-schedule').classList.add('active');
        </script>

    </div>

</x-cms-root>
