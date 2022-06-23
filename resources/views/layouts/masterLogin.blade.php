<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('auth/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{URL::asset('auth/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('auth/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{URL::asset('auth/css/style.css')}}">

    <title>Login #3</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

                         @yield('content')
    </div>  
  </div>
                      
                      
                  
   <script src="{{URL::asset('auth/js/jquery-3.3.1.min.js')}}"></script>
   <script src="{{URL::asset('auth/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('auth/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('auth/js/main.js')}}"></script>
</body>
</html>