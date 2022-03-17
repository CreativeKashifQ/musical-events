
    <div>
        <div wire:loading.delay.long class="progress-bar position-absolute w-100" style="z-index: 1001">
            <div class="progress-bar-value"></div>
        </div>
        <div wire:loading.delay.long class="position-absolute h-100 w-100 bg-dark" style="z-index:1000;opacity:0.6"></div>

        <div id="rekord-app">
            @auth
            @include('layouts.common.cms.aside-nav')
            @endauth

            <main class="page has-sidebar">
                <div class="container-fluid relative">
                    <div class="px-3">
                        <div class="wrapper">
                            {{$slot}}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


