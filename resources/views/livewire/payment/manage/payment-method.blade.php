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
                <div class="d-flex justify-content-between">
                    <div class="pb-3">
                        <h5>Your Card Information </h5>
                        <p>Enter your card details and pay for service</p>
                    </div>

                    <div class="pb-3">
                        <h5>$ {{$booking->payable_amount}}</h5>
                        <p> Payable Amount </p>
                    </div>
                </div>
            <div class="card">
                <div class="card-body">

                    <form wire:submit.prevent="paymentMethod" wire:loading.attr="disabled" wire:target="paymentMethod">
                        <!-- Input -->
                        <div class="body form-material">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class='control-label'>Name On Card :</label>
                                    <input type="text" class="form-control @error('card.name') is-invalid @enderror"
                                        wire:model.defer="card.name" placeholder="John Doe">
                                    @error('card.name')
                                    <span class="invalid-feedback">{{ $errors->first('card.name')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class='control-label'>Card Number :</label>
                                    <input type="number" class="form-control @error('card.number') is-invalid @enderror"
                                        wire:model.defer="card.number" placeholder="00000 0000 0000 ">
                                    @error('card.number')
                                    <span class="invalid-feedback">{{ $errors->first('card.number')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class='control-label'>Expiration Date :</label>
                                            <input type="text" class="form-control  @error('card.expiration_date') is-invalid @enderror"
                                                wire:model.defer="card.expiration_date" placeholder="mm/yyy">
                                            @error('card.expiration_date')
                                            <span class="invalid-feedback">{{ $errors->first('card.expiration_date')
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group form-float">
                                        <div class="form-line ">
                                            <label class='control-label'>CVV :</label>
                                            <input type="text" class="form-control   @error('card.cvv') is-invalid @enderror"
                                                wire:model.defer="card.cvv" placeholder="xxx">
                                            @error('card.cvv')
                                            <span class="invalid-feedback">{{ $errors->first('card.cvv')
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>





                            <div class="d-flex justify-content-between">
                                <a href="{{ route('payment.manage.user-detail', ['offer' => $offer]) }}"
                                    class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                    Back
                                </a>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-outline-success btn-sm px-4   ">
                                        <div class="spinner-border spinner-border-sm text-danger mr-2" role="status"
                                            wire:loading.delay wire:target="paymentMethod">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        Pay Now
                                    </button>

                                </div>
                            </div>

                        </div>
                        <!-- #END# Input -->
                    </form>
                </div>
            </div>
                 <livewire:dev.comment align="left" component="Payment Method" />
            </div>
        </div>

        <script>
            document.getElementById('payment-method').classList.add('active');
        </script>



</x-cms-root>
