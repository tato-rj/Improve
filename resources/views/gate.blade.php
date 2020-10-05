<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

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
        </style>
    </head>
    <body>
    	<main class="container h-100vh">
    		<div class="row h-100 align-items-center">
    			<div class="col-lg-4 col-md-6 col-8 mx-auto text-center">
    				<form method="POST" action="{{route('gate')}}">
    					@csrf
    					<img src="{{asset('images/brand/logo-nosub.svg')}}" style="width: 120px" class="mb-4">
    					<input type="password" name="pass" class="form-control mb-3 rounded-0" placeholder="Password here">
    					<button type="submit" class="btn btn-primary btn-block">Submit</button>
    				</form>
    			</div>
    		</div>
    	</main>
    </body>
</html>
