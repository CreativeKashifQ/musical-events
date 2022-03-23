<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>DL Musical Event</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('cms-assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('cms-assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/toasetrnotifications/css/toaster.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/event-calendar/css/mobiscroll.javascript.min.css') }}">
    @livewireStyles




    <style>
        .progress-bar {
            height: 4px;
            background-color: rgba(206, 12, 5, 0.842);
            width: 100%;
            overflow: hidden;
        }

        .progress-bar-value {
            width: 100%;
            height: 100%;
            background-color: rgb(48, 0, 0);
            animation: indeterminateAnimation 1s infinite linear;
            transform-origin: 0% 50%;
        }

        @keyframes indeterminateAnimation {
            0% {
                transform: translateX(0) scaleX(0);
            }

            40% {
                transform: translateX(0) scaleX(0.4);
            }

            100% {
                transform: translateX(100%) scaleX(0.5);
            }

        }

        
    </style>



</head>


<body class="theme-dark sidebar-mini sidebar-collapse   sidebar-expanded-on-hover">

    {{$slot}}

</body>
    <script src="{{ asset('cms-assets/js/app.js') }}"></script>
    <script src="{{ asset('plugins/event-calendar/js/mobiscroll.javascript.min.js') }}"></script>
    <script src="{{ asset('plugins/toasetrnotifications/js/toastr.min.js') }}"></script>
    <script src="{{ asset('plugins/toasetrnotifications/js/custom.js') }}"></script>
    {{-- <script src="{{ asset('custom/js/app.js') }}"></script> --}}
    @livewireScripts


    {{-- event-calendar custom script --}}
    <script>
        mobiscroll.setOptions({
            theme: 'material',
            locale: mobiscroll.localeEn
        });

        var inst = mobiscroll.eventcalendar('#demo-events-labels', {
            locale: mobiscroll.localeEn,            // Specify language like: locale: mobiscroll.localePl or omit setting to use default
            theme: 'material',                           // Specify theme like: theme: 'ios' or omit setting to use default
            themeVariant: 'dark',                  // More info about themeVariant: https://docs.mobiscroll.com/5-12-1/javascript/eventcalendar#opt-themeVariant
            view: {                                 // More info about view: https://docs.mobiscroll.com/5-12-1/javascript/eventcalendar#opt-view
                calendar: {
                    labels: true                    // More info about labels: https://docs.mobiscroll.com/5-12-1/javascript/eventcalendar#opt-labels
                }
            },
            onEventClick: function (event, inst) {  // More info about onEventClick: https://docs.mobiscroll.com/5-12-1/javascript/eventcalendar#event-onEventClick
                mobiscroll.toast({
                    message: event.event.title
                });
            }
        });

        mobiscroll.util.http.getJson('https://trial.mobiscroll.com/events/?vers=5', function (events) {
            inst.setEvents(events);
        }, 'jsonp');
    </script>



</html>
