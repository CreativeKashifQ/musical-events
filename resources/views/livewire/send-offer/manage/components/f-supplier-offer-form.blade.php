<div>

    <form wire:submit.prevent="sendFSupplierOfferForm">
        <!-- Input -->
        <div class="body form-material">
            <div class="form-group form-float">
                     @php
                        $minDate = now()->format('Y-m-d');
                    @endphp
                <div class="form-line">
                    <label>Booking Date</label>
                    <input  type="date" min="{{$minDate}}" class="form-control  @error('bookingDate') is-invalid @enderror" wire:model="bookingDate" wire:target="bookingDate" placeholder="date">
                    @error('bookingDate')
                    <span class="invalid-feedback">{{ $errors->first('bookingDate')
                    }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group form-float">

                <div class="form-line">
                    <label>Name</label>
                    <input readonly type="text" readonly class="form-control @error('fSupplier.user.name') is-invalid @enderror" wire:model.defer="fSupplier.user.name" placeholder="fSupplier name">
                    @error('fSupplier.user.name')
                    <span class="invalid-feedback">{{ $errors->first('fSupplier.user.name')
                    }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label>Email</label>
                    <input readonly class="form-control  @error('fSupplier.user.email') is-invalid @enderror" id="" cols="10" rows="2" wire:model.defer="fSupplier.user.email" placeholder="description">
                    @error('fSupplier.user.email')
                    <span class="invalid-feedback">{{ $errors->first('fSupplier.user.email')
                    }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-material form-row">
                <div class="form-group col-md-6">
                    <div class="form-line">
                        <label>Available From</label>
                        <input type="time" class="form-control @error('fSupplier.opening_time') is-invalid @enderror " wire:model.defer="fSupplier.opening_time" placeholder="Opening Time">

                        @error('fSupplier.opening_time')
                        <span class="invalid-feedback">{{ $errors->first('fSupplier.opening_time')
                        }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-line">
                        <label>Available To</label>
                        <input type="time" class="form-control @error('fSupplier.closing_time') is-invalid @enderror " wire:model.defer="fSupplier.closing_time" placeholder="Closing Time">
                        @error('fSupplier.closing_time')
                        <span class="invalid-feedback">{{ $errors->first('fSupplier.closing_time')
                        }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group form-float">
                <div class="form-line">
                    <label>Message</label>
                    <textarea class="form-control  @error('message') is-invalid @enderror" id="" cols="10" rows="2" wire:model.defer="message" placeholder="Message For Food Supplier"></textarea>
                    @error('message')
                    <span class="invalid-feedback">{{ $errors->first('message')
                    }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group ">
                <div class="">
                    <label>Provider Detail</label><br>
                    <tr>
                        <small>Name : </small>
                        <td>{{$fSupplier->user->name}}</td>
                    </tr>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{route('ehost.manage.book-service',['service'=>'fSupplier'])}}" class="btn btn-outline-secondary btn-sm ">
                    Back
                </a>

                <button type="submit" class="btn btn-outline-primary btn-sm" @if($disableSendOfferButton) disabled @endif>
                    <div wire:loading wire:target="sendfSupplierOfferForm">
                        <div class="spinner-border spinner-border-sm text-danger mr-2" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <span wire:loading.remove wire:target="sendfSupplierOfferForm">Send Offer</span>
                    <span wire:loading wire:target="sendfSupplierOfferForm">Sending Offer.......</span>
                </button>
            </div>
        </div>
        <!-- #END# Input -->
    </form>
    <br>
    <br>
    <livewire:dev.comment align="left" component="Event Host Send Offer To Food Supplier" />

</div>
