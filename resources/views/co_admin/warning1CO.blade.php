@extends('layouts.COadmin')

@section('content')
<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">



<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">1st warning Transactions</h1>
          </div><!-- /.col -->
          <!-- /.col -->
          <div class="col-8">
          <img style="height: 50px; margin-left: -85px; width:805px;" src="{{asset('img/gp.png')}}" alt="">
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
    <hr>

    @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 500px;">
                {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
     
           

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
          <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        
        <tbody>
          
          @foreach($day as $d)
        <tr id="row">
          <td hidden>
            {{$d->id}}
          </td>

          <td style="text-align: center;">Transaction {{$d->transId}} <br>  
             Inserted at : {{$d->created_at->format('Y-m-d')}} 
          </td>

    
          <td>  Name : {{$d->fullName}} <br> 
                NIC : {{$d->nicNo}}  <br>
                Contact No : {{$d->contactNo}}
          </td>
    
          <td style="text-align: right;"> Article :  <br>
                                          Karat Value :    <br>
                                          Gold Weight :  
              
          </td>
    
          <td >
            {{$d->article}} <br> 
            {{$d->kValue}} <br>
            {{$d->goldWeight}}g  
          
          </td>
    
          <td style="text-align: right;">
            Int. Rate :   <br>
            Month Int. : <br>
            Advance :   <br>
          </td>
           
          <td >
            {{$d->interestRate}}% <br>
            Rs.{{$d->monthInterest}} <br>
            Rs.{{$d->advance}} <br>
          </td>
    
          <td>
             {{$d->status}}
          </td>
    
          <td style="text-align: left;">
            <div class="btn-group">
              <a href="/co-warning1-view/{{$d->id}}" class="btn btn-success" >Email</a>
              <a href="/co-warning1letter-view/{{$d->id}}" class="btn btn-success" >Letter</a>
            </div>
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
          <th style="text-align: center;">Action</th>
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

          // Delete Transactions
          // ------------------------------------
          // ------------------------------------



</script>
  
  
 
 

  
   
    
    
    
@endsection