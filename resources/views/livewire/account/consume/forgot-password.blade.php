
<div>
    <div class="container">
        @include('partials.shared.logo')
        <div class="text-center">
            <h3 class="mb-2 text-primary text-uppercase font-weight-bold l-s-1">Forgot Password</h3>
        </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3  ">
                        <div class="pb-3">
                            <div class="d-flex justify-content-start">
                                <h5>Reset Password Link</h5>
                            </div>
                            <p>Enter your valid email, we will send you reset password link on your email, by using that email you can update your password.
                            </p>

                        </div>
                        <div class="card">
                            <div class="card-body">
                                @include('partials.shared.alert')
                                <form wire:submit.prevent="sendResetPasswordLink">
                                    <!-- Input -->
                                    <div class="body form-material">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="email" class="form-control  @error('email') is-invalid @enderror" wire:model.defer="email" placeholder="Email">
                                                @error('email')
                                                <span class="invalid-feedback">{{ $errors->first('email')
                                                    }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <small><a href="{{ route('account.consume.login') }}" >Go to Login</a></small>
                                            <button type="submit" class="btn btn-outline-primary btn-sm pl-4 pr-4">
                                                <div class="spinner-border spinner-border-sm text-danger mr-2"
                                                    role="status" wire:loading wire:target="sendResetPasswordLink">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                Send Reset Password Link
                                            </button>
                                           </div>

                                    </div>
                                    <!-- #END# Input -->
                                </form>
                            </div>
                        </div>
                        <br>
                        <livewire:dev.comment component="Forgot Password" align="left" />
                    </div>

                </div>



    </div>

</div>
