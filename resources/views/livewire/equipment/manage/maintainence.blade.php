<x-cms-root>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">Equipment Maintainence</h2>
                    <p>Manage your Venue features and publish settings.</p>
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
                        <h5>Update Maintenance Date,Time</h5>
                        <p>You can add maintenance date and time for equipments , Manage your Equipment features and publish
                            settings</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">

                        <div class="form-material form-row">
                            <div class="form-group col-md-4">
                                <div class="form-line">
                                    <label>Maintenance Date</label>
                                    <input type="date"
                                        class="form-control @error('v_under_maintenance.date') is-invalid @enderror "
                                        wire:model.defer="v_under_maintenance.date" placeholder="10/11/2022">
                                    @error('v_under_maintenance.date')
                                    <span class="invalid-feedback">{{ $errors->first('v_under_maintenance.date')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <div class="form-line">
                                    <label>Start Time</label>
                                    <input type="time"
                                        class="form-control @error('v_under_maintenance.start_time') is-invalid @enderror "
                                        wire:model.defer="v_under_maintenance.start_time" placeholder="10:00 AM">
                                    @error('v_under_maintenance.start_time')
                                    <span class="invalid-feedback">{{ $errors->first('v_under_maintenance.start_time')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-line">
                                    <label>End Time</label>
                                    <input type="time"
                                        class="form-control @error('v_under_maintenance.end_time') is-invalid @enderror "
                                        wire:model.defer="v_under_maintenance.end_time" placeholder="08:00 PM">
                                    @error('v_under_maintenance.end_time')
                                    <span class="invalid-feedback">{{ $errors->first('v_under_maintenance.end_time')
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
                        <div class="pb-3">
                            <h5>Under Manintence Slots</h5>
                            <p>If your equipment doesn't require any manintence, check the box ! Maintenance not required , Manage
                                your Equipments features and publish
                                settings</p>
                        </div>
                        <div class="under_maintenance_section">


                            <div class='card mb-2'>
                                <div class="d-flex justify-content-around p-3">
                                    <strong>This</strong>
                                    <strong>This</strong>
                                    <strong class="text-primary">To</strong>
                                    <strong></strong>
                                    <div>
                                        {{-- <strong class="pr-2"><a wire:click="edit({{$under_maintenance->id}})"><i
                                                    class="icon icon-edit"></i></a></strong> --}}
                                        <strong><a wire:click="remove()"><i
                                                    class="icon icon-trash-o"></i></a></strong>
                                    </div>
                                </div>
                            </div>

                            <div class='card'>
                                <div class="d-flex justify-content-between p-3">
                                    <div>
                                        <strong>No Required Maintenance</strong>
                                    </div>

                                    <div>
                                        <input type="checkbox" wire:model="no_maintenance_required">
                                    </div>

                                </div>
                            </div>

                        </div>




                        <div class="d-flex justify-content-between my-3">
                            <a href="#"
                                class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                Back
                            </a>

                            <a href="{{ route('equipment.manage.settings') }}"
                                class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                Next
                            </a>
                        </div>
                    </div>


                </div>
                <br>
                <livewire:dev.comment align="left" component="Equipment Maintenance" />
            </div>
        </div>

        <script>
            document.getElementById('nav-venue-5').classList.add('active');
        </script>
</x-cms-root>

