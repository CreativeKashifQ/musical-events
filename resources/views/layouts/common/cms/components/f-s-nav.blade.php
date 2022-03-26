<aside class="main-sidebar fixed offcanvas shadow" >
    <div class="sidebar">

        <ul class="sidebar-menu">
             @include('partials.shared.side-bar-logo')
            <li><a class="ajaxifyPage active" href="{{ route('dashboard.manage.dashboard') }}">
                    <i class="icon icon-home-1 s-24"></i> <span>Home</span>
                </a>
            </li>
            <li><a class="ajaxifyPage" href="{{ route('food-supplier.manage.user-profile') }}">
                    <i class="icon icon-user s-24"></i> <span>Profile</span>
                </a>
            </li>

            <!-- <li><a class="ajaxifyPage" href="{{ route('offer.manage.index',['service_type' => 'Venue']) }}">
                    <i class="icon icon-incoming s-24"></i> <span>Offers</span>
                </a>
            </li>
            <li><a class="ajaxifyPage" href="{{ route('booking.manage.index') }}">
                    <i class="icon icon-notebook-3 s-24"></i> <span>Booking</span>
                </a>
            </li> -->

            <li><a class="ajaxifyPage" href="{{ route('payment.manage.connect-stripe') }}">
                    <i class="icon icon-bank s-24"></i> <span>Payment Setup</span>
                </a>
            </li>
            <li><a class="ajaxifyPage">
                    <i class="icon icon-login s-24"></i><span>@livewire('account.manage.components.logout')</span>
                </a>
            </li>




        </ul>

    </div>
</aside>
