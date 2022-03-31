<aside class="main-sidebar fixed offcanvas shadow" >
    <div class="sidebar">

        <ul class="sidebar-menu">
             @include('partials.shared.side-bar-logo')
            
            <li><a class="ajaxifyPage {{Route::current()->getName() == 'dashboard.manage.dashboard' ? 'active' : ''}}" href="{{ route('dashboard.manage.dashboard') }}">
                    <i class="icon icon-home-1 s-24"></i> <span>Home</span>
                </a>
            </li>
         
            <li><a class="ajaxifyPage {{Route::current()->getName() == 'food-supplier.manage.user-profile'  ? 'active' : ''}} " href="{{ route('food-supplier.manage.user-profile') }}">
                    <i class="icon icon-user s-24"></i> <span>Manage Profile</span>
                </a>
            </li>
            <li><a class="ajaxifyPage {{Route::current()->getName() == 'food-supplier.manage.menu' ? 'active' : ''}} " href="{{ route('food-supplier.manage.menu',['supplier' => auth()->user()->id]) }}">
                    <i class="icon icon-add s-24"></i> <span>Add Menu Item</span>
                </a>
            </li>
           
              <li><a class="ajaxifyPage {{Route::current()->getName() == 'offer.manage.f-supplier-offers' ? 'active' : ''}}" href="{{ route('offer.manage.f-supplier-offers') }}">
                    <i class="icon icon-incoming s-24 "></i> <span>Offers</span>
                </a>
            </li>
            <li><a class="ajaxifyPage {{Route::current()->getName() == 'booking.manage.f-supplier-bookings' ? 'active' : ''}} " href="{{ route('booking.manage.f-supplier-bookings') }}">
                    <i class="icon icon-notebook-3 s-24"></i> <span>Bookings</span>
                </a>
            </li>

            <li><a class="ajaxifyPage {{Route::current()->getName() == 'payment.manage.connect-stripe' ? 'active' : ''}} " href="{{ route('payment.manage.connect-stripe') }}">
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
