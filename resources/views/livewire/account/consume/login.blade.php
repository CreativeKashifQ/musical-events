
<div>
    <div class="container">
        @include('partials.shared.logo')
        <div class="text-center">
            <h3 class="mb-2 text-primary text-uppercase font-weight-bold l-s-1">Login</h3>
        </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3  ">
                        <div class="pb-3">
                            <div class="d-flex justify-content-start">
                                <h5>Sign In To Your Accont</h5>
                            </div>
                            <p>Sign In with your secret credentials. We will redirect you on your dashbaord with primary role. You can switch your account on after login.
                            </p>

                        </div>
                        <div class="card">
                            <div class="card-body">
                                @include('partials.shared.alert')
                                <form wire:submit.prevent="login">
                                    <!-- Input -->
                                    <div class="body form-material">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                    wire:model.defer="email" placeholder="Email">
                                                @error('email')
                                                <span class="invalid-feedback">{{ $errors->first('email')
                                                    }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="password" autocomplete="off" class="form-control  @error('password') is-invalid @enderror"
                                                   wire:model.defer="password" placeholder="Password">
                                                @error('password')
                                                <span class="invalid-feedback">{{ $errors->first('password')
                                                    }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                            <div class="form-group ">
                                                <div class="d-flex justify-content-end">
                                                    <small> <a href="{{ route('account.consume.forgot-password') }}"> Forgot Password ?  </a></small>
                                                </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <small>Not register yet ? <a href="{{ route('account.consume.select-role') }}"> Register First </a></small>
                                            <button type="submit" class="btn btn-outline-primary btn-sm ">
                                                <div class="spinner-border spinner-border-sm text-danger mr-2" role="status"
                                                    wire:loading wire:target="login">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                Sign In
                                            </button>
                                        </div>


                                    </div>
                                    <!-- #END# Input -->
                                </form>
                            </div>
                        </div>
                        <br>
                        <livewire:dev.comment component="Login" align="left" />
                    </div>

                </div>



    </div>

</div>
