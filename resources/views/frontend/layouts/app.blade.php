<!doctype html>
<html lang="en">
    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- custom metas -->
        

        @yield('meta')

        <!-- font awesome 5 free -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Your Custom CSS file that will include your blocks CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/cms/css/cms.css') }}">
        <script src="https://unpkg.com/tua-body-scroll-lock"></script>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> </title>
        <!-- custom css code -->
        

        <!-- in app chat widget css -->
        
        @yield('css')
        <style type="text/css">
            .far.fa-comments{
                padding-top: 3px !important;
                font-size: 25px !important;
            }
        </style>
    </head>
    <body>
        @yield('content')

       

        @includeIf('frontend.layouts.footer')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/tua-body-scroll-lock"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sticky-js/1.3.0/sticky.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script src="{{ asset('assets/cms/js/cms.js') }}"></script>

      
        <!-- facebook pixel code -->
       
        @yield('javascript')
    </body>
</html>