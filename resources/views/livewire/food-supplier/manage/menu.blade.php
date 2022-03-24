<x-cms-root>
    <div class="wrapper">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                {{-- page titile --}}
                <div class="text-center">
                    <h2 class="text-primary text-capatilize">{{$supplier->name}}</h2>
                    <p>Manage your food menues and publish settings.</p>
                </div>
                {{-- venue provider sub-nav --}}
                <div class="sub-nav">
                    @livewire('food-supplier.manage.components.sub-nav', ['supplier' => $supplier], key($supplier->id))
                </div>

            </div>
        </div>

        <div class='row'>

            <div class="col-lg-8 offset-lg-2">
                <div class="pb-3">
                    <h5>Showcase Gallery</h5>
                    <p>Update Foods Menues with images and thumbnail. Thumbnail is required for showcase gallery.
                        Manage
                        your food menues and publish settings.
                        You Can Upload Multiple Images For Food Menues.
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
                <h6 class="mb-3">Supplier Shop Thumbnail <span class="small text-muted">[Required*]</span></h6>

                <div class="masonry-container lightGallery" style="height: 120px;width:150px">
                    {{-- logo image --}}
                    <div class="hover-tr-holder ">
                        <div>
                            <figure>
                                <div class="img-wrapper  ">
                                    <img class="img-fluid" style="height: 130px;width:130px" class="hoverable" src="{{ asset($supplier->profile->logo_image) }}" wire:loading.remove wire:target="logo_image">
                                    <div wire:loading wire:target="logo_image">
                                        <div class="card bg-transparent d-flex justify-content-center align-items-center" style="height: 120px;width:130px">
                                            <div class="spinner-border text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-overlay figure-caption text-white" wire:loading.remove wire:target="logo_image">
                                        <div class="figcaption d-flex justify-content-around align-items-center ">
                                            <a class="no-ajaxy">
                                                <i class="icon icon-trash-o" wire:click="$emit('removeImage','logo_image')"></i>
                                            </a>
                                            <a href="{{ asset($supplier->profile->logo_image) }}" class="light-post no-ajaxy">
                                                <i class="icon icon-zoom-in"></i>
                                            </a>

                                            <a class="no-ajaxy">
                                                <i class="icon icon-cloud-upload" onclick="$('#logo_image').trigger('click');"></i>
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

                @if(!$toggleAddMenuForm)
                <h6 class="mb-3 mt-4">Menu Pictures</h6>
                <div class="d-flex   masonry-container lightGallery">
                    {{-- Galleries images Loop --}}
                    @forelse ($menue_galleries as $key => $menu_gallery)
                    <div class="hover-tr-holder  ">
                        <div>
                            <figure>
                                <div class="img-wrapper  ">
                                    <img class="image-fluid" class="img-fluid" wire:loading.remove wire:target="removeGalleryImage({{$key}})" src="{{ asset($menu_gallery->image) }}" style="height: 120px;width:150px">
                                    <div wire:loading wire:target="removeGalleryImage({{$key}})">
                                        <div class="card bg-transparent d-flex justify-content-center align-items-center" style="height: 120px;width:150px">
                                            <div class="spinner-border text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-overlay figure-caption text-white" wire:loading.remove wire:target="removeGalleryImage({{$key}})">
                                        <div class="figcaption d-flex justify-content-around align-items-center ">
                                            <a class="no-ajaxy">
                                                <i class="icon icon-trash-o" wire:click="removeGalleryImage({{$menu_gallery->id}})"></i>
                                            </a>
                                            <a href="{{ asset($menu_gallery->image) }}" class="light-post no-ajaxy">
                                                <i class="icon icon-zoom-in"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <span class="font-weight-bold mt-3">{{$menu_gallery->name}}</span>
                            </figure>

                        </div>

                    </div>
                    @empty
                    <div class="hover-tr-holder  ">
                        <div>
                            <figure>
                                <div class="img-wrapper  ">
                                    <img class="image-fluid" src="{{ asset('images/default.png') }}"  style="height: 120px;width:150px">
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
                                        <div class="card bg-transparent d-flex justify-content-center align-items-center" style="height: 120px;width:150px">
                                            <div class="spinner-border text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="figcaption d-flex justify-content-center align-items-center " wire:loading.remove wire:target="images" wire:click="toggleAddMenuForm">
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
                @else
                <h6 class="mb-3 mt-4">Add Menu Pic with Name</h6>
                {{-- image + --}}
                <div class="d-flex   masonry-container ">
                    <div class="hover-tr-holder ">
                        @if(!$menu_image)
                            <figure>
                                <div class="img-wrapper hoverable   " style="height: 120px;width:150px" >
                                    <div wire:loading wire:target="menu_image">
                                        <div class="card bg-transparent d-flex justify-content-center align-items-center" style="height: 120px;width:150px">
                                            <div class="spinner-border text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figcaption d-flex justify-content-center align-items-center " wire:loading.remove wire:target="menu_image" onclick="$('#menu_image').trigger('click');">
                                        <a>
                                            <i class="icon icon-add"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            @error('menu_image')
                            <small class="text-danger">{{ $errors->first('menu_image')}}</small>
                            @enderror
                            @else
                            <figure>
                                <div class="img-wrapper hoverable  " style="height: 120px;width:150px">
                                <img class="image-fluid" class="img-fluid"  src="{{ $menu_image->temporaryUrl() }}" style="height: 120px;width:150px" onclick="$('#menu_image').trigger('click');" >
                                </div>
                            </figure>
                            @endif
                        <input id="menu_image" wire:model="menu_image" hidden type="file">
                    </div>
                </div>
                <form wire:submit.prevent="attemptAddMenu">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="d-flex justify-content-between mt-3">
                            <div class="form-material">
                                <div class="form-group form-float ">
                                    <div class="form-line">
                                        <input type="text" class="form-control  @error('menu_name') is-invalid @enderror" wire:model.defer="menu_name" placeholder="Menu Name">
                                        @error('menu_name')
                                        <span class="invalid-feedback">{{ $errors->first('menu_name')
                                        }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-outline-primary btn-sm px-4">
                                    Add Menu
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
                @endif

                <div class="d-flex justify-content-between">
                    <a href="{{route('food-supplier.manage.entity',['supplier' => $supplier])}}" class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                        Back
                    </a>

                    <a href="{{route('food-supplier.manage.schedule',['supplier' => $supplier])}}" class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                        Next
                    </a>
                </div>
                <br>
                <livewire:dev.comment align="left" component="Supplier Venue Gallery" />
            </div>

        </div>

        <script>
            document.getElementById('supplier-menues-gallery').classList.add('active');
        </script>
    </div>

</x-cms-root>