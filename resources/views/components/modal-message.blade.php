<div>
    @if($show)
    <div class="container">
        <div class="text-center s-14 l-s-2 mt-5">
            <a class="" href="#">
                <h1 class="mb-2 text-primary text-uppercase font-weight-bolder">Logo</h1>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 ">
                <div class="mt-5 p-4">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col card p-5">
                            @include('partials.shared.alert')
                            <span class="text-center"> <i
                                    class="{{$icon}} {{$textColor}} s-64 font-weight-bolder"></i></span>
                            <form class="form-material" action="#">
                                <!-- Input -->
                                <div class="body text-center mt-5">
                                    <h2 class="mb-2">{{$title}}</h2>
                                    <span>{{$message}}</span>

                                    <div class="text-center pt-4">
                                        <div class="d-flex justify-content-between">
                                            @if($type == 'VerifyEmail')
                                            <small><button type="button" class=" btn btn-outline  btn-sm ml-3 text-muted"  wire:click="{{$backUrl}}" style="text-decoration: underline;">{{$backurlText}}</button></small>
                                            <small><button type="button"  class="btn btn-outline text-primary btn-sm " onclick="@this.set('toggleModal',false)" style="text-decoration: underline; ">{{$nexturlText}}</button></small>
                                            @endif
                                            @if($type=='ForgorPassword')
                                            <small><a href="{{$nextUrl}}"   class="btn btn-outline text-primary btn-sm "  style="text-decoration: underline; ">{{$nexturlText}}</a></small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- #END# Input -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    {{$slot}}
    @endif

</div>
