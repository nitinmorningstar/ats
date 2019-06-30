<!DOCTYPE html>
<html>
    <head>
    @include('includes.meta')
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme/plugins/images/favicon.png') }}">
    <title>@yield('title', 'Applicant Tracking System')</title>


    @include('includes.css')
    @yield('css')
    </head>
    <body>
        
        <div class="wrapper">
            @include('includes.header')
            <div class="navbar-default sidebar" role="navigation">
                @include('includes.sidebar')
            </div>
            <div id="page-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
                @include('includes.footer')
            </div>
        </div>
        @include('includes.js')
        @yield('js')
    </body>
    
</html>