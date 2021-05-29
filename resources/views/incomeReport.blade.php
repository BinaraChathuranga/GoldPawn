@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">




<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">Income Report</h1>
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
    <div class="panel-body" id="report">

    <div class="row" id="incomeReport">
      <div class="col-6 offset-3" style="text-align: center;">
        <img src="{{asset('img/gp3.png')}}" alt="" style="width: 500px; height: 40px; ;" class="mt-4"> <br>
        <h6> <b>GOLDEN PAWN Pawning Center</b> </h6>
        <h6><b>No.144/2, Arambegama road, Pilimathalawa</b> </h6>
        <h6> <b>Tel. No : 076-4206423 / 075-6414671</b> </h6>
        <h6> <b>goldenPawn@gmail.com</b> </h6>
<hr>
    </div>
    
      <div class="col-6">

        

        <h5 class="offset-3">Income By Completing Transactions</h5>

    

      <!-- Income by completing Transaction -->
      <!-- --------------------------------------- -->
      <!-- --------------------------------------- -->
      
      <table id="myTable" class="table table-striped table-bordered" >
        <thead>
        <tr>
          <th  style="text-align: center;">Transactions Id</th>
          <th  style="text-align: center;">Date of Income</th>
          <th  style="text-align: center;">Amount</th>
        </tr>
        </thead>
        
        <tbody>
          @foreach($comTrans as $c)
          <tr>
            <td style="text-align: center;">{{$c->transId}}</td>
            <td style="text-align: center;">{{$c->transCreated_at}}</td>
            <td style="text-align: center;">{{$c->advance}}</td>
          </tr>
          @endforeach
         
        </tbody>

        <tfoot>
          <tr>  
            <th colspan="2" style="text-align: center;">Total :</th>
            <th style="text-align: center;"></th>
          </tr>
        </tfoot>
        
  
    </table>
        </div>

        <div class="col-6">
        <h5 class="offset-3">Income By Renewing Transactions</h5>

         <!-- Income by renewing Transaction -->
      <!-- --------------------------------------- -->
      <!-- --------------------------------------- -->
      
      <table id="myTable1" class="table table-striped table-bordered" >
        <thead>
        <tr>
          <th  style="text-align: center;">Transactions Id</th>
          <th  style="text-align: center;">Date of Income</th>
          <th  style="text-align: center;">Amount</th>
        </tr>
        </thead>
        
        <tbody>
        @foreach($renewTrans as $r)
          <tr>
            <td style="text-align: center;">{{$r->transId}}</td>
            <td style="text-align: center;">{{$r->transCreated_at}}</td>
            <td style="text-align: center;">{{$r->totalPay}}</td>
          </tr>
          @endforeach
        
        </tbody>

        <tfoot>
          <tr>  
            <th colspan="2" style="text-align: center;">Total :</th>
            <th style="text-align: center;"></th>
          </tr>
        </tfoot>
        
  
    </table>
    <hr>
        </div>
        
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
  jQuery.fn.dataTable.Api.register( 'sum()', function ( ) {
    return this.flatten().reduce( function ( a, b ) {
        if ( typeof a === 'string' ) {
            a = a.replace(/[^\d.-]/g, '') * 1;
        }
        if ( typeof b === 'string' ) {
            b = b.replace(/[^\d.-]/g, '') * 1;
        }
 
        return a + b;
    }, 0 );
} );
</script>
        
  <script>



$(document).ready( function () {
    $('#myTable').DataTable({

      
        "ordering": false,
        "info":     false,

     drawCallback: function () {
      var api = this.api();
      $( api.column(2).footer() ).html(
        api.column(2, {page:'current'} ).data().sum()
      );
    }

    });
   } );

   $(document).ready( function () {
    $('#myTable1').DataTable({

     
        "ordering": false,
        "info":     false,

     drawCallback: function () {
      var api = this.api();
      $( api.column(2).footer() ).html(
        api.column(2, {page:'current'} ).data().sum()
      );
    }

    });
   } );

$('#print').click(function(){
        $('#incomeReport').printThis();
    })



         
</script>
  

  

      




  
  
 
 

  
   
    
    
    
@endsection

