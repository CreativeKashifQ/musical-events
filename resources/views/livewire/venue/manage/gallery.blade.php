<x-cms-root>
    <div class="wrapper">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                {{-- page titile --}}
                <div class="text-center">
                    <h2 class="text-primary text-capatilize">{{$venue->name}}</h2>
                    <p>Manage your Venue features and publish settings.</p>
                </div>
                {{-- venue provider sub-nav --}}
                <div class="sub-nav">
                    @livewire('venue.manage.components.sub-nav', ['venue' => $venue], key($venue->id))
                </div>

            </div>
        </div>

        <div class='row'>

            <div class="col-lg-8 offset-lg-2">
                <div class="pb-3">
                    <h5>Showcase Gallery</h5>
                    <p>Update venue gallery with images and thumbnail. Thumbnail is required for showcase gallery.
                        Manage
                        your venue gallery and publish settings.
                        You Can Upload Multiple Images For Venue.
                    </p>
                </div>
                <style>
                    .hover-tr-holder {
                        padding-right: 12px;
                    }

                    .hoverable {
                        border: 2px dashed gray;
                        cursor: pointer
                    }

                    #lg-download {
                        display: none !important;
                    }
                </style>
                <h6 class="mb-3">Venue Thumbnail <span class="small text-muted">[Required*]</span></h6>

                <div class="masonry-container lightGallery" style="height: 120px;width:150px">
                    {{-- logo image --}}
                    <div class="hover-tr-holder ">
                        <div>
                            <figure>
                                <div class="img-wrapper  ">
                                    <img class="img-fluid" style="height: 130px;width:130px" class="hoverable"
                                        src="{{ asset($venue->logo_image) }}" wire:loading.remove
                                        wire:target="logo_image">
                                    <div wire:loading wire:target="logo_image">
                                        <div class="card bg-transparent d-flex justify-content-center align-items-center"
                                            style="height: 120px;width:130px">
                                            <div class="spinner-border text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-overlay figure-caption text-white" wire:loading.remove
                                        wire:target="logo_image">
                                        <div class="figcaption d-flex justify-content-around align-items-center ">
                                            <a class="no-ajaxy">
                                                <i class="icon icon-trash-o"
                                                    wire:click="$emit('removeImage','logo_image')"></i>
                                            </a>
                                            <a href="{{ asset($venue->logo_image) }}" class="light-post no-ajaxy">
                                                <i class="icon icon-zoom-in"></i>
                                            </a>

                                            <a class="no-ajaxy">
                                                <i class="icon icon-cloud-upload"
                                                    onclick="$('#logo_image').trigger('click');"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        @error('logo_image')
                        <p class="pb-0 mb-0 text-danger">{{ $errors->first('logo_image') }}</p>
                        @enderror
                        <input id="logo_image" wire:model="logo_image" hidden type="file">
                    </div>

                </div>
                <h6 class="mb-3 mt-4">Venue Pictures</h6>
                <div class="d-flex   masonry-container lightGallery">

                    {{-- Galleries images Loop --}}
                    @forelse ($galleries as $key => $gallery)
                    <div class="hover-tr-holder  ">
                        <div>
                            <figure>
                                <div class="img-wrapper  ">
                                    <img class="image-fluid" class="img-fluid" wire:loading.remove
                                        wire:target="removeGalleryImage({{$key}})" src="{{ asset($gallery->image) }}"
                                        style="height: 120px;width:150px">
                                    <div wire:loading wire:target="removeGalleryImage({{$key}})">
                                        <div class="card bg-transparent d-flex justify-content-center align-items-center"
                                            style="height: 120px;width:150px">
                                            <div class="spinner-border text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-overlay figure-caption text-white" wire:loading.remove
                                        wire:target="removeGalleryImage({{$key}})">
                                        <div class="figcaption d-flex justify-content-around align-items-center ">
                                            <a class="no-ajaxy">
                                                <i class="icon icon-trash-o"
                                                    wire:click="removeGalleryImage({{$gallery->id}})"></i>
                                            </a>
                                            <a href="{{ asset($gallery->image) }}" class="light-post no-ajaxy">
                                                <i class="icon icon-zoom-in"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>

                    </div>
                    @empty
                    <div class="hover-tr-holder  ">
                        <div>
                            <figure>
                                <div class="img-wrapper  ">
                                    <img class="image-fluid" src="{{ asset('images/default.png') }}"
                                        style="height: 120px;width:150px">
                                </div>
                            </figure>
                        </div>
                    </div>
                    @endforelse

                    {{-- image + --}}
                    <div class="hover-tr-holder ">
                        <div>
                            <figure>
                                <div class="img-wrapper hoverable  " style="height: 120px;width:150px">

                                    <div wire:loading wire:target="images">
                                        <div class="card bg-transparent d-flex justify-content-center align-items-center"
                                            style="height: 120px;width:150px">
                                            <div class="spinner-border text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="figcaption d-flex justify-content-center align-items-center "
                                        wire:loading.remove wire:target="images" onclick="$('#image').trigger('click')">
                                        <a>
                                            <i class="icon icon-add"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        @error('images.*')
                        <p class="pb-0 mb-0 text-danger">{{ $errors->first('images.*') }}</p>
                        @enderror
                        <input id="image" wire:model="images" hidden type="file" multiple>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('venue.manage.entity', [$venue]) }}"
                        class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                        Back
                    </a>

                    <a href="{{ route('venue.manage.schedule', [$venue]) }}"
                        class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                        Next
                    </a>
                </div>
                <br>
                <livewire:dev.comment align="left" component="Venue Gallery" />
            </div>

        </div>

        <script>
            document.getElementById('nav-venue-2').classList.add('active');
        </script>
    </div>

</x-cms-root>
