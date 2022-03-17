<div>


        <x-modal-message type="VerifyEmail" mode="warning" icon="icon-exclamation-circle" title="Verify You Email To Access!" message="Please verify your email first. If you dont receive an email verification link then click to resend or change your email"  backUrl="resendLink"  backurlText="Resend Link"  nextUrl="/"  nexturlText="Change Email" textColor="text-warning"  :show="$toggleModal"
        >
        <div class="container">
            <div class="text-center s-14 l-s-2 mt-5">
                <a class="" href="#">
                    <h1 class="mb-2 text-primary text-uppercase font-weight-bolder">Logo</h1>
                </a>
            </div>
            <div class="row">
                <div class="col-md-6 mx-md-auto">
                    <div class="mt-5">
                        <div class="row">
                            <div class="col-md-8 mx-md-auto card p-5">
                                <div class="container">
                                    <div class="text-center my-4">
                                        <a class="" href="index.html">
                                            <h4 class="mb-2 text-primary text-uppercase font-weight-bolder ">Change Email</h4>
                                            <span class="text-muted">Enter your email address below to and send verification link</span>
                                        </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mx-md-auto">
                                            <div class="mt-2">
                                                <form wire:submit.prevent="changeEmail">
                                                    <!-- Input -->
                                                    <div class="body form-material">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">

                                                                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model.defer="email">
                                                                <label class="form-label">Email</label>
                                                                @error('email')
                                                                <span class="invalid-feedback">{{ $errors->first('email')
                                                                    }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                             <div class="d-flex justify-content-between">
                                                                <small><button type="button" class=" btn btn-outline  btn-sm  text-muted" onclick="@this.set('toggleModal',true)"  style="text-decoration: underline;">Hide</button></small>
                                                                <button type="submit" class="btn btn-outline-primary btn-sm pl-5 pr-5">
                                                                    <div class="spinner-border spinner-border-sm text-danger mr-2"
                                                                        role="status" wire:loading wire:target="changeEmail">
                                                                        <span class="sr-only">Loading...</span>
                                                                    </div>
                                                                    Change Email
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-model-message>



</div>
