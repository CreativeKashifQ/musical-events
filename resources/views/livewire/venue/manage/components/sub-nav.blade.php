<div class="my-2">
      <!--Subnav For Large Screens-->
      <div class="d-none d-lg-block">
        <div class="d-flex justify-content-center">
            <ul class="nav nav-material  mb-2" role="tablist">

                <li class="nav-item" >
                    <a  id="nav-venue-entity" class="nav-link "
                       href="{{ route('venue.manage.entity',[$venue]) }}">Details</a>
                </li>
                <li class="nav-item">
                    <a  id="nav-venue-gallery" class="nav-link" href="{{ route('venue.manage.gallery',[$venue]) }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a  id="nav-venue-feature" class="nav-link" href="{{ route('venue.manage.feature',[$venue]) }}">Feature</a>
                </li>
                <li class="nav-item">
                    <a id="nav-venue-schedule" class="nav-link" href="{{ route('venue.manage.schedule', [$venue]) }}">Schedule</a>
                </li>
                <li class="nav-item">
                    <a id="nav-venue-pricing" class="nav-link" href="{{ route('venue.manage.pricing', [$venue]) }}">Pricing</a>
                </li>
                <li>
                    <a id="nav-venue-maintenance" class="nav-link" href="{{ route('venue.manage.maintenance', [$venue]) }}">Maintenance</a>
                </li>
                <li class="nav-item">
                    <a id="nav-venue-settings" class="nav-link" href="{{ route('venue.manage.setting', [$venue]) }}">Settings</a>
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
