<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <div class="sidebar">
        <ul class="sidebar-menu">
            @include('partials.shared.side-bar-logo')
            <li><a class=" active" href="#" >
                    <i class="icon icon-home-1 s-24"></i> <span>Home</span>
                </a>
            </li>

            <li><a class=" active" href="#" >
                <i class="icon icon-user s-24"></i> <span>Super Admin</span>
            </a>
        </li>

            <li><a class="">
                    <i class="icon icon-login s-24"></i><span>@livewire('account.manage.components.logout')</span>
                </a>
            </li>
        </ul>

    </div>
</aside>
