<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Evolve</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Evolve" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.webp') }}">
    @include('user.layouts.head-css')
</head>

@section('body')
    <body >
@show
    <!-- Begin page -->
    <div id="wrapper">
        <header class="header" id="header">
            @include('user.layouts.navigation')
        </header>
        
        @yield('content')
                
        @include('user.layouts.footer')
    </div>     

    <!-- JAVASCRIPT -->
    @include('user.layouts.vendor-scripts')
</body>

</html>
