<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <div class="sidebar">
        <ul class="sidebar-menu">
            <div class="d-flex justify-content-center" style="margin-top:-30px;">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid rouded-circle"
                    style="width:60px; height:60px;" />
            </div>
            <li><a class="ajaxifyPage active" href="#" >
                    <i class="icon icon-home-1 s-24"></i> <span>Home</span>
                </a>
            </li>

            <li><a class="ajaxifyPage active" href="{{ route('equipment.manage.index') }}" >
                <i class="icon icon-user s-24"></i> <span>Equipments</span>
            </a>
            </li>

            <li><a class="ajaxifyPage active" href="#" >
                <i class="icon icon-tags s-24"></i> <span>Offers</span>
            </a>
            </li>

            <li><a class="ajaxifyPage active" href="#" >
                <i class="icon icon-calendar-3 s-24"></i> <span>Bookings</span>
            </a>
            </li>

            <li><a class="ajaxifyPage active" href="#" >
                <i class="icon icon-price-tag s-24"></i> <span>Payment Setup</span>
            </a>
            </li>
    </li>





            <li><a class="ajaxifyPage">
                    <i class="icon icon-login s-24"></i><span>@livewire('account.manage.components.logout')</span>
                </a>
            </li>
        </ul>

    </div>
</aside>
