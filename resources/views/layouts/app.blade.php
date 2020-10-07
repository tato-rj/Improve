<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('16x16.png')}}">
        <link rel="manifest" href="{{asset('manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">

        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/primer.css') }}" rel="stylesheet">
        
        <style type="text/css">
        body {
            font-size: 120%;
        }

        *:focus {
            outline: none;
        }

        h1 {
            font-size: 2.85rem;
        }

        button:focus {outline:0;}

        .product:hover {
            transform: scale(1.02);
        }

        .navbar-nav {
            text-transform: uppercase;
            font-weight: 700;
        }

        .navbar-nav a {
            color: black !important;
        }

        .font-primary {
            font-family: 'Josefin Sans', sans-serif;
            padding-top: 12px;       
        }

        ul {
            padding: 0;
            list-style: none;
        }

        .link-none {
            color: inherit;
        }

        .link-none:hover {
            text-decoration: none;
            color: inherit;
        }

        .mb-6 {
            margin-bottom: 5rem !important;
        }

        .mb-7 {
            margin-bottom: 8rem !important;
        }

        .p-6 {
            padding: 5rem !important;
        }

        .py-6 {
            padding-top: 5rem !important;
            padding-bottom: 5rem !important;
        }

        .bg-primary {
            background-color: #ed1c24 !important;
        }

        .text-primary {
            color: #ed1c24 !important;
        }

        .link-primary {
            text-decoration: none !important;
            color: #ed1c24 !important;
        }

        .link-primary i {
            vertical-align: middle;
            transition: .1s;
        }

        .link-primary:hover i {
            transform: translateX(5px);
        }

        .link-primary:hover {
            color: #ed1c24 !important;
        }

        .accent-bottom::after {
            content: '';
            display: block;
            background-color: #ed1c24;
            width: 100px;
            border-radius: 2px;
            height: 7px;
            margin-top: 1.5rem;
        }

        .navbar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            -webkit-animation-duration: .2s;
            animation-duration: .2s;
        }

        .navbar-fixed .navbar-brand img {
            width: 72px !important;
            margin-left: 12px;
        }

/* Icon 1 */

.animated-icon1, .animated-icon2, .animated-icon3 {
width: 30px;
height: 20px;
position: relative;
margin: 0px;
-webkit-transform: rotate(0deg);
-moz-transform: rotate(0deg);
-o-transform: rotate(0deg);
transform: rotate(0deg);
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
cursor: pointer;
}

.animated-icon1 span, .animated-icon2 span, .animated-icon3 span {
display: block;
position: absolute;
height: 3px;
width: 100%;
border-radius: 9px;
opacity: 1;
left: 0;
-webkit-transform: rotate(0deg);
-moz-transform: rotate(0deg);
-o-transform: rotate(0deg);
transform: rotate(0deg);
-webkit-transition: .25s ease-in-out;
-moz-transition: .25s ease-in-out;
-o-transition: .25s ease-in-out;
transition: .25s ease-in-out;
}

.animated-icon2 span {
background: black;
}

.animated-icon2 span:nth-child(1) {
top: 0px;
}

.animated-icon2 span:nth-child(2), .animated-icon2 span:nth-child(3) {
top: 10px;
}

.animated-icon2 span:nth-child(4) {
top: 20px;
}

.animated-icon2.open span:nth-child(1) {
top: 11px;
width: 0%;
left: 50%;
}

.animated-icon2.open span:nth-child(2) {
-webkit-transform: rotate(45deg);
-moz-transform: rotate(45deg);
-o-transform: rotate(45deg);
transform: rotate(45deg);
}

.animated-icon2.open span:nth-child(3) {
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
transform: rotate(-45deg);
}

.animated-icon2.open span:nth-child(4) {
top: 11px;
width: 0%;
left: 50%;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 12%, 0);
    transform: translate3d(0, 12%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 12%, 0);
    transform: translate3d(0, 12%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
        </style>
        @stack('header')
    </head>
    <body>
        @include('layouts.menu')
        @yield('content')

        <footer class="container">
            <div class="row border-top py-4">
                <div class="col-12 text-muted text-center">
                    © {{config('app.name')}} 2020
                </div>
            </div>
        </footer>

        <script src="{{ mix('js/app.js') }}"></script>
        <script type="text/javascript">
            var headH = $('#lead-bg').offset().top + $('#lead-bg').height();
            var $menu = $('nav.navbar')
                            .clone()
                            .hide()
                            .appendTo('body')
                            .addClass('navbar-fixed shadow-sm py-2 animate__fadeInDown')
                            .removeClass('py-4');
            $('nav.navbar-fixed .navbar-brand img').attr('src', $('nav.navbar-fixed .navbar-brand img').data('mobile'));

            $(window).scroll(function() {
                let scrollTop = $(this).scrollTop();
                
                if (scrollTop > headH) {
                    $menu.show();
                } else {
                    $menu.hide();
                }
            });

            $(document).ready(function() {
  $('button.navbar-toggler').on('click', function () {

    $('.animated-icon2').toggleClass('open');
  });
            });
        </script>
        @stack('scripts')
    </body>
</html>
