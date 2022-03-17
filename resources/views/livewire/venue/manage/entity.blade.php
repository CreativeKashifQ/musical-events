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
                        <h5>Basic Information </h5>
                        <p>Update basic informarion for your venue, Manage your Venue features and publish settings</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">
                        <!-- Input -->
                        <div class="body form-material">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control @error('venue.name') is-invalid @enderror"
                                        wire:model.defer="venue.name" placeholder="venue name">
                                    @error('venue.name')
                                    <span class="invalid-feedback">{{ $errors->first('venue.name')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control @error('venue.location') is-invalid @enderror"
                                        wire:model.defer="venue.location" placeholder="location">

                                    @error('venue.location')
                                    <span class="invalid-feedback">{{ $errors->first('venue.location')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control  @error('venue.capacity') is-invalid @enderror"
                                        wire:model.defer="venue.capacity" placeholder="capacity">
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

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary btn-sm px-4">

                                    Save Changes
                                </button>

                                <a href="{{ route('venue.manage.gallery', [$venue]) }}"
                                    class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                    Next
                                </a>
                            </div>

                        </div>
                        <!-- #END# Input -->
                    </form>
                </div>

                 <livewire:dev.comment align="left" component="Venue Details" />
            </div>
        </div>

        <script>
            document.getElementById('nav-venue-1').classList.add('active');
        </script>

    </div>

</x-cms-root>
