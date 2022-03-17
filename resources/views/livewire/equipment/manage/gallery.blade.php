<x-cms-root>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                {{-- page titile --}}
                <div class="text-center">
                    <h2 class="text-primary text-capatilize">Equipment Gallery</h2>
                    <p>Manage your Equipment Gallery and publish settings.</p>
                </div>
                {{-- venue provider sub-nav --}}
                <div class="sub-nav">
                    <div class="my-2">
                        <!--Subnav For Large Screens-->
                        <div class="d-none d-lg-block">
                          <div class="d-flex justify-content-center">
                              <ul class="nav nav-material  mb-2" role="tablist">

                                  <li class="nav-item" >
                                      <a  id="nav-venue-1" class="nav-link "
                                         href="#">Details</a>
                                  </li>
                                  <li class="nav-item">
                                      <a  id="nav-venue-2" class="nav-link" href="#">Gallery</a>
                                  </li>
                                  <li class="nav-item">
                                      <a id="nav-venue-3" class="nav-link" href="#">Schedule</a>
                                  </li>
                                  <li class="nav-item">
                                      <a id="nav-venue-4" class="nav-link" href="#">Pricing</a>
                                  </li>
                                  <li>
                                      <a id="nav-venue-5" class="nav-link" href="#">Maintenance</a>
                                  </li>
                                  <li class="nav-item">
                                      <a id="nav-venue-6" class="nav-link" href="#">Settings</a>
                                  </li>
                              </ul>
                          </div>
                          </div>
                          {{-- Subnav For Mobile Screens --}}
                          <div class="d-block d-lg-none">
                              <div class="d-flex justify-content-center">
                                  <ul class="nav nav-material  mb-3" role="tablist">
                                      <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Details">
                                          <a class="nav-link active show" href="#">
                                              <i class="icon-equal-2"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Gallery">
                                          <a class="nav-link" href="#">
                                              <i class="icon-picture"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Schedule">
                                          <a class="nav-link" href="#">
                                              <i class="icon-calendar-3"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Pricing">
                                          <a class="nav-link" href="#">
                                              <i class="icon-price-tag"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Maintainence">
                                          <a class="nav-link" href="#">
                                              <i class="icon-settings-9"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Settings">
                                          <a class="nav-link" href="#">
                                              <i class="icon-settings-2"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                  </div>
                </div>

            </div>
        </div>

        <div class='row'>

            <div class="col-lg-8 offset-lg-2">
                <div class="pb-3">
                    <h5>Showcase Gallery</h5>
                    <p>Update equipment gallery with images and thumbnail. Thumbnail is required for showcase gallery. Manage
                        your equipment gallery and publish settings.
                        You Can Upload Multiple Images For Equipment.
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
                <h6 class="mb-3">Equipment Thumbnail <span class="small text-muted">[Required*]</span></h6>

                <div class="masonry-container lightGallery" style="height: 120px;width:150px">
                    {{-- logo image --}}
                    <div class="hover-tr-holder ">
                        <div>
                            <figure>
                                <div class="img-wrapper  ">
                                    <img class="img-fluid" style="height: 130px;width:130px" class="hoverable"
                                        src="https://unsplash.com/photos/b4m8I3WOHEg"  wire:loading.remove
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
                                            <a href="#" class="light-post no-ajaxy">
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

                        <p class="pb-0 mb-0 text-danger">{{ $errors->first('logo_image') }}</p>

                        <input id="logo_image" wire:model="logo_image" hidden type="file">
                    </div>

                </div>
                <h6 class="mb-3 mt-4">Equipment Pictures</h6>
                <div class="d-flex   masonry-container lightGallery">

                    {{-- Galleries images Loop --}}

                    <div class="hover-tr-holder">
                        <div>
                            <figure>
                                <div class="img-wrapper">
                                    <img class="image-fluid" class="img-fluid" wire:loading.remove
                                        wire:target="removeGalleryImage()" src=""
                                         style="height: 120px;width:150px">
                                    <div wire:loading wire:target="removeGalleryImage()">
                                        <div class="card bg-transparent d-flex justify-content-center align-items-center"
                                            style="height: 120px;width:150px">
                                            <div class="spinner-border text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-overlay figure-caption text-white" wire:loading.remove
                                        wire:target="removeGalleryImage()">
                                        <div class="figcaption d-flex justify-content-around align-items-center ">
                                            <a class="no-ajaxy">
                                                <i class="icon icon-trash-o"
                                                    wire:click="removeGalleryImage()"></i>
                                            </a>
                                            <a href="#" class="light-post no-ajaxy">
                                                <i class="icon icon-zoom-in"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>

                    </div>

                    <div class="hover-tr-holder">
                        <div>
                            <figure>
                                <div class="img-wrapper">
                                    <img class="image-fluid" src="https://unsplash.com/photos/b4m8I3WOHEg"
                                        style="height: 120px;width:150px">
                                </div>
                            </figure>
                        </div>
                    </div>
                    {{-- image + --}}
                    <div class="hover-tr-holder">
                        <div>
                            <figure>
                                <div class="img-wrapper hoverable" style="height: 120px;width:150px">

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

                        <p class="pb-0 mb-0 text-danger"></p>

                        <input id="image" wire:model="images" hidden type="file" multiple>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="#"
                        class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                        Back
                    </a>

                    <a href="{{ route('equipment.manage.schedule', ['id'=>1]) }}"
                        class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                        Next
                    </a>
                </div>
                     <br>
                    <livewire:dev.comment align="left" component="Equipment Gallery" />
            </div>
        </div>
        <script>
            document.getElementById('nav-venue-2').classList.add('active');
        </script>
</x-cms-root>

