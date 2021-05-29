@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">



<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">Ledger</h1>
          </div><!-- /.col -->

          <!-- /.col -->
          <div class="col-8">
          <img style="height: 50px; margin-left: -190px; width:905px;" src="{{asset('img/gp.png')}}" alt="">
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
          <hr>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ledger">
            Renew Balance
          </button>

          

          <!-- Article Modal -->
                  <!-- ------------------------------- -->
                  <!-- ------------------------------- -->
                  <div class="modal fade" id="ledger" tabindex="-1" role="dialog" aria-labelledby="Article" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:gray;">
                          <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Renew Balance</h5>
                        </div>
        
                        <!-- insert Article form -->
                        <form action="{{route('home.ledger.store')}}" method="post">
                            {{csrf_field()}}
                        <div class="modal-body">    
                                     <div class="input-group-sm" form-group>
                                     <h6 >Remaining Balance</h6>    
                                     <input type="text" readonly name="rBal" id="rBal" class="form-control"  value="{{$ledger->avaBal}}" style="width: 465px;" placeholder="" required>
                                    </div>

                                        <div class="input-group-sm" form-group>
                                        <h6 >New Amount</h6>    
                                        <input type="text" pattern="[0-9]+" oninvalid="alert('You cannot enter letters in here')" title="You cannot enter letters in here" name="nBal" id="nBal" class="form-control" style="width: 465px;" placeholder="" required>
                                        </div>

                                        <div class="input-group-sm" form-group>
                                        <h6 >Total Amount</h6>    
                                        <input type="text" readonly name="tBal" id="tBal" class="form-control" style="width: 465px;" placeholder="" required>
                                        </div>


                        </div>
        
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="sumbit" class="btn btn-primary">Submit</button>
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
       $(document).ready(function(){
        $('#nBal').keyup(function(){
          var reBal=parseFloat($('#rBal').val());
          var newBal=parseFloat($(this).val());

          if(Number.isNaN(newBal))
          toBal=0;
        
        else
        var toBal=reBal+newBal;
          $('#tBal').val(toBal.toFixed(2));

     });



       });

   </script>


 @endsection