<div>

    <form wire:submit.prevent="sendEquipmentOfferForm">
        <!-- Input -->
        <div class="body form-material">
            <div class="form-group form-float">
                    @php
                        $minDate = now()->format('Y-m-d');
                    @endphp
                <div class="form-line">
                    <label>Booking Date</label>
                    <input type="date" min="{{$minDate}}" class="form-control  @error('bookingDate') is-invalid @enderror" wire:model="bookingDate" placeholder="date">
                    @error('bookingDate')
                    <span class="invalid-feedback">{{ $errors->first('bookingDate')
                    }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group form-float">

                <div class="form-line">
                    <label>Name</label>
                    <input type="text" readonly class="form-control @error('equipment.name') is-invalid @enderror" wire:model.defer="equipment.name" placeholder="equipment name">
                    @error('equipment.name')
                    <span class="invalid-feedback">{{ $errors->first('equipment.name')
                    }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label>Details, Eg. Brand,Model</label>
                    <input class="form-control  @error('equipment.description') is-invalid @enderror" id="" cols="10" rows="2" wire:model.defer="equipment.description" placeholder="description">
                    @error('equipment.description')
                    <span class="invalid-feedback">{{ $errors->first('equipment.description')
                    }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label>Location</label>
                    <input type="text" readonly class="form-control @error('equipment.location') is-invalid @enderror" wire:model.defer="equipment.location" placeholder="location">

                    @error('equipment.location')
                    <span class="invalid-feedback">{{ $errors->first('equipment.location')
                    }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label>Quantity</label>
                    <input type="text" class="form-control  @error('equipment.quantity') is-invalid @enderror" wire:model.defer="equipment.quantity" placeholder="quantity">
                    @error('equipment.quantity')
                    <span class="invalid-feedback">{{ $errors->first('equipment.quantity')
                    }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-material form-row">
                <div class="form-group col-md-6">
                    <div class="form-line">
                        <label>Available From</label>
                        <input type="time" class="form-control @error('equipment.opening_time') is-invalid @enderror " wire:model.defer="equipment.opening_time" placeholder="Opening Time">

                        @error('equipment.opening_time')
                        <span class="invalid-feedback">{{ $errors->first('equipment.opening_time')
                        }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-line">
                        <label>Available To</label>
                        <input type="time" class="form-control @error('equipment.closing_time') is-invalid @enderror " wire:model.defer="equipment.closing_time" placeholder="Closing Time">
                        @error('equipment.closing_time')
                        <span class="invalid-feedback">{{ $errors->first('equipment.closing_time')
                        }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label>Hours</label>
                    <input type="text" class="form-control  @error('equipment.hours') is-invalid @enderror" wire:model.defer="equipment.hours" placeholder="1">
                    @error('equipment.hours')
                    <span class="invalid-feedback">{{ $errors->first('equipment.hours')
                    }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label>Rate($)/hour</label>
                    <input type="text" class="form-control  @error('equipment.hourly_rate') is-invalid @enderror" wire:model.defer="equipment.hourly_rate" placeholder="hourly_rate">
                    @error('equipment.hourly_rate')
                    <span class="invalid-feedback">{{ $errors->first('equipment.hourly_rate')
                    }}</span>
                    @enderror
                </div>
            </div>



            <div class="form-group ">
                <div class="">
                    <label>Provider Detail</label><br>
                    <tr>
                        <small>Name : </small>
                        <td>{{$equipment->user->name}}</td>
                    </tr>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{route('ehost.manage.book-service',['service'=>'equipment'])}}" class="btn btn-outline-secondary btn-sm ">
                    Back
                </a>

                <button type="submit" class="btn btn-outline-primary btn-sm" @if($disableSendOfferButton) disabled @endif>
                    <div wire:loading wire:target="sendequipmentOfferForm">
                        <div class="spinner-border spinner-border-sm text-danger mr-2" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <span wire:loading.remove>Send Offer</span>
                    <span wire:loading>Sending Offer.......</span>
                </button>
            </div>
        </div>
        <!-- #END# Input -->
    </form>
    <br>
    <br>
    <livewire:dev.comment align="left" component="Event Host Offer" />

</div>
