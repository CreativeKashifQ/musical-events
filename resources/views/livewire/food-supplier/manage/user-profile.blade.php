<x-cms-root>


    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-12">
            <h2 class="text-primary">My Profile</h2>
            <div class="pb-3">
                <h5>Activate Profile Information</h5>
                <p>Track your profile, images, menues and availablitiy</p>
            </div>
            <div class="card  shadow ">
                <div class="row ">
                    <div class="col-md-4 ">
                        <div class="text-center py-5 ">
                            <div wire:loading.remove style="cursor:pointer" onclick="document.getElementById('avatarId').click()">
                                <figure class="avatar avatar-lg" style="width:110px;height:110px;">
                                    <img src="{{$avatar != null ? asset($avatar) : asset('images/default.png')}}" alt="">
                                </figure><br>
                                <small class="text-muted">Change Avatar</small>
                                <input hidden id="avatarId" wire:model="avatar" type="file" />
                            </div>
                            <div wire:loading>
                                <div class="card bg-transparent d-flex justify-content-center align-items-center " style="height: 120px;width:130px">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="py-5">
                            <h2 class="text-primary text-uppercase">{{$user->name}}</h2>
                            <span>{{$user->email}} <small class="text-muted"> ( Food Supplier ) </small></span>


                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-12">
                                     
                                        <!-- Experince -->
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <strong class="font-weight-bold">Experience :</strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <span>{{$user->profile && $user->profile->experience ? $user->profile->experience : 'Update Experience'}} </span>
                                            </div>
                                        </div>
                                        <!-- Contact -->
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <strong class="font-weight-bold">Contact :</strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <span>{{$user->profile && $user->profile->phone ? $user->profile->phone : 'Update Contact'}}</span>
                                            </div>
                                        </div>

                                        <!-- Location -->
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <strong class="font-weight-bold">Address :</strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <span>{{$user->profile && $user->profile->address ? $user->profile->address : 'Update Address'}}</span>
                                            </div>
                                        </div>
                                        <!-- Availability -->
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <strong class="font-weight-bold">Availability :</strong>
                                            </div>
                                            <div class="col-lg-6">
                                                @if($user->fsupplier)
                                                <span>{{Carbon\Carbon::parse($user->fsupplier->opening_time)->format('g:i A')}} - {{
                                                                Carbon\Carbon::parse($user->fsupplier->closing_time)->format('g:i A')}}
                                                    </span>
                                                @else
                                                <span class="text-primary">
                                                    Update Availability
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                         <!-- Areas -->
                                         <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <strong class="font-weight-bold">Service Areas :</strong>
                                            </div>
                                            <div class="col-lg-6">
                                                @if($user->fsupplier)
                                                <span>{{$user->fsupplier->address}} 
                                                    </span>
                                                @else
                                                <span class="text-primary">
                                                    UpdateLocation
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Bio -->
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <strong class="font-weight-bold">Bio :</strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <span>{{ $user->profile && $user->profile->bio ? $user->profile->bio : 'Update Bio'}}</span>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <strong class="font-weight-bold">Profile Status :</strong>
                                            </div>
                                            <div class="col-lg-6">
                                                @if($user->profile && $user->profile->status == 'Active')
                                                <span class="badge badge-success">Active</span>
                                                @else
                                                <span class="badge badge-danger">In-Active</span>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Manage -->
                                        <div class="row mt-5">
                                            <div class="col-lg-6">

                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{route('food-supplier.manage.entity',['supplier'=> $user])}}" class="btn btn-outline-primary btn-sm ml-1 px-4  ">
                                                    Manage Profile
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
            <livewire:dev.comment align="left" component="Food Supplier Profile" />
        </div>
        
    </div>
   


</x-cms-root>