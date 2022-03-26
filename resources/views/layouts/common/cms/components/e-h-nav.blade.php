<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <div class="sidebar">
        <ul class="sidebar-menu">
            @include('partials.shared.side-bar-logo')
            <li><a class="ajaxifyPage " href="{{ route('dashboard.manage.dashboard') }}">
                    <i class="icon icon-home-1 s-24"></i> <span>Home</span>
                </a>
            </li>

            <li><a class="ajaxifyPage " href="{{route('ehost.manage.book-service',['service'=>'venue'])}}">
                    <i class="icon icon-list-ul s-24"></i> <span>Book Services</span>
                </a>
            </li>

            <li><a class="ajaxifyPage " href="{{route('my-offer.manage.sent-offer')}}">
                    <i class="icon icon-send s-24"></i> <span>My Offers</span>
                </a>
            </li>
            <li><a class="ajaxifyPage " href="{{route('my-booking.manage.my-booking-cards')}}">
                    <i class="icon icon-list-ul s-24"></i> <span>My Bookings</span>
                </a>
            </li>
            <!-- <li><a class="ajaxifyPage " href="#">
                    <i class="icon icon-building-o s-24"></i> <span>Host Event</span>
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
