<div>
<div class="text-center pt-4 pr-4">
                        <div class="mt-5">
                            <div class="d-flex justify-content-between">

                                <button @if($offer->status == 'declined' || $offer->status == 'accepted') disabled @endif type="button" wire:click="toggleDecline"
                                    class="btn btn-outline-primary btn-sm px-4 ">
                                    <div class="spinner-border spinner-border-sm text-danger mr-2" role="status" wire:loading.delay wire:target="update">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    Decline
                                </button>
                                <button @if($offer->status == 'declined' || $offer->status == 'accepted') disabled @endif type="button" wire:click="toggleAccept"
                                    class="btn btn-outline-success btn-sm px-4 ">
                                    <div class="spinner-border spinner-border-sm text-success mr-2" role="status" wire:loading.delay wire:target="update">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    Accept
                                </button>
                            </div>
                        </div>
                        @if($toggleAccept)
                        <div class="mt-4">
                            <form wire:submit.prevent="offerAccept">
                                <textarea required class="form-control @error('accept_remarks') is-invalid @enderror" cols="4" rows="4" placeholder="Remarks....." wire:model="accept_remarks"></textarea>
                                @error('accept_remarks')
                                <span class="invalid-feedback">{{ $errors->first('accept_remarks')
                                                    }}</span>
                                @enderror<br>
                                <button type="submit" class="btn btn-outline-success btn-sm px-4 float-right   ">
                                    <div class="spinner-border spinner-border-sm text-success mr-2" role="status" wire:loading.delay wire:target="update">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    Continue
                                </button>
                            </form>
                        </div>
                        @endif

                        @if($toggleDecline)
                        <div class="mt-4">
                            <form wire:submit.prevent="offerDecline">
                                <textarea required class="form-control  @error('decline_remarks') is-invalid @enderror" cols="4" rows="4" placeholder="Remarks....." wire:model="decline_remarks"></textarea>
                                @error('decline_remarks')
                                <span class="invalid-feedback float-right">{{
                                                    $errors->first('decline_remarks')
                                                    }}</span>
                                @enderror
                                <br>
                                <input type="text" class="form-control" wire:model="ask_amount" placeholder="Ask amount" />
                                <br>
                                <button type="submit" class="btn btn-outline-success btn-sm px-4 float-right">
                                    <div class="spinner-border spinner-border-sm text-success mr-2" role="status" wire:loading.delay wire:target="update">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    Continue
                                </button>
                            </form>
                        </div>
                        @endif
                    </div>
</div>
