<x-cms-root>
    <a href="{{route('ehost.manage.book-service',['service'=>'venue'])}}" class="font-weight-bold text-muted"> <i class="icon-arrow-left pr-2 "></i>Back</a>
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <h2 class="text-primary text-center mb-4">Event Host Offer Plan</h4>
                <div class="pb-3">
                    <span>Event Host can send offer, Provider can accept or decline the offer<br> Update offer details and click on send button </span>
                </div>
                <form wire:submit.prevent="sendOffer">
                    <!-- Input -->
                    <div class="body form-material">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Name</label>
                                <input type="text" readonly class="form-control @error('venue.name') is-invalid @enderror"
                                    wire:model.defer="venue.name" placeholder="venue name">
                                @error('venue.name')
                                <span class="invalid-feedback">{{ $errors->first('venue.name')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Location</label>
                                <input type="text" readonly class="form-control @error('venue.location') is-invalid @enderror"
                                    wire:model.defer="venue.location" placeholder="location">

                                @error('venue.location')
                                <span class="invalid-feedback">{{ $errors->first('venue.location')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Capacity</label>
                                <input type="text" class="form-control  @error('venue.capacity') is-invalid @enderror"
                                    wire:model.defer="venue.capacity" placeholder="capacity">
                                @error('venue.capacity')
                                <span class="invalid-feedback">{{ $errors->first('venue.capacity')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-material form-row">
                            <div class="form-group col-md-6">
                                <div class="form-line">
                                    <label>Start Time</label>
                                    <input type="time"
                                        class="form-control @error('venue.opening_time') is-invalid @enderror "
                                        wire:model.defer="venue.opening_time" placeholder="Opening Time">

                                    @error('venue.opening_time')
                                    <span class="invalid-feedback">{{ $errors->first('venue.opening_time')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-line">
                                    <label>End Time</label>
                                    <input type="time"
                                        class="form-control @error('venue.closing_time') is-invalid @enderror "
                                        wire:model.defer="venue.closing_time" placeholder="Closing Time">
                                    @error('venue.closing_time')
                                    <span class="invalid-feedback">{{ $errors->first('venue.closing_time')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Available Date</label>
                                <input type="date" class="form-control  @error('venue.date') is-invalid @enderror"
                                    wire:model.defer="venue.date" placeholder="date">
                                @error('venue.date')
                                <span class="invalid-feedback">{{ $errors->first('venue.date')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Rate($)/hour</label>
                                <input type="text" class="form-control  @error('venue.hourly_rate') is-invalid @enderror"
                                    wire:model.defer="venue.hourly_rate" placeholder="hourly_rate">
                                @error('venue.hourly_rate')
                                <span class="invalid-feedback">{{ $errors->first('venue.hourly_rate')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Hours</label>
                                <input type="text" class="form-control  @error('venue.hours') is-invalid @enderror"
                                    wire:model.defer="venue.hours" placeholder="1">
                                @error('venue.hours')
                                <span class="invalid-feedback">{{ $errors->first('venue.hours')
                                    }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Message</label>
                                <textarea class="form-control  @error('venue.description') is-invalid @enderror" id=""
                                    cols="10" rows="2" wire:model.defer="venue.description"
                                    placeholder="description"></textarea>
                                @error('venue.description')
                                <span class="invalid-feedback">{{ $errors->first('venue.description')
                                    }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="">
                                <label>Provider Detail</label><br>
                                <tr>
                                    <small>Name : </small> <td>{{$venue->user->name}}</td>
                                </tr>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{route('ehost.manage.book-service',['service'=>'venue'])}}" class="btn btn-outline-secondary btn-sm ">
                                Back
                            </a>
                            <button type="submit" class="btn btn-outline-primary btn-sm   ">
                                Send Offer
                            </button>
                        </div>
                    </div>
                    <!-- #END# Input -->
                </form>
                <br>
                <br>
                <livewire:dev.comment align="left" component="Event Host Offer" />
        </div>

    </div>

</x-cms-root>
