<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Kind Heart Charity - Free Bootstrap 5.2.2 CSS Template</title>

        <!-- CSS FILES -->        
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('css/templatemo-kind-heart-charity.css')}}" rel="stylesheet">
<!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

    </head>
    
    <body id="section_1">

       @include('layout.header')
       <main>
       @yield('home')
       </main>
       @include('layout.footer')

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/click-scroll.js')}}"></script>
        <script src="{{asset('js/counter.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>

    </body>
</html>