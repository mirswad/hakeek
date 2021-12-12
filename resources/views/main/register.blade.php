<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>VIDOE - Video Streaming Website HTML Template</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
      <!-- Bootstrap core CSS-->
      <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="{{ asset('css/osahan.css')}}" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.theme.css') }}">
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
               <div class="col-md-5 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <img src="{{ asset('img/favicon.png') }}" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">Welcome to Vidoe</h5>
                        <p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
                     </div>
                     @if($company == 'c')
                        Company forward_static_call
                     @else
                        <form action="/register" method="post">
                        @csrf
                           <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                 @foreach($errors->get('name') as $err)
                                    <small class="text-danger">{{$err}}</small>
                                 @endforeach
                           </div>
                           <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control" name="email" placeholder="Email">
                                 @foreach($errors->get('email') as $err)
                                    <small class="text-danger">{{$err}}</small>
                                 @endforeach
                           </div>
                           <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control" name="password" placeholder="Password">
                                 @foreach($errors->get('password') as $err)
                                    <small class="text-danger">{{$err}}</small>
                                 @endforeach
                           </div>
                           
                           <div class="mt-4">
                              <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Sign Up</button>
                           </div>
                        </form>
                     @endif
                     <div class="text-center mt-5">
                        <p class="light-gray">Already have an Account? <a href="login.html">Sign In</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="login-main-right bg-white p-5 mt-5 mb-5">
                     <div class="owl-carousel owl-carousel-login">
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="{{ asset('img/login.png') }}" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">​Watch videos offline</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="{{ asset('img/login.png') }}" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Download videos effortlessly</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Create GIFs</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- Core plugin JavaScript-->
      <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
      <!-- Owl Carousel -->
      <script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{ asset('js/custom.js') }}"></script>
   </body>
</html>