<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')
        @include('bootstrap')
        @yield('scripts')
        
        <style>
            html,
            body {
                height: 100%;
            }

            .capitalize {
                text-transform: capitalize;
            }
        </style>
    </head>
    <body>
	    @yield('content')
    </body>
</html>