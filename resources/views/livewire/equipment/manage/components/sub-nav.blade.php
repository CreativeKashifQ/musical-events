<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="text-center">
            <h2 class="text-primary">{{$equipment->name}}</h2>
            <p>Manage your equipment and other settings.</p>
        </div>
        {{-- Equipment provider sub-nav --}}
        <div class="sub-nav">
            <div class="my-2">
                <!--Subnav For Large Screens-->
                <div class="d-none d-lg-block">
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-material  mb-2" role="tablist">

                            <li class="nav-item">
                                <a id="nav-equipment-1" class="nav-link " href="{{ route('equipment.manage.entity',[$equipment]) }}">Details</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-equipment-2" class="nav-link" href="{{ route('equipment.manage.gallery',[$equipment]) }}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-equipment-3" class="nav-link" href="{{ route('equipment.manage.schedule', [$equipment]) }}">Schedule</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-equipment-4" class="nav-link" href="{{ route('equipment.manage.pricing', [$equipment]) }}">Pricing</a>
                            </li>
                            <li>
                                <a id="nav-equipment-5" class="nav-link" href="{{ route('equipment.manage.maintainence', [$equipment]) }}">Maintenance</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-equipment-6" class="nav-link" href="{{ route('equipment.manage.settings', [$equipment]) }}">Settings</a>
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

        </div>

    </div>
</div>