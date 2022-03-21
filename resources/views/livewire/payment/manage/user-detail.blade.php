<x-cms-root>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="text-center">
                <h2 class="text-primary">Payment Method</h2>
                <p>Complete all steps and pay to book service</p>
            </div>
        </div>
    </div>
    @livewire('payment.manage.components.sub-nav',['offer' => $offer])
        <div class="row">
            <div class="col-lg-6 offset-lg-3">

                <div class="card-body">
                    <div class="pb-3">
                        <h5>Your Basic Information </h5>
                        <p>Update basic informarion, with contacts and cnic details</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">
                        <!-- Input -->
                        <div class="body form-material">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control @error('user.user_name') is-invalid @enderror"
                                        wire:model.defer="user.user_name" placeholder="user name">
                                    @error('user.user_name')
                                    <span class="invalid-feedback">{{ $errors->first('user.user_name')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="email" class="form-control @error('user.email') is-invalid @enderror"
                                        wire:model.defer="user.email" placeholder="email">
                                    @error('user.email')
                                    <span class="invalid-feedback">{{ $errors->first('user.email')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control  @error('user.phone') is-invalid @enderror"
                                        wire:model.defer="user.phone" placeholder="phone">
                                    @error('user.phone')
                                    <span class="invalid-feedback">{{ $errors->first('user.phone')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control  @error('user.cnic') is-invalid @enderror"
                                        wire:model.defer="user.cnic" placeholder="cnic">
                                    @error('user.cnic')
                                    <span class="invalid-feedback">{{ $errors->first('user.cnic')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control  @error('user.message') is-invalid @enderror" id=""
                                        cols="10" rows="2" wire:model.defer="user.message"
                                        placeholder="Mssage"></textarea>
                                    @error('user.message')
                                    <span class="invalid-feedback">{{ $errors->first('user.message')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('payment.manage.payable-service-card', ['service'=> 'venue','offer' => $offer]) }}"
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
                                    <a href="javascript:void(0)" wire:click="attemptUserDetail"
                                        class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                        Next
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- #END# Input -->
                    </form>
                </div>

                 <livewire:dev.comment align="left" component="User Details" />
            </div>
        </div>

        <script>
            document.getElementById('user-detail').classList.add('active');
        </script>



</x-cms-root>
