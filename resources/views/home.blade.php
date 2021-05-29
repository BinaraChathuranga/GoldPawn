@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">




<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">Transactions</h1>
          </div><!-- /.col -->
          <!-- /.col -->
          <div class="col-8">
            <img style="height: 50px; margin-left: -185px; width:905px;" src="{{asset('img/gp.png')}}" alt="">
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
        <div class="col-3">
        
   
 <a href="{{route('home.transactions.create')}}" class="btn btn-primary">
  
  New Transaction</a>
      </div>

      <div class="col-3" style="margin-left:820px;" >
        <form action="/warning1" method="post">
          <table class="sm">
            @foreach($warning as $w)
            <tr>
              <td style="background-color: gray;">____</td>
              <td style="text-align:left;">1st Warning :</td>
              <td style="text-align:left;">after <input type="text" name="war1" id="war1" readonly  value="{{$w->warn1_duration}}" style="width: 30PX; border:none; background-color: transparent;">  Days</td>
              <td></td>
            </tr>

            <tr>
              <td style="background-color:#00ffff">____</td> 
              <td style="text-align:left;">2nd Warning :</td>
              <td style="text-align:left;">after <input type="text" name="war2" readonly  value="{{$w->warn2_duration}}" style="width: 30PX; border:none; background-color: transparent;">  Days</td>
            </tr>

            <tr>
              <td style="background-color:#f08080">____</td>
              <td style="text-align:left;">3rd Warning :</td>
              <td style="text-align:left;">after <input type="text" name="war3" readonly  value="{{$w->warn3_duration}}" style="width: 30PX; border:none; background-color: transparent;">  Days</td>
            </tr>
            @endforeach
          </table>
        </form>

      </div>
   </div>
    </div>
  </div>
</div>
  
  <hr>
  @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 400px;">
                {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
  <hr>
  
  

    
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
          <th>Duration</th>
          <th style="text-align: center;">Status</th>
          <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        
        <tbody>
          
          @foreach($transac as $t)
        <tr id="row">
          <td hidden>
            {{$t->id}}
          </td>

          <td style="text-align: center;">Transaction {{$t->id}} <br>  
             Inserted at : {{$t->created_at->format('Y-m-d')}} <br>
             

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

            <?php
            $indate=$t->created_at;
            $curdate=date("Y/m/d");
            $d1= new DateTime($indate);
            $d2= new DateTime($curdate);
            $interval=$d1->diff($d2);
            $days=$interval->format('%a');
            $warn1=$w->warn1_duration;
            $warn2=$w->warn2_duration;
            $warn3=$w->warn3_duration;              
            ?> 
          <td  
          
          <?php if($days>$warn1 && $days < $warn2):?> 
          style="background-color:gray; text-align:center" 
          <?php elseif($days>$warn2 && $days<$warn3):?>  
          style="background-color:#00FFFF;  text-align:center" 
          <?php elseif ($days >$warn3):?> 
           style="background-color:#f08080;  text-align:center" 
           <?php endif; ?>>
               <?php echo $days;?> Days

           <input hidden name="exdate"  type="text" value="{{$days}}">    


          </td>
    
          <td>
             {{$t->status}}
          </td>
    
          <td style="text-align: left;">
            <div class="btn-group">
              <a href="/transView/{{$t->id}}" class="btn btn-success" >View</a>
              <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('home.transactions.edit',$t->id)}}">Edit</a>
                <a class="dropdown-item " href="/deleteTransaction/{{$t->id}}" onclick="return confirm('Are you sure you want to delete this Transaction?')">Delete</a>
               
              </div>
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
          <th style="text-align: center;">Duration</th>
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

