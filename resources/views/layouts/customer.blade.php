<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token() }}">

    

    <!-- Styles -->
   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <a href="/cus-home">
            <mat-label class="navbar-brand" style="color: goldenrod;">Golden Pawn</mat-label>
            </a>
            <hr>
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                   

                    <!-- Branding Image -->
                    
                </div>

               
                    <!-- Left Side Of Navbar -->
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                       
                            

                                
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:white;">
                                               Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                
            </div>
        </nav>
        <hr>
   <div>
    @yield('content')
   </div>

   
       
    </div>

</body>
</html>
