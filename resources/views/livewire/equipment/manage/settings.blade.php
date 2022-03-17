<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="text-primary">Equipment Settings</h2>
                    <p>Manage your Equipment Settings and publish settings.</p>
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
                        <h5>Review All Steps</h5>
                        <p>Steps are checked, which are completed to publish equipment, Kindly, Complete those steps which are cross check</p>
                    </div>
                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                        <h6 class="text-primary"><a href="#">Details</a></h6>
                        <span class="text-lead">Just to make sure ! you have completed <strong>Details</strong>  for equipments</span>
                        </div>
                        <div class=" p-2">
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                        <h6 class="text-primary"><a href="#">Gallery</a></h6>
                        <span class="text-lead">Just to make sure ! you have setup the <strong>Gallery</strong> for equipments</span>
                        </div>
                        <div class=" p-2">

                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>

                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>

                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>

                        <h6 class="text-primary"><a href="#">Schedule</a></h6>
                        <span class="text-lead">Just to make sure ! you have setup the <strong>Schedule</strong> for equipments</span>
                        </div>
                        <div class=" p-2">

                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>

                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>

                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                        <h6 class="text-primary"><a href="#">Pricing</a></h6>
                        <span class="text-lead">Just to make sure ! you have setup the <strong>Pricing</strong> for equipments</span>
                        </div>
                        <div class=" p-2">
                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>
                            <i class="icon icon-times-circle text-primary" style="font-size:22px;"></i>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-between mb-3">
                        <div>
                        <h6 class="text-primary"><a href="#">Maintenance</a></h6>

                        <span class="text-lead">Checked the checkbox <strong>No Maintenance Required</strong> if you don't have any <strong>Maintenance</strong>  for equipments  </span>

                        <span class="text-lead">No <strong>Maintenance</strong> required for equipments</span>

                        <span class="text-lead">Your equipments required <strong>Maintenance</strong> we will display maintenance <strong>Date & Time</strong> when you publish the equipments</span>

                        </div>
                        <div class=" p-2">

                            <i class="icon icon-exclamation-circle text-warning " style="font-size:22px;"></i>

                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>

                            <i class="icon icon-check-circle text-success " style="font-size:22px;"></i>

                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="#"
                            class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                            Back
                        </a>
                        <div class="d-flex justify-content-end">

                            <a wire:click="updateStatus('Active')"
                                class="btn btn-outline-success btn-sm ml-1 px-4 text-light ">
                                <div class="spinner-border spinner-border-sm text-light mr-2" role="status"
                                        wire:loading.delay wire:target="updateStatus">
                                        <span class="sr-only">Loading...</span>
                                </div>
                                Publish
                            </a>

                            <a wire:click="updateStatus('Inactive')"
                                class="btn btn-outline-primary btn-sm ml-1 px-4 text-light ">
                                <div class="spinner-border spinner-border-sm text-light mr-2" role="status"
                                        wire:loading.delay wire:target="updateStatus">
                                        <span class="sr-only">Loading...</span>
                                </div>
                                Pause
                            </a>

                        </div>
                    </div>

                </div>

                <br>
                <livewire:dev.comment align="left" component="Equipment Settings" />
            </div>
        </div>

        <script>
            document.getElementById('nav-venue-6').classList.add('active');
        </script>

    </div>

</x-cms-root>
