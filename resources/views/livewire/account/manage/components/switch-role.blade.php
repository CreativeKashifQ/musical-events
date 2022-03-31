<div>

    <style type="text/css">
        select  {
        font-size: 14px!important;
        text-indent: 3%;
       }

       select option {
       color:var(--primary)!important;
       text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
       background-color: var(--dark)!important ;
        }

    </style>
    
    <div class="d-flex justify-content-end">
        <div class="form-material ">
            <div class="form-group form-float">
                <div class="form-line dropdown">
                <!-- <a class="nav-link font-weight-bold dropbtn " href="javascript:void(0)">Switch Account <i class="icon-caret-down pl-2"></i> </a>
                    <div class="dropdown-content">
                        <a class="nav-link font-weight-bold text-muted  " href="">Pop</a>
                        <a class="nav-link font-weight-bold text-muted  " href="">Rap</a>
                        <a class="nav-link font-weight-bold text-muted  " href="">Classical</a>

                    </div> -->
                   <select class="form-control" wire:model="selectedRole" >
                       
                    <option   class="text-muted" value="">Switch Account</option>
                    @if(auth()->user()->roles->count() > 1)
                    <option  value="AllRoles">All Roles</option>
                    @endif
                    @forelse (auth()->user()->roles as $role)
                    <option value="{{$role->id}}" >{{$role->description}}</option>
                    @empty
                    <option >Cannot Switch Account</option>
                    @endforelse

                   </select>

                </div>
            </div>
        </div>
    </div>
</div>
