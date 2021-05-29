@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">




<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">Completed Transactions</h1>
          </div><!-- /.col -->
          <!-- /.col -->
          <div class="col-8">
          <img style="height: 50px; margin-left: -95px; width:820px;" src="{{asset('img/gp.png')}}" alt="">
            </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
 <section class="content">
<div class="row">
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-body">
      

      

  <body>
    <button class="btn btn-primary offset-10" id="print" style="width: 150px;">Print Report</button>
    

    <hr>
    
     
   <div class="panel panel-default">
    <div class="panel-body">
     <div id="completedRepo">

      <div class="col-6 offset-3" style="text-align: center;">
        <img src="{{asset('img/gp3.png')}}" alt="" style="width: 500px; height: 40px; ;" class="mt-4"> <br>
        <h6> <b>GOLDEN PAWN Pawning Center</b> </h6>
        <h6><b>No.144/2, Arambegama road, Pilimathalawa</b> </h6>
        <h6> <b>Tel. No : 076-4206423 / 075-6414671</b> </h6>
        <h6> <b>goldenPawn@gmail.com</b> </h6>

    </div>
    <hr>

     <h5 class="offset-4">Completed Transactions Details Report</h5>

      <!-- Transaction Details Table -->
      <!-- --------------------------------------- -->
      <!-- --------------------------------------- -->
      
      <table id="myTable" class="table table-striped table-bordered" >
        <thead>
        <tr>
          
          <th colspan="2" style="text-align: center;">Transaction Details</th>
          <th colspan="2" style="text-align: center;">Customer Details</th>
          <th colspan="4" style="text-align: center;">Article Details</th>
          <th style="text-align: center;">Status</th>
        </tr>
        </thead>
        
        <tbody>
          
          @foreach($transac as $t)
        <tr id="row">
          <td style="text-align: right;">
          Transaction : <br>
          Inserted at : <br>
          Inserted by : <br>
          Completed at : <br>
          Completed by :
         </td>

          <td style="text-align: left;"> {{$t->id}} <br>  
              {{$t->created_at->format('Y-m-d')}} <br>
            {{$t->inBy}} <br>
              {{$t->updated_at->format('Y-m-d')}} <br>
              {{$t->completedBy}}
          </td>

          <td style="text-align: right;">  
                Name :  <br> 
                NIC : <br>
                Tel No : <br>
                Address : <br>
                Email :
          </td>

          <td style="text-align:left;">
          {{$t->fullName}} <br>
          {{$t->nicNo}}  <br>
          {{$t->contactNo}} <br>
          {{$t->address}} <br>
          {{$t->email}}
          
          </td>
    
          <td style="text-align: right;"> Article :   <br>
                                          Karat Value : <br>
                                          Gold Weight :  <br>
                                          Market Price :  <br>
                                          Assesed Price :   
              
          </td>
    
          <td >
            {{$t->article}} <br> 
            {{$t->kValue}} <br>
            {{$t->goldWeight}}g <br>
            {{$t->marketPrice}} <br>
            {{$t->assessedPrice}}

          
          </td>
    
          <td style="text-align: right;">
            Int. Rate :   <br>
            Advance :   <br>
            Monthly Int : <br>
            Int Paid : <br>
            Total Paid :
          </td>
           
          <td >
            {{$t->intrestRate}}% <br>
            Rs.{{$t->advance}} <br>
            Rs.{{$t->monthInterest}} <br>
            Rs.{{$t->interestPay}} <br>
            Rs.{{$t->totalPay}}
          </td>
         
    
          <td>
             {{$t->status}}
          </td>
  
        </tr>
        @endforeach
        </tbody>
        
        <tfoot>
          <tr>
          <th hidden>id</th>
          <th colspan="2" style="text-align: center;">Transaction Details</th>
          <th colspan="2" style="text-align: center;">Customer Details</th>
          <th colspan="4" style="text-align: center;">Article Details</th>
          <th style="text-align: center;">Status</th>
         
        </tr>
        </tfoot>
       
      </table>
      <hr>
      <h6 class="offset-5">Report generate Date : <?php $date=date("Y/m/d"); echo $date ?></h6>
    </div>
</div>
</div>

      
  </body>

<!-- Delete Transaction Modal -->
<!-- --------------------------------------- -->
<!-- --------------------------------------- -->

    </div>

     

     

     
                   
              
      </div>
    </div>
  </div>

   </section>

   
  


     
   
     
              
   
  
  
  <script src="{{asset('jquery/jquery.min.js')}}"></script> 
  <script src="{{asset('dist/js/jquery-2.1.0.js')}}"></script>
  <script src="{{asset('dist/js/jquery-ui-1.10.1.custom.min.js')}}"></script>
  <script src="{{asset('js/printThis.js')}}"></script>
  
 
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
        
  <script>



$(document).ready(function() {
    $('#myTable').DataTable( {
      "lengthMenu":[5,10,25,50],
      
    } );
} );

$('#print').click(function(){
        $('#completedRepo').printThis();
    })



         
</script>
  

  

      




  
  
 
 

  
   
    
    
    
@endsection

