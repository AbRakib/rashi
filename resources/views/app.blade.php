<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <!-- ** Basic Page Needs ** -->
      <meta charset="utf-8">
      <title>Vex - Product Landing Page Boostarp Template</title>
    
      <!-- ** Mobile Specific Metas ** -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Vex HTML Template">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
      <meta name="author" content="Themefisher">
      <meta name="generator" content="Themefisher Vex HTML Template v1.0">
      
      <!-- ** Plugins Needed for the Project ** -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid&#43;Serif:400%7cJosefin&#43;Sans:300,400,600,700 ">
      <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/plugins/themefisher-font/themefisher-font.min.css') }} ">
      <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick.min.css') }} ">
      
      <!-- Stylesheets -->
      <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
      
      <!--Favicon-->
      <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
    
    </head>
    <body id="body">
        <!-- preloader start -->
        <div class="preloader"></div>
        <!-- preloader end -->

        @include('partials.header')
        @yield('content')
        @include('partials.footer')
        
        <script src="{{ asset('frontend/plugins/jquery/jquery.js') }}"></script>
        <script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/plugins/slick/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/js/script.js') }}"></script>
    </body>
</html>