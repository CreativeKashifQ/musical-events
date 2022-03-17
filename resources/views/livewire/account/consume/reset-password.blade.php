<div>


    <x-modal-message type="ForgotPassword" mode="success" icon="icon-success" title="Password Updated Successfully" message="After verify your identity , we have reset your password, Now you can login with new credentials"  backUrl=""  backurlText=""  nextUrl="{{ route('account.consume.login') }}"  nexturlText="Go To Login" textColor="text-success"  :show="$toggleModal"
    >
    <div class="container">
        <div class="text-center s-14  my-5">
                <h3 class="mb-2 text-primary text-uppercase font-weight-bolder l-s-2">Reset Password</h3>
                <h6 class="text-muted">Enter your new password to secure your account</h6>
        </div>
        <div class="row">
            <div class="col-md-12 mx-md-auto">

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 card p-5">
                            <form wire:submit.prevent="updatePassword">
                                <!-- Input -->
                                <div class="body form-material">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control  @error('email') is-invalid @enderror" disabled wire:model.defer="email" placeholder="Email">
                                            @error('email')
                                            <span class="invalid-feedback">{{ $errors->first('email')
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control  @error('password') is-invalid @enderror" wire:model.defer="password" placeholder="Password">
                                            @error('password')
                                            <span class="invalid-feedback">{{ $errors->first('password')
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" wire:model.defer="password_confirm" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">

                                        <button type="submit" class="btn btn-outline-primary btn-sm pl-4 pr-4">
                                            <div class="spinner-border spinner-border-sm text-danger mr-2"
                                                role="status" wire:loading wire:target="sendResetPasswordLink">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                           Update Password
                                        </button>
                                       </div>

                                </div>
                                <!-- #END# Input -->
                            </form>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</x-model-message>



</div>

