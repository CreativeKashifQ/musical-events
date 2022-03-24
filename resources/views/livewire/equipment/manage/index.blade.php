<x-cms-root>

        <div class="row">
            <div class="col-lg-6 ">
                <h2 class="text-primary">Equipments Provider</h2>
                <div class="pb-3">
                    <h5>Equipment Details</h5>
                    <p>You can track equipment details here. Check the status of equipments.</p>
                </div>
            </div>
            <div class="col-lg-6">
               <div class="row">
                <div class="col-lg-2 col-md-2 col-2">
                    <style type="text/css">
                        select  {
                        font-size: 14px!important;
                        text-indent: 3%;
                       }

                       select option {
                       color:var(--primary)!important;
                       text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                        }

                    </style>
                    <div class="form-material pt-5 pb-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                               <select class="form-control" wire:model="orderBy">
                                <option disabled selected class="text-muted">__ORDER BY__</option>
                                <option value="asc">Asc</option>
                                <option value="desc" >Desc</option>
                               </select>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-2">

                    <div class="form-material pt-5 pb-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                               <select class="form-control" wire:model="searchBy">
                                <option disabled selected class="text-muted">__SEARCH BY__</option>
                                <option value="name">Name</option>
                                <option value="location" >Location</option>
                                <option value="color">Color</option>
                                <option value="hourly_rate">Rate</option>

                               </select>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-8">
                    <div class="form-material pt-5 pb-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" autocomplete="off" class="form-control" wire:model="search"
                                    placeholder="Search by select type">

                            </div>
                        </div>
                    </div>
                </div>
               </div>

            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">

                <div class="d-flex justify-content-between">
                    <div class="d-flex justify-content-start">
                    <ul class="nav nav-material ">
                        <li class="nav-item">
                            <a class="nav-link {{$toggleActiveOrInActive == 'Active' ? 'active text-success' : ''}} "
                                wire:click="toggleActiveOrInActive('Active')" href="javascript:void(0);">Active</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link {{$toggleActiveOrInActive == 'Inactive' ? 'active text-success' : ''}}"
                                wire:click="toggleActiveOrInActive('Inactive')" href="javascript:void(0);">Inactive <span
                                    class="badge badge-pill badge-danger  s-12 p-1  ">{{$count['Inactive'] != 0 ?
                                    $count['Inactive'] : ''}}</span><span class="sr-only">unread messages</span></a>
                        </li>
                    </ul>
                    </div>
                    <div>
                        <ul class="nav nav-material ">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('equipment.manage.create') }}"> <i
                                        class="icon icon-add pr-2 text-success font-weight-bold"></i>Add Equipment</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive ">
                    <style>
                        table thead tr {
                            color: white !important;
                        }

                        tbody tr {
                            color: #9ca8b0 !important;
                        }
                    </style>
                    <table class="table table-borderless card-body p-5">
                        <thead>
                            <tr class="bg-dark font-weight-bold ">
                                <th>#</th>
                                <th>Equipment Name</th>
                                <th>Location</th>
                                <th>Color</th>
                                <th>Rate/h</th>
                                <th>Quantity</th>
                                <th><span class="d-none d-lg-block">Weight</span></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($equipments as $key => $equipment)
                            <tr>
                                <td>{{ ++$key}}</td>
                                <td>{{$equipment->name}}</td>
                                <td>{{$equipment->location}}</td>
                                <td>{{$equipment->color}}</td>
                                <td>$ {{$equipment->hourly_rate}}</td>
                                <td>{{$equipment->quantity}}</td>
                                <td><span class="d-none d-lg-block">$ {{$equipment->weight}}</span></td>
                                <td><a href="{{route('equipment.manage.entity',[$equipment])}}">Manage</a></td>
                            </tr>
                            @empty
                            <tr class="text-center my-4">
                                <td colspan="7"><strong> Records Not Found !</strong></td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <style>
                    .pagination .page-link {
                        width: 30px !important;
                        height: 30px !important;
                        background-color: #0c101b !important;
                        line-height: 28px !important;
                    }
                    .page-item.disabled .page-link {
                        border-color: rgb(31, 31, 31) !important;
                    }
                </style>
                <div class="s-12">

                </div>
            </div>

        </div>
        <livewire:dev.comment align="left" component="Equipment Index" />
</x-cms-root>
