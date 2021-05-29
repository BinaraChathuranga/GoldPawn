@extends('layouts.customer')

@section('content')
<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">




<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-4">
          <h1 class="m-0 text-dark"></h1> <br>
            
        </div><!-- /.col -->
        <!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <hr>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

        <div class="row">
             <div class="col-12">
                <div class="card offset-1" style="width: 70rem;"> 
                    <div class="card-body ml-5" >
                    <h3>Transaction ID : {{$Trans->id}} </h3>

                    </div>
                </div>
            </div>
      </div>


        <div class="row">


              <!-- Transaction Details Card -->
            <!-- --------------------------------------- -->
            <!-- --------------------------------------- -->
            <!-- --------------------------------------- -->

            <div class="col-4">
                <div class="card offset-3 border-left-0 border-right-0 border-top-0 border-bottom-0 " style="width: 24rem; "> 
                    <div class="card-body">
                   <table class="table-sm  ml-4">
                    <thead>
                        <tr >
                            <td colspan="2" style="text-align: center;"> <b>Transaction Details</b> </td>
                           
                        </tr>
                    </thead>

                    <tbody>
                       <tr>
                            <td style="text-align: right;"> Interest Rate :</td> 
                            <td style="text-align: left;">{{$Trans->interestRate}}%</td>
                          </tr>

                        <tr>
                            <td style="text-align: right;"> Advance :</td> 
                            <td style="text-align: left;">{{$Trans->advance}} LKR</td>
                        </tr>

                        <tr>
                            <td style="text-align: right;"> Monthly Interest :</td> 
                            <td style="text-align: left;">{{$Trans->monthInterest}} LKR</td>
                        </tr>
                        <?php
                        $indate=$Trans->created_at;
                        $curdate=date("Y/m/d");
                        $d1= new DateTime($indate);
                        $d2= new DateTime($curdate);
                        $interval=$d1->diff($d2);
                        $days=$interval->format('%a');
                        ?>

                        <tr>
                          <td style="text-align: right;"> Duration :</td> 
                          <td style="text-align: left;">
                            <?php echo $days;?> Days 
                          </td>
                        </tr>
                        
                       <tr>
                          <td style="text-align: right; background-color:#90EE90;"> Interest Till Today :</td> 
                          <td style="text-align: left; background-color:#90EE90;">
                            <?php
                            $advance=$Trans->advance;
                            $interstRate=$Trans->interestRate;
                            $indate1=$Trans->created_at;
                        $curdate1=date("Y/m/d");
                        $d3= new DateTime($indate1);
                        $d4= new DateTime($curdate1);
                        $interval1=$d3->diff($d4);
                        $days1=$interval1->format('%a');

                        $interest=$advance* $interstRate/100;
                        $interestToday=($interest/30)*$days1;
                        echo round ($interestToday,2); 
                           
                            ?>
                          LKR
                          </td>
                      </tr>

                          <tr>
                            <td style="text-align: right;"> Pawned Date :</td> 
                            <td style="text-align: left;">{{$Trans->created_at->format('Y-m-d')}}</td>
                          </tr>

                          

                         

                          <tr>
                            <td style="text-align: right;"> Status :</td> 
                            <td style="text-align: left;">{{$Trans->status}}</td>
                        </tr>
        
                       
                    </tbody>

                </table>
                </div>
                </div>
            </div>

                   <!-- Customer Details Card -->
            <!-- --------------------------------------- -->
            <!-- --------------------------------------- -->
            <!-- --------------------------------------- -->


            <div class="col-4">
                <div class="card offset-1 border-left-0 border-right-0 border-top-0 border-bottom-0" style="width: 30rem;"> 
                    <div class="card-body">
                <table class="table-sm  ml-4">
                    <thead>
                        <tr >
                            <td colspan="2" style="text-align: center;"> <b>Customer Details</b> </td>
                           
                        </tr>
                    </thead>

                    <tbody>
                       
                        <tr>
                          <td style="text-align: right;"> Full Name :</td> 
                          <td style="text-align: left;">{{$Trans->fullName}}</td>
                        </tr>

                        <tr>
                            <td style="text-align: right;"> NIC :</td> 
                            <td style="text-align: left;">{{$Trans->nicNo}}</td>
                          </tr>

                          <tr>
                            <td style="text-align: right;"> Address :</td> 
                            <td style="text-align: left;">{{$Trans->address}}</td>
                          </tr>

                          <tr>
                            <td style="text-align: right;"> Contact No :</td> 
                            <td style="text-align: left;">{{$Trans->contactNo}}</td>
                          </tr>

                          <tr>
                            <td style="text-align: right;"> Email :</td> 
                            <td style="text-align: left;">{{$Trans->email}}</td>
                          </tr>
                       
                    </tbody>

                </table>
                </div>
                </div>
            </div>

                     <!-- Article Details Card -->
                  <!-- --------------------------------------- -->
                  <!-- --------------------------------------- -->
                  <!-- --------------------------------------- -->
            
            <div class="col-4">
                <div class="card border-left-0 border-right-0 border-top-0 border-bottom-0" style="width: 18rem; margin-left:30px;"> 
                    <div class="card-body">
                <table class="table-sm  ml-4">
                    <thead>
                        <tr >
                            <td colspan="2" style="text-align: center;"> <b>Article Details</b> </td>
                           
                        </tr>
                    </thead>

                    <tbody>
                       
                        <tr>
                          <td style="text-align: right;"> Article Name :</td> 
                          <td style="text-align: left;">{{$Trans->article}}</td>
                        </tr>

                        <tr>
                            <td style="text-align: right;"> Karat Value :</td> 
                            <td style="text-align: left;">{{$Trans->kValue}}</td>
                          </tr>

                          <tr>
                            <td style="text-align: right;"> Gold weight :</td> 
                            <td style="text-align: left;">{{$Trans->goldWeight}}g</td>
                          </tr>

                         

                          <tr>
                            <td style="text-align: right;"> Assessed Price :</td> 
                            <td style="text-align: left;">{{$Trans->assessedPrice}} LKR</td>
                          </tr>
                       
                    </tbody>

                </table>
              </div>
            </div>
          </div>
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
   $(document).ready(function(){
var table=$('#completeTable').DataTable({
      "paging" :false,
      "bInfo":false,
      "bFilter":false,
    

});
      
table.on('click','.complete',function(){

  $tr=$(this).closest('tr');
  if ($($tr).hasClass('child')){
    $tr=$tr.prev('.parent');
  }

  var data = table.row($tr).data();
  console.log(data);

  $('#transId').val(data[0]);
  $('#Name').val(data[1]);
  $('#NIC').val(data[2]);
  $('#Address').val(data[3]);
  $('#contact').val(data[4]);
  $('#email').val(data[5]);
  $('#articleName').val(data[6]);
  $('#karrotId').val(data[7]);
  $('#gw').val(data[8]);
  $('#tMPrice').val(data[9]);
  $('#faPrice').val(data[10]);
  $('#interestRate').val(data[11]);
  $('#advance').val(data[12]);
  $('#interest').val(data[14]);
  $('#totalpaid').val(data[15]);
  $('#user').val(data[13]);
  $('#inuser').val(data[16]);
  $('#monthIntrest').val(data[17]);
  
  $('#completeModel').modal('show');
});

table.on('click','.renew',function(){

$tr=$(this).closest('tr');
if ($($tr).hasClass('child')){
  $tr=$tr.prev('.parent');
}

var data = table.row($tr).data();
console.log(data);

$('#RtransId').val(data[0]);
$('#RName').val(data[1]);
$('#RNIC').val(data[2]);
$('#RAddress').val(data[3]);
$('#Rcontact').val(data[4]);
$('#Remail').val(data[5]);
$('#RarticleName').val(data[6]);
$('#RkarrotId').val(data[7]);
$('#Rgw').val(data[8]);
$('#RtMPrice').val(data[9]);
$('#RfaPrice').val(data[10]);
$('#RinterestRate').val(data[11]);
$('#Radvance').val(data[12]);
$('#Rinterest').val(data[14]);
$('#Rtotalpaid').val(data[15]);
$('#Ruser').val(data[13]);
$('#Rinuser').val(data[16]);
$('#RmonthIntrest').val(data[17]);


$('#RenewModel').modal('show');
   });
   });


  </script>


@endsection