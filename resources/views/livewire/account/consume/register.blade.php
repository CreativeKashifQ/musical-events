<div>
  
    <div class="container">
        @include('partials.shared.logo')
        <div class="text-center">
            <h3 class="mb-2 text-primary text-uppercase font-weight-bold l-s-1">Registration</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3  ">
                <div class="pb-3">
                    <div class="d-flex justify-content-start">
                        <h5>Can Select Multiple Roles</h5>
                        <h5><small><a href="{{ url()->previous() }}" class="ml-2"> Update Role </a></small></h5>
                    </div>
                    <p>Set your secure credentials with your email and create account.
                    </p>
                    @if($roles != null)
                    <div class="d-flex justify-content-start">
                        @foreach ($roles as $role)
                        <span
                            class="badge  badge-primary text-dark mr-1 text-capitalize font-weight-bold">{{$role}}</span>
                        @endforeach
                    </div>
                    @endif



                </div>
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="store" wire:loading.attr="disabled" wire:target="store">
                            <div class="form-material">
                                <!-- Input -->
                                <div class="body">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                wire:model.defer="name" placeholder="Name">

                                            @error('name')
                                            <span class="invalid-feedback">{{ $errors->first('name')
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                wire:model.defer="email" placeholder="Email">

                                            @error('email')
                                            <span class="invalid-feedback">{{ $errors->first('email')
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                wire:model.defer="password" placeholder="Password">

                                            @error('password')
                                            <span class="invalid-feedback">{{ $errors->first('password')
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control"
                                                wire:model.defer="password_confirm" placeholder="Confirm Password">

                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <small> Already have an account ?<a href="{{ route('account.consume.login') }}">
                                                Go To Login</a></small>
                                        <button type="submit" class="btn btn-outline-primary btn-sm   float-right">
                                            <div class="spinner-border spinner-border-sm text-danger mr-2" role="status"
                                                wire:loading wire:target="store">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            Create Account
                                        </button>
                                    </div>
                                </div>
                                <!-- #END# Input -->
                            </div>

                        </form>
                    </div>
                </div>
                <br>
                <livewire:dev.comment component="Register" align="left" />
            </div>

        </div>



    </div>

</div>
