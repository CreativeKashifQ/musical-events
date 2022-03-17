<x-cms-root>
    <style>
        .hover-tr-holder {
            padding-right: 12px;
        }

        .hoverable {
            border: 2px dashed gray;
            cursor: pointer
        }

        #lg-download {
            display: none !important;
        }
    </style>
            <div class=" relative animatedParent  ">
                <h2 class="text-primary text-capitalize">{{$serviceImages[0]->service_type}} Gallery</h2>
                <a href="{{route('ehost.manage.book-service',['service'=>'venue'])}}" class="text-muted"><i class="icon-arrow-left pr-2"></i><span class="font-weight-bold">Back</span></a>
                <div class="mt-5 animated fadeInUpShort ">
                    <div id="filter-items" class="row masonry-container lightGallery">
                        @forelse ($serviceImages as $serviceImage)
                        <div class="col-md-4  masonry-post " >
                            <figure>
                                <div class="img-wrapper">
                                    <img src="{{asset($serviceImage->image)}}" alt="/" style="width:400px; height:200px;">
                                    <div class="img-overlay figure-caption text-white">
                                        <div class="figcaption d-flex justify-content-around mt-2">
                                            <a href="{{asset($serviceImage->image)}}" class="light-post no-ajaxy">
                                                <i class="icon-zoom-in s-48"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        @empty

                        @endforelse


                    </div>
                </div>
            </div>


</x-cms-root>
