<div class="my-2">
    <!--Subnav For Large Screens-->
    <div class="d-none d-lg-block">
        <div class="d-flex justify-content-center">
            <ul class="nav nav-material  mb-2" role="tablist">
                <li class="nav-item">
                    <a  class="nav-link font-weight-bold @if($service == 'venue') active @endif " href="{{route('my-offer.manage.sent-offer',['service'=>'venue'])}}">Venue</a>
                </li>
                <li class="nav-item">
                    <a id="nav-venue-2" class="nav-link font-weight-bold  @if($service == 'm-artist') active @endif" href="{{route('my-offer.manage.sent-offer',['service'=>'m-artist'])}}" >Musical Artists</a>
                </li>
                <li class="nav-item">
                    <a id="nav-venue-3" class="nav-link font-weight-bold @if($service == 'f-supplier') active @endif " href="{{route('my-offer.manage.sent-offer',['service'=>'f-supplier'])}}" >Food Supliers</a>
                </li>
                <li class="nav-item">
                    <a id="nav-venue-4" class="nav-link font-weight-bold @if($service == 'equipment') active @endif " href="{{route('my-offer.manage.sent-offer',['service'=>'equipment'])}}" >Equipments</a>
                </li>
                <li class="nav-item">
                    <a id="nav-venue-4" class="nav-link font-weight-bold @if($service == 'promoters') active @endif " href="{{route('my-offer.manage.sent-offer',['service'=>'promoters'])}}" >Promoters</a>
                </li>
                <li class="nav-item">
                    <a id="nav-venue-4" class="nav-link font-weight-bold @if($service == 'sponsers') active @endif " href="{{route('my-offer.manage.sent-offer',['service'=>'sponsers'])}}" >Sponsers</a>
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
