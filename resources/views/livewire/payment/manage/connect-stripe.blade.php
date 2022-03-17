<x-cms-root>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12 ">
                <h2 class="text-primary">Payment Setup</h2>
                <div class="pb-3">
                    <h5>Connect with Stripe</h5>
                    <p>We use stripe to transfer your client payments to you because it is secure, safe and regulation-compliant. Similar to Paypal, Stripe is one of the world’s leading card
                        payment providers, trusted by over 100,000+ businesses in 100+ countries.<br><br>
                        Your customer’s booking fees will be taken online Stripe. This means that you do not need to manage invoicing or chasing late payments.
                    </p>
                </div>
                @if(!auth()->user()->stripe_account && !auth()->user()->fix)
                <div>
                    <button type="button" wire:click="connectStripe" class="btn btn-outline-primary btn-sm  ">
                        <div class="spinner-border spinner-border-sm text-light mr-1" role="status"
                            wire:loading wire:target="connectStripe">
                            <span class="sr-only">Loading...</span>
                        </div>
                       <i class="icon icon-cc-stripe"></i><span class="font-weight-bold ">Connect With Stripe</span>
                    </button>
                </div>
                @else
                <div>

                       <img style="width:40px;height:40px" src="https://upload.wikimedia.org/wikipedia/commons/c/c6/Sign-check-icon.png"><span class="font-weight-bold pl-2  " style="font-size: 16px;">Stripe Account Connected</span>

                </div>
                @endif
                <div class="mt-5">
                    <h2 class="text-primary">FAQ's</h2>
                    <div class="panel-group" id="accordion">
                        <div class="card px-3 pt-3 pb-2 mb-1" style="border-left: 5px solid lightgray">
                            <p class="m-0 pb-1">
                                <a class="text-decoration-none text-primary" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse1">When will I be paid?</a>
                            </p>
                            <div id="collapse1" class="collapse">
                                <p>When a client pays for their session with you, the balance of the fee paid is transferred to your
                                    Stripe account at least 48 hours beforehand
                                    automatically, minus Psychologists Onine commission. Stripe then transfer these funds to your
                                    bank account once they have cleared. Cleared funds
                                    normally reach your bank account 7 days after the client payment is made.</p>
                            </div>
                        </div>
                        <div class="card px-3 pt-3 pb-2 mb-1" style="border-left: 5px solid lightgray">
                            <p class="m-0 pb-1"><a class="text-decoration-none text-primary" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapse2">Why do Stripe ask me to
                                    authorise the ability to take payments from my account?</a></p>
                            <div id="collapse2" class="collapse">
                                <p>To allow for a situation where a client session is cancelled and they are due a refund, Stripe
                                    need to be able to process this refund by withdrawing
                                    the client's funds back to their account. This is the only time this would occur. Stripe need to
                                    confirm that, in this event, your account is set up
                                    to manage this.</p>
                            </div>
                        </div>
                        <div class="card px-3 pt-3 pb-2 mb-5" style="border-left: 5px solid lightgray">
                            <p class="m-0 pb-1"><a class="text-decoration-none text-primary" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapse3">What do I get paid?</a></p>
                            <div id="collapse3" class="collapse">
                                <p>Psychologists Onine commission is applied to each successful client referral. You receive the
                                    amount paid by your client net the Psychologists Onine
                                    commission due on the payment.</p>
                            </div>
                        </div>
                   </div>
                </div>
            </div>

        </div>
        <div>


        </div>

        <livewire:dev.comment align="left" component="Payment Setup" />
    </div>

</x-cms-root>
