<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <div class="sidebar">
        <ul class="sidebar-menu">
            @include('partials.shared.side-bar-logo')
            <li><a class="ajaxifyPage active" href="{{route('/')}}" >
                    <i class="icon icon-home-1 s-24"></i> <span>Home</span>
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