

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" href="{{asset('animate/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel = "stylesheet" href="{{asset('animate/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .img-fluid{
                height:91.5vh;
                width: 100%;
                background-size: cover;
                background-position: center;

            }
            .carousel-caption{
                padding-bottom: 150px;
            }



            .carousel-caption h2{
                font-size: 50px;
                text-transform: uppercase;
                font-weight: bold;

            }

            .carousel-caption h3{
                font-size: 70px;
                text-transform: uppercase;
                font-weight: bold ;
                color: white;

            }
            .carousel-caption h3 span{
                font-size: 70px;
                text-transform: uppercase;
                font-weight: bold;
                color: goldenrod;
  
            }

            .carousel-caption h2 span{
                font-size: 50px;
                text-transform: uppercase;
                font-weight: bold;
                color:white;
    
            }
            .carousel-caption a{
                background:grey;
                font-size: 15px;
                padding: 15px 20px;
                display: inline-block;
                margin-top: 10px;
                color: white;
                text-transform: uppercase;
                border-radius: 25px;

            }
  

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else -->
                    <nav class="navbar navbar-expand navbar-dark bg-dark">
                    <mat-label class="navbar-brand" style="color: goldenrod;"> Golden Pawn</mat-label>
                    <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                    <li class="nav-item" ><a href="#" style="margin-right:30px;" data-toggle="modal" data-target="#login">Login</a></li>
                    <li class="nav-item"><a href="#" style="margin-right:20px;" data-toggle="modal" data-target="#register">Register</a></li>
                    
           <!-- <li class="nav-item"><a href="" (click)="openLog" class="nav-link" >Login</a></li>
            <li class="nav-item"><a href="" (click)="openSignUp" class="nav-link" >Sign Up</a></li>  -->
            </ul>
        </div>
        
    </nav>
                        

    
                    @endauth
                
            @endif

            <!-- login Modal -->

            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="Article" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:gray;">
                      <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Log In</h5>
                    </div>
    
                    <!-- Login form -->
                     <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                            <br><br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4  control-label ml-5" style="color: black;";">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control ml-5" name="email" style="width: 350px;" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <br>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label ml-5" style="color: black;">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control ml-5" style="width: 350px;" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                           
                                <div class="checkbox">
                                    <label style="color: black; margin-left:100px ;">
                                        <input type="checkbox" style="margin-left:200px;"  name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                               
                            </div>
                        </div>
                        <br>
                        
                            
                         <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" style="margin-left: 180px;">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: black;"; margin-left:-250px;">
                                Forgot Your Password?
                            </a>
                          </div>
                    </form>
                  </div>
                </div>
              </div>


              <!-- register Modal -->


            <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="Article" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:gray;">
                      <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Register</h5>
                    </div>
                  
                    
                    <!-- Register form -->
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="modal-body">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 offset-1 control-label">Name</label>

                            <div class="col-md-10 offset-1">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 offset-1 control-label">E-Mail Address</label>

                            <div class="col-md-10 offset-1">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 offset-1 control-label">Password</label>

                            <div class="col-md-10 offset-1">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-6 offset-1 control-label">Confirm Password</label>

                            <div class="col-md-10 offset-1">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                  </div>
                        </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>





            <div class="carousel slide carousel-fade " data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" data-interval="">
                      <div><img src="./img/4.jpg" alt="" class="img-fluid"></div>
                        <div class="carousel-caption">

                           <h2 class="animated bounceInRight" style="animation-delay: 1s;">WELCOME </h2>
                        <h4 class="animated zoomIn" style="animation-delay: 2s;">TO</h4>
                        <h3 class="animated bounceInLeft" style="animation-delay: 2s;"><span>Golden Pawn</span></h3>
                        
                      </div>
                    </div>
        
                    <div class="carousel-item" data-interval="5000"  >
                       <div> <img src="./img/2.jpg" alt="" class="img-fluid"> </div>
                       <div class="carousel-caption" style="margin-left: -700px;">
                        <h2 class="animated fadeInDown" style="color:goldenrod; animation-delay: 1s;">Highest  <span>Loan</span></h2>
                         <h4 class="animated zoomIn" style="animation-delay: 1s;">for</h4>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s;" >your  <span>gold</span></h3>
                        
                       </div>
                      </div>
                    
        
                    <div class="carousel-item" data-interval="5000"  >
                       <div> <img src="./img/12.jpg" alt="" class="img-fluid"> </div>
                        <div class="carousel-caption" style="margin-bottom: 150px;">
                            <h2 class="animated fadeInDown" style="color:goldenrod; animation-delay: 1s;">lowest <span>interest rates</span></h2>
                            <h4 class="animated zoomIn"  style="animation-delay: 1s;">and</h4>
                            <h2 class="animated fadeInUp"  style="color:goldenrod; animation-delay: 2s;"> maximum <span>secure</span></h2>
                            
                          </div>
                    </div>
        
                   
                    
                </div>
            </div>
        
        <script src="{{asset('jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        </header>
    </body>
</html>


