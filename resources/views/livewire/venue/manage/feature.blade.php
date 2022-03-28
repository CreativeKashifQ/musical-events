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
                        <h5>Add Feature By Name</h5>
                        <p>You can add features for venues , like what you want to include features with this venue. Manage your Venue features and publish
                            settings</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">

                        <div class="form-material form-row">
                            <div class="form-group col-md-12">
                                <div class="form-line">
                                    <label>Venue Add-ons</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror "
                                        wire:model.defer="name" placeholder="Catering, Parking etc one by one">
                                    @error('name')
                                    <span class="invalid-feedback">{{ $errors->first('name')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                        
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-outline-primary btn-sm px-4   ">
                                <div class="spinner-border spinner-border-sm text-danger mr-2" role="status"
                                    wire:loading.delay wire:target="update">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                Add
                            </button>
                        </div>
                    </form>

                    <div class="mt-3">
                        @if(!$features->isEmpty())
                        <div class="pb-3">
                            <h5>Venue Features</h5>
                            <p>Venue features added for this venue,you can delete and add at any time.</p>
                        </div>
                        @endif
                        <div class="under_maintenance_section">
                            @forelse ($features as $feature)

                            <div class='card mb-2'>
                                <div class="d-flex justify-content-between p-3">
                                    <strong>{{$feature->name}}</strong>
                                    <div>
                                        <strong><a wire:click="remove({{$feature->id}})"><i
                                                    class="icon icon-trash-o"></i></a></strong>
                                    </div>
                                </div>
                            </div>
                            @empty
                          
                            @endforelse
                        </div>

                        <div class="d-flex justify-content-between my-5">
                            <a href="{{ route('venue.manage.gallery', [$venue]) }}"
                                class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                Back
                            </a>

                            <a href="{{ route('venue.manage.schedule', [$venue]) }}"
                                class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                Next
                            </a>
                        </div>
                    </div>


                </div>
                <br>
                <livewire:dev.comment align="left" component="Venue Maintenance" />
            </div>
        </div>

        <script>
            document.getElementById('nav-venue-feature').classList.add('active');
        </script>

    </div>

</x-cms-root>
