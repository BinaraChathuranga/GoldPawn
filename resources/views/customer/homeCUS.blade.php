@extends('layouts.customer')

@section('content')

<head>

<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">
<link rel = "stylesheet" href="{{asset('animate/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">




<!-- Content Header (Page header) -->

         <!-- /.col -->
          <!-- /.col -->
          <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 90vh;
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
                height:50.5vh;
                width: 100%;
                background-size: cover;
                background-position: center;

            }
            .carousel-caption{
                padding-bottom: 50px;
            }



            .carousel-caption h2{
                font-size: 30px;
                text-transform: uppercase;
                font-weight: bold;

            }

            .carousel-caption h3{
                font-size: 50px;
                text-transform: uppercase;
                font-weight: bold ;
                color: white;

            }
            .carousel-caption h3 span{
                font-size: 50px;
                text-transform: uppercase;
                font-weight: bold;
                color: goldenrod;
  
            }

            .carousel-caption h2 span{
                font-size: 30px;
                text-transform: uppercase;
                font-weight: bold;
                color:white;
    
            }
            .carousel-caption a{
                background:grey;
                font-size: 10px;
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
        
    

<div class="carousel slide carousel-fade " data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" data-interval=""  >
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
            <div class="carousel-caption" style="margin-bottom: -30px; margin-left: 600px;">
                <h2 class="animated fadeInDown" style="color:goldenrod; animation-delay: 1s;">lowest <span>interest rates</span></h2>
                <h4 class="animated zoomIn"  style="animation-delay: 1s;">and</h4>
                <h2 class="animated fadeInUp"  style="color:goldenrod; animation-delay: 2s;"> maximum <span>secure</span></h2>
                
              </div>
        </div>

       
        
    </div>
</div>
</body>




<div class="row">
    <div class="col-12">
       <div class="card offset-1" style="width: 70rem;"> 
           <div class="card-body ml-5" >
               <form action="/showDetails" method="POST">
                {{csrf_field()}}

            <table class="table">
                <tr>
                    <td colspan="2" style="text-align:right;">
                       <h4>Enter your NIC Number here </h4> 
                    </td>
                    <td></td>

                    <td  style="text-align:right;">
                        <input class="form-control" style="width:400px;" type="text" name="nic">
                    </td>

                    <td style="text-align:left;">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </td>
                </tr>
            </table>
               </form>
          

           </div>
       </div>
   </div>
</div>

        

  



  

   </section>

   
  


     
   
     
              
   
  
  
  <script src="{{asset('jquery/jquery.min.js')}}"></script> 
  <script src="{{asset('dist/js/jquery-2.1.0.js')}}"></script>
  <script src="{{asset('dist/js/jquery-ui-1.10.1.custom.min.js')}}"></script>
  <script src="{{asset('jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  
 
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
        
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

         
</script>

@endsection
  

  

      




  
  
 
 

  
   
    
    
    


