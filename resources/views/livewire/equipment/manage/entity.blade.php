<x-cms-root>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">Equipment Name</h2>
                    <p>Manage your equipment and other settings.</p>
                </div>
                {{-- Equipment provider sub-nav --}}
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
        <div class="row">
            <div class="col-lg-6 offset-lg-3">

                <div class="card-body">
                    <div class="pb-3">
                        <h5>Basic Information</h5>
                        <p>Update basic informarion about your equipment, Manage your equipment features and publish settings</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">
                        <!-- Input -->
                        <div class="body form-material">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control @error('venue.name') is-invalid @enderror"
                                        wire:model.defer="venue.name" placeholder="Guitar">
                                    @error('venue.name')
                                    <span class="invalid-feedback">{{ $errors->first('venue.name')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control @error('venue.location') is-invalid @enderror"
                                        wire:model.defer="venue.location" placeholder="Wooden Brown">

                                    @error('venue.location')
                                    <span class="invalid-feedback">{{ $errors->first('venue.location')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control  @error('venue.capacity') is-invalid @enderror"
                                        wire:model.defer="venue.capacity" placeholder="6.6 lbs">
                                    @error('venue.capacity')
                                    <span class="invalid-feedback">{{ $errors->first('venue.capacity')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control  @error('venue.capacity') is-invalid @enderror"
                                        wire:model.defer="venue.capacity" placeholder="350">
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
                                        placeholder="Lorem ipsum dolor smit emet Lorem ipsum dolor smit emet Lorem ipsum dolor smit emet"></textarea>
                                    @error('venue.description')
                                    <span class="invalid-feedback">{{ $errors->first('venue.description')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('equipment.manage.gallery') }}" type="submit" class="btn btn-outline-primary btn-sm px-4">

                                    Save Changes
                                </a>

                                <a href="#"
                                    class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                    Next
                                </a>
                            </div>

                        </div>
                        <!-- #END# Input -->
                    </form>
                </div>

                 <livewire:dev.comment align="left" component="Equipment Detail" />
            </div>
        </div>

        <script>
            document.getElementById('nav-venue-1').classList.add('active');
        </script>



</x-cms-root>

