@extends('layouts.customer')

@section('content')

<head>

    <link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">
    <link rel = "stylesheet" href="{{asset('animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">


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
    
    <hr>






<!-- Content Header (Page header) -->

    <!-- /.content-header -->
 <!-- Main content -->
 <section class="content">
 
  <hr>
  

    
   <div class="panel panel-default">
    <div class="panel-body">
      

      <!-- Transaction Details Table -->
      <!-- --------------------------------------- -->
      <!-- --------------------------------------- -->
      
      <table id="myTable" class="table table-striped table-bordered" >
       
        <tr>
          <th hidden> Transaction Id</th>
          <th>Transaction Details</th>
          <th style="text-align: center;">Customer Details</th>
          <th colspan="4" style="text-align: center;">Article Details</th>
          
          <th style="text-align: center;">Status</th>
          <th style="text-align: center;">Action</th>
        </tr>
       
        
    
          
          @foreach($transac as $t)
        <tr id="row">
          <td hidden>
            {{$t->id}}
          </td>

          <td style="text-align: center;">Transaction {{$t->id}} <br>  
             Inserted at : {{$t->created_at->format('Y-m-d')}} 
          </td>

    
          <td>  Name : {{$t->fullName}} <br> 
                NIC : {{$t->nicNo}}  <br>
                Contact No : {{$t->contactNo}}
          </td>
    
          <td style="text-align: right;"> Article :  <br>
                                          Karat Value :    <br>
                                          Gold Weight :  
              
          </td>
    
          <td >
            {{$t->article}} <br> 
            {{$t->kValue}} <br>
            {{$t->goldWeight}}g  
          
          </td>
    
          <td style="text-align: right;">
            Int. Rate :   <br>
            Month Int. : <br>
            Advance :   <br>
          </td>
           
          <td >
            {{$t->interestRate}}% <br>
            Rs.{{$t->monthInterest}} <br>
            Rs.{{$t->advance}} <br>
          </td>

           
         
    
          <td>
             {{$t->status}}
          </td>
    
          <td style="text-align: left;">
              <a href="/cus-transView/{{$t->id}}" class="btn btn-success" >View</a>
            </div>
          </td>
        </tr>
        @endforeach
        
        
       
          <tr>
          <th hidden>id</th>
          <th style="text-align: center;">Transaction Details</th>
          <th style="text-align: center;">Customer Details</th>
          <th colspan="4" style="text-align: center;">Article Details</th>
          <th style="text-align: center;">Status</th>
          <th style="text-align: center;">Action</th>
        </tr>
       
       
      </table>
</div>
</div>

<!-- Delete Transaction Modal -->
<!-- --------------------------------------- -->
<!-- --------------------------------------- -->
<div class="modal fade" id="deleteTransM" tabindex="-1" role="dialog" aria-labelledby="transaction" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:gray;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Delete Article</h5>
      </div>

      <!-- Delete Transaction form -->
      <form action="" method="post" id="deleteTrans">
          {{csrf_field()}}
          {{method_field('DELETE')}}

              <div class="modal-body">    
        
              <input type="hidden" name="_method" value="DELETE">
              <h6>Are you sure you want to delete this Transaction?</h6>

                   
              
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary">Delete</button>
      </div>
      </form>
    </div>
  </div>
  </div>
     

     

     
                   
              
      </div>
    </div>
  </div>

   </section>

   
  


     
   
     
              
   
  
  
  <script src="{{asset('jquery/jquery.min.js')}}"></script> 
  <script src="{{asset('dist/js/jquery-2.1.0.js')}}"></script>
  <script src="{{asset('dist/js/jquery-ui-1.10.1.custom.min.js')}}"></script>
  
 
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
        
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

         
</script>
  

  

      




  
  
 
 

  
   
    
    
    
@endsection

