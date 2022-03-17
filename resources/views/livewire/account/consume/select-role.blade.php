<div>
    <style>
        #card-role .card {
            color: #9ca8b0 !important;
        }

        #card-role .card:hover {
            color: var(--primary) !important;
        }
        #card-role .bg-success{
            background-color: var(--primary)!important;
            color: black !important;
        }
        #card-role .bg-success:hover{
            background-color: var(--primary)!important;
            color: black !important;
        }


    </style>
    <section class="section">
        @include('partials.shared.logo')
        <div class="text-center">
            <h3 class="mb-2 text-primary text-uppercase font-weight-bold l-s-1">Select Role</h3>
        </div>

        <div class="container" id="card-role">

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="pb-3">
                        <h5>Can Select Multiple Roles</h5>
                        <p>To register multiple account you can select multiple roles, we will redirect you on your primary selected role dashboard.After
                            selecting roles you can continue and set your email and password for these roles.No worry , you can switch your account on your dashbaord.
                        </p>
                    </div>
                    <div class="row">
                        {{-- venue provider --}}
                        <div class="col-lg-3 col-md-6 mb-4 ">
                            <a href="javascript:void(0)"  onclick="$('#venue_provider').trigger('click');">
                                <div class=" card  text-center {{in_array('venue_provider',$selectedRoles) ? 'bg-success ' : ''}} " >
                                    <span class=""><i class="s-24 {{in_array('venue_provider',$selectedRoles) ? 'text-dark' : 'text-primary'}}  icon-map-marker"
                                            style="font-size: 35px"></i></span>
                                    <strong class="mb-0 mt-3  " >Venue Provider</strong>
                                </div>
                            </a>
                            <input hidden id="venue_provider" wire:model="selectedRoles"  value="venue_provider" type="checkbox"/>
                        </div>
                        {{-- equipment provider --}}

                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="javascript:void(0)" onclick="$('#equipment_provider').trigger('click');" >
                                <div class="card  text-center {{in_array('equipment_provider',$selectedRoles) ? 'bg-success ' : ''}}">
                                    <span class=""><i class="s-24  {{in_array('equipment_provider',$selectedRoles) ? 'text-dark' : 'text-primary'}} icon-gear"
                                            style="font-size: 35px"></i></span>
                                    <strong class="mb-0 mt-3 ">Equipment Provider</strong>
                                </div>
                            </a>
                             <input hidden  id="equipment_provider" wire:model="selectedRoles"  value="equipment_provider" type="checkbox"/>

                        </div>
                        {{-- musical artist --}}
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="javascript:void(0)" onclick="$('#musical_artist').trigger('click');" >
                                <div class="card  text-center {{in_array('musical_artist',$selectedRoles) ? 'bg-success' : ''}}">
                                    <span class=""><i class="s-24 {{in_array('musical_artist',$selectedRoles) ? 'text-dark' : 'text-primary'}} icon-music"
                                            style="font-size: 35px"></i></span>
                                    <strong class="mb-0 mt-3">Musical Artist</strong>
                                </div>
                            </a>
                             <input hidden  id="musical_artist" wire:model="selectedRoles"  value="musical_artist" type="checkbox"/>
                        </div>
                         {{-- artist managers --}}
                         <div class="col-lg-3 col-md-6 mb-4">
                            <a href="javascript:void(0)" onclick="$('#manager').trigger('click');" >
                            <div class="card text-center {{in_array('manager',$selectedRoles) ? 'bg-success' : ''}}">
                                <span class=""><i class="s-24 {{in_array('manager',$selectedRoles) ? 'text-dark' : 'text-primary'}} icon-users"
                                        style="font-size: 35px"></i></span>
                                <strong class="mb-0 mt-3">Artist Manager</strong>
                            </div>
                        </a>
                         <input hidden  id="manager" wire:model="selectedRoles"  value="manager" type="checkbox"/>
                        </div>
                           {{-- event host --}}
                           <div class="col-lg-3 col-md-6 mb-4">
                            <a href="javascript:void(0)" onclick="$('#event_host').trigger('click');" >
                            <div class="card text-center {{in_array('event_host',$selectedRoles) ? 'bg-success' : ''}}">
                                <span class=""><i class="s-24 {{in_array('event_host',$selectedRoles) ? 'text-dark' : 'text-primary'}} icon-header"
                                        style="font-size: 35px"></i></span>
                                <strong class="mb-0 mt-3">Event Host </strong>
                            </div>
                        </a>
                         <input hidden  id="event_host" wire:model="selectedRoles"  value="event_host" type="checkbox"/>
                        </div>
                        {{-- food supplier --}}
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="javascript:void(0)" onclick="$('#food_supplier').trigger('click');" >
                            <div class="card  text-center {{in_array('food_supplier',$selectedRoles) ? 'bg-success' : ''}}">
                                <span class=""><i class="s-24 {{in_array('food_supplier',$selectedRoles) ? 'text-dark' : 'text-primary'}} icon-opencart"
                                        style="font-size: 35px"></i></span>
                                <strong class="mb-0 mt-3">Food Supplier</strong>
                            </div>
                        </a>
                         <input hidden  id="food_supplier" wire:model="selectedRoles"  value="food_supplier" type="checkbox"/>
                        </div>

                        {{-- promoters --}}
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="javascript:void(0)" onclick="$('#promoter').trigger('click');" >
                            <div class="card text-center {{in_array('promoter',$selectedRoles) ? 'bg-success' : ''}}">
                                <span class=""><i class="s-24 {{in_array('promoter',$selectedRoles) ? 'text-dark' : 'text-primary'}} icon-megaphone-1"
                                        style="font-size: 35px"></i></span>
                                <strong class="mb-0 mt-3">Promoter</strong>
                            </div>
                        </a>
                         <input hidden  id="promoter" wire:model="selectedRoles"  value="promoter" type="checkbox"/>
                        </div>

                        {{-- sponsers --}}
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="javascript:void(0)" onclick="$('#sponser').trigger('click');" >
                            <div class="card text-center {{in_array('sponser',$selectedRoles) ? 'bg-success' : ''}}">
                                <span class=""><i class="s-24 {{in_array('sponser',$selectedRoles) ? 'text-dark' : 'text-primary'}} icon-group"
                                        style="font-size: 35px"></i></span>
                                <strong class="mb-0 mt-3">Sponsor</strong>
                            </div>
                        </a>
                         <input hidden  id="sponser" wire:model="selectedRoles"  value="sponser" type="checkbox"/>
                        </div>


                    </div>
                    <div class="d-flex justify-content-between">
                        <small><a href="{{ route('account.consume.login') }}">Go To Login</a></small>
                        <button wire:click="attemptSelectedRoles" class="btn btn-outline-primary btn-sm   float-right">
                            <div class="spinner-border spinner-border-sm text-danger mr-2" role="status"
                                wire:loading wire:target="store">
                                <span class="sr-only">Loading...</span>
                            </div>
                            Continue
                        </button>
                    </div>
                    <br>
                      <livewire:dev.comment component="Select Role" align="left"/>
                </div>
            </div>
        </div>


    </section>

</div>
