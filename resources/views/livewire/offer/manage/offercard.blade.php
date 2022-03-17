
    <x-cms-root>
        <div class="wrapper">

            <div class="row">
                <div class="col-lg-8 ">
                    <h2 class="text-primary"> {{ucfirst($offer->service_type)}} Offer Detail</h2>
                    <div>
                        <h5>Active {{ucfirst($offer->service_type)}} Offer Detail</h5>
                        <p>Track your Active s {{ucfirst($offer->service_type)}} Offer Detail, Accept or Decline Offer By Accept or
                            Decline Button</p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex justify-content-start">
                            <ul class="nav nav-material ">
                                <li class="nav-item">
                                    <a class="nav-link active text-success " href="{{route('offer.manage.index')}}">Go
                                        Back</a>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <div class="card no-b shadow no-r">
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-md-4 b-r">
                                    <div class="text-center p-5 mt-5">
                                        <figure class="avatar avatar-xl">
                                            <img src="{{ asset($gallery->image) }}" alt="">
                                        </figure>
                                        <div>
                                            <h4 class="p-t-10">{{$offer->service['name']}}</h4>
                                        </div>

                                        <div class="mt-5">
                                            <div class="d-flex justify-content-between">
                                                <button type="button" wire:click="toggleDecline"
                                                    class="btn btn-outline-primary btn-sm px-4   ">
                                                    <div class="spinner-border spinner-border-sm text-danger mr-2"
                                                        role="status" wire:loading.delay wire:target="update">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                    Decline
                                                </button>
                                                <button type="button" wire:click="toggleAccept"
                                                    class="btn btn-outline-success btn-sm px-4   ">
                                                    <div class="spinner-border spinner-border-sm text-success mr-2"
                                                        role="status" wire:loading.delay wire:target="update">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                    Accept
                                                </button>
                                            </div>
                                        </div>
                                        @if($toggleAccept)
                                        <div class="mt-4">
                                            <form wire:submit.prevent="offerAccept">
                                                <textarea required
                                                    class="form-control @error('accept_comment') is-invalid @enderror"
                                                    cols="4" rows="4" placeholder="accept_comment"
                                                    wire:model="accept_comment"></textarea>
                                                @error('accept_comment')
                                                <span class="invalid-feedback">{{ $errors->first('accept_comment')
                                                    }}</span>
                                                @enderror<br>
                                                <button type="submit"
                                                    class="btn btn-outline-success btn-sm px-4 float-right   ">
                                                    <div class="spinner-border spinner-border-sm text-success mr-2"
                                                        role="status" wire:loading.delay wire:target="update">
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
                                                <textarea required
                                                    class="form-control  @error('decline_comment') is-invalid @enderror"
                                                    cols="4" rows="4" placeholder="Commnet"
                                                    wire:model="decline_comment"></textarea>
                                                @error('decline_comment')
                                                <span class="invalid-feedback float-right">{{
                                                    $errors->first('decline_comment')
                                                    }}</span>
                                                @enderror
                                                <br>
                                                <input type="text" class="form-control" wire:model="ask_amount"
                                                    placeholder="Ask amount" />
                                                <br>
                                                <button type="submit"
                                                    class="btn btn-outline-success btn-sm px-4 float-right">
                                                    <div class="spinner-border spinner-border-sm text-success mr-2"
                                                        role="status" wire:loading.delay wire:target="update">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                    Continue
                                                </button>
                                            </form>
                                        </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-md-8">
                                    @php
                                    $view = "offer.manage.components." . strtolower($offer->service_type) ."-offer-detail";
                                    @endphp
                                    @livewire($view,['offer' => $offer])
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <br>
            <livewire:dev.comment align="left" component="OfferDetail" />
        </div>


    </x-cms-root>



