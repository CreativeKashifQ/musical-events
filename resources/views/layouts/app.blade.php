<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rave/Musical Events</title>

    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="app-assets/img/fav-icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="app-assets/img/fav-icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="app-assets/img/fav-icons/favicon-16x16.png">
    <meta name="theme-color" content="#e43a90">

    <!-- Dependency Styles -->

    <link rel="stylesheet" href="{{ asset('app-assets/dependencies/bootstrap/css/bootstrap.min.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('app-assets/dependencies/intro/css/stylesheet.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app-assets/dependencies/swiper/swiper.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app-assets/dependencies/font-awesome/css/font-awesome.min.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('app-assets/dependencies/wow/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app-assets/dependencies/magnific-popup/magnific-popup.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('app-assets/dependencies/jquery-ui/css/jquery-ui.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app-assets/dependencies/slick-carousel/css/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app-assets/dependencies/colornip/css/colornip.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app-assets/dependencies/css-loader/css/css-loader.css') }}" type="text/css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('app-assets/css/woocommerce.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app-assets/css/app.css') }}" type="text/css">
    <link id="theme" rel="stylesheet" href="{{ asset('app-assets/css/theme-color/theme-color-2.css') }}"
        type="text/css">
    @livewireStyles()



</head>

<body id="home-version-1" class="home-version-1" data-style="default">

    {{$slot}}

    <!-- /#site -->
    <!-- Dependency Scripts -->
    <script src="{{ asset('app-assets/dependencies/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/swiperRunner/swiperRunner.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/wow/js/wow.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/jquery.countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/jquery.spinner/js/jquery.spinner.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/masonry-layout/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/slick-carousel/js/slick.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/headroom.js') }}"></script>
    <script src="{{ asset('app-assets/js/soundmanager2.js') }}"></script>
    <script src="{{ asset('app-assets/js/mp3-player-button.js') }}"></script>
    <script src="{{ asset('app-assets/js/smoke.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/FitText.js/js/jquery.fittext.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/gmap3/js/gmap3.min.js') }}"></script>
    <script src='{{ asset(' http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js') }}'></script>
    <script src='{{ asset(' app-assets/dependencies/tilt.js/js/tilt.jquery.js') }}'></script>
    <script src='{{ asset(' app-assets/js/parallax.min.js') }}'></script>
    <!-- Player -->
    <script src="{{ asset('app-assets/dependencies/jPlayer/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('app-assets/dependencies/jPlayer/js/jplayer.playlist.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/myplaylist.js') }}"></script>

    <!-- Remove It -->
    <script src="{{ asset('app-assets/dependencies/colornip/colornip.min.js') }}"></script>

    <!--Google map api -->
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc') }}">
    </script>

    <!-- Site Scripts -->
    <script src="{{ asset('app-assets/js/app.js') }}"></script>
    {{-- turbo links in custom js folder with driver --}}
    <script src="{{ asset('custom/js/app.js') }}" data-turbolinks-eval="false"></script>
    @livewireScripts()
    <script>
        window.onload = function(){
            window.livewire.on('hideModal',function(closeTrigger){
                document.getElementById(closeTrigger).click();
            });
        }
    </script>


</body>

</html>
