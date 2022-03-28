<x-cms-root>
    <div class="wrapper">
        @livewire('equipment.manage.components.sub-nav', ['equipment' => $equipment], key($equipment->id))
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card-body">
                    <div class="pb-3">
                        <h5>Update Maintenance Date,Time</h5>
                        <p>You can add maintenance data and time for venues , Manage your Venue features and publish
                            settings</p>
                    </div>
                    <form wire:submit.prevent="update" wire:loading.attr="disabled" wire:target="update">

                        <div class="form-material form-row">
                            <div class="form-group col-md-12">
                                @php
                                    $minDate = now()->format('Y-m-d')
                                @endphp
                                <div class="form-line">
                                    <label>Maintenance Date</label>
                                    <input type="date" min="{{$minDate}}"
                                        class="form-control @error('e_under_maintenance.date') is-invalid @enderror "
                                        wire:model.defer="e_under_maintenance.date" placeholder="10/11/2022">
                                    @error('e_under_maintenance.date')
                                    <span class="invalid-feedback">{{ $errors->first('e_under_maintenance.date')
                                        }}</span>
                                    @enderror
                                </div>
                            </div>

                        
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-outline-primary btn-sm px-4   ">
                                <div class="spinner-border spinner-border-sm text-danger mr-2" role="status"
                                    wire:loading.delay wire:target="update">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                Add
                            </button>
                        </div>
                    </form>

                    <div class="mt-3">
                        @if(!$equipment->under_maintenances->count() > 0)
                        <div class="pb-3">
                            <h5>Under Manintence Slots</h5>
                            <p>If your Equipment required no manintence,  No need to add any date, just click on next</p>
                        </div>
                        @endif
                        <div class="under_maintenance_section">
                            @forelse ($under_maintenances as $under_maintenance )

                            <div class='card mb-2'>
                                <div class="d-flex justify-content-between p-3">
                                    <strong>{{Carbon\Carbon::parse($under_maintenance->date)->format('d, M Y')}}</strong>
                                    <div>
                                        <strong><a wire:click="remove({{$under_maintenance->id}})"><i
                                                    class="icon icon-trash-o"></i></a></strong>
                                    </div>
                                </div>
                            </div>
                            @empty
                          
                            @endforelse
                        </div>

                        <div class="d-flex justify-content-between my-5">
                            <a href="{{ route('equipment.manage.pricing', [$equipment]) }}"
                                class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                Back
                            </a>

                            <a href="{{ route('equipment.manage.settings', [$equipment]) }}"
                                class="btn btn-outline-secondary btn-sm ml-1 px-4  ">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <livewire:dev.comment align="left" component="Equipment Maintenance" />
            </div>
        </div>

        <script>
            document.getElementById('nav-equipment-5').classList.add('active');
        </script>

    </div>

</x-cms-root>
