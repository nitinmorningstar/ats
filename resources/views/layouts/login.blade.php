<!DOCTYPE html>
<html>
    <head>
        @include('includes.meta')
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme/plugins/images/favicon.png')}}">
        <title>@yield('title', 'Applicant Tracking System')</title>


        @include('includes.css')
        @yield('css')
        
    </head>
    <body>
        @yield('content');
        @include('includes.js');
        @yield('js');
    </body>
</html>