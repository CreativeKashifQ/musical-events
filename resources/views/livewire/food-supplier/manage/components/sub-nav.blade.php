<div class="my-2">
      <!--Subnav For Large Screens-->
      <div class="d-none d-lg-block">
        <div class="d-flex justify-content-center">
            <ul class="nav nav-material  mb-2" role="tablist">

                <li class="nav-item" >
                    <a  id="supplier-profile" class="nav-link "
                       href="{{route('food-supplier.manage.entity',['supplier' => $supplier])}}">Details</a>
                       
                </li>
                <li class="nav-item">
                    <a  id="supplier-menues-gallery" class="nav-link" href="{{route('food-supplier.manage.menu',['supplier' => $supplier])}}">Menu Gallery</a>
                </li>
                <li class="nav-item">
                    <a id="supplier-schedule" class="nav-link" href="{{route('food-supplier.manage.schedule',['supplier' => $supplier])}}">Schedule</a>
                </li>

                <li class="nav-item">
                    <a id="supplier-settings" class="nav-link" href="{{route('food-supplier.manage.settings',['supplier' => $supplier])}}">Settings</a>
                </li>
                
                </li>
            </ul>
        </div>
        </div>
        {{-- Subnav For Mobile Screens --}}
        <div class="d-block d-lg-none">
            <div class="d-flex justify-content-center">
                <ul class="nav nav-material  mb-3" role="tablist">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Details">
                        <a class="nav-link active show" href="#">
                            <i class="icon-equal-2"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Gallery">
                        <a class="nav-link" href="#">
                            <i class="icon-picture"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Schedule">
                        <a class="nav-link" href="#">
                            <i class="icon-calendar-3"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Pricing">
                        <a class="nav-link" href="#">
                            <i class="icon-price-tag"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Maintainence">
                        <a class="nav-link" href="#">
                            <i class="icon-settings-9"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Settings">
                        <a class="nav-link" href="#">
                            <i class="icon-settings-2"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>
