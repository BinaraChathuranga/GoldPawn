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
          <img style="height: 50px; margin-left: -110px; width:830px;" src="{{asset('img/gp.png')}}" alt="">
          </div>



        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-body">
        
   
 
   </div>
    </div>
  </div>
  
  <hr>
  <br>

    
   <div class="panel panel-default">
    <div class="panel-body">

      <!-- Transaction Details Table -->
      <!-- --------------------------------------- -->
      <!-- --------------------------------------- -->
      
      <table id="myTable" class="table table-striped table-bordered" >
        <thead>
        <tr>
          <th hidden> Transaction Id</th>
          <th>Transaction Details</th>
          <th style="text-align: center;">Customer Details</th>
          <th colspan="4" style="text-align: center;">Article Details</th>
          <th style="text-align: center;">Status</th>
       
        </tr>
        </thead>
        
        <tbody>
          
          @foreach($completed as $t)
        <tr id="row">
          <td hidden>
            {{$t->id}}
          </td>

          <td style="text-align: center;">Transaction {{$t->transId}} <br>  
             Renewed at : {{$t->created_at->format('Y-m-d')}} 
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
            Advance : <br>
            Total Paid :   <br>
          </td>
           
          <td >
            {{$t->intrestRate}}% <br>
            Rs.{{$t->advance}} <br>
            Rs.{{$t->totalPay}} <br>
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
          <th style="text-align: center;">Transaction Details</th>
          <th style="text-align: center;">Customer Details</th>
          <th colspan="4" style="text-align: center;">Article Details</th>
          <th style="text-align: center;">Status</th>
      
        </tr>
        </tfoot>
       
      </table>
</div>
</div>

<!-- Delete Transaction Modal -->
<!-- --------------------------------------- -->
<!-- --------------------------------------- -->



      <!-- Delete Transaction form -->
     

     

     
                   
              
      </div>
    </div>
  </div>

   </section>

   
  


     
   
     
              
   
  
  
   
  <script src="{{asset('dist/js/jquery-2.1.0.js')}}"></script>
  <script src="{{asset('dist/js/jquery-ui-1.10.1.custom.min.js')}}"></script>
  
  <script src="{{asset('jquery/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
        


  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

         
</script>
  
  
 
 

  
   
    
    
    
@endsection

