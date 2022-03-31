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


        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            padding: 4px 0px 4px 0px !important;
            position: absolute;
            background-color: #0C101B;
            min-width: 150px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: #48738B;
            padding-bottom: 1px !important;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            color: var(--primary) !important;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 41px;
            height: 19px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #24292F;
            -webkit-transition: .3s;
            transition: .3s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 14px;
            width: 14px;
            left: 2px;
            top: 2px;
            bottom: 2px;
            right: 2px;
            background-color: #0C101B;
            -webkit-transition: .3s;
            transition: .3s;
        }

        input:checked+.slider {
            background-color: var(--primary);
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #24292F;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(24px);
            -ms-transform: translateX(24px);
            transform: translateX(24px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
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
<!-- {{-- <script src="{{ asset('custom/js/app.js') }}"></script> --}} -->
@livewireScripts


<!-- event-calendar custom script --}} -->
<script>
    mobiscroll.setOptions({
        theme: 'material',
        locale: mobiscroll.localeEn
    });

    var inst = mobiscroll.eventcalendar('#demo-events-labels', {
        locale: mobiscroll.localeEn, // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'material', // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'dark', // More info about themeVariant: https://docs.mobiscroll.com/5-12-1/javascript/eventcalendar#opt-themeVariant
        view: { // More info about view: https://docs.mobiscroll.com/5-12-1/javascript/eventcalendar#opt-view
            calendar: {
                labels: true // More info about labels: https://docs.mobiscroll.com/5-12-1/javascript/eventcalendar#opt-labels
            }
        },
        onEventClick: function(event, inst) { // More info about onEventClick: https://docs.mobiscroll.com/5-12-1/javascript/eventcalendar#event-onEventClick
            mobiscroll.toast({
                message: event.event.title
            });
        }
    });

    mobiscroll.util.http.getJson('https://trial.mobiscroll.com/events/?vers=5', function(events) {
        inst.setEvents(events);
    }, 'jsonp');
</script>



</html>