<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">Equipment Schedule</h2>
                    <p>Manage your Equipment schedule and publish it.</p>
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
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card-body">
                    <div class="pb-3">
                        <h5>Update Schedule</h5>
                        <p>Set schedule timing for your equipment with opening_time and closing_time</p>
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
                                <a href="#"
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

                                    <a href="{{ route('equipment.manage.pricing') }}"
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
            document.getElementById('nav-venue-3').classList.add('active');
        </script>

    </div>

</x-cms-root>

