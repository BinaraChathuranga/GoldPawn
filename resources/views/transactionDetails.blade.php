@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">




<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-4">
          <h1 class="m-0 text-dark">Transaction Details</h1> <br>
            
        </div><!-- /.col -->

        <div class="col-8">
          <img style="height: 50px; margin-left: -165px; width:880px;" src="{{asset('img/gp.png')}}" alt="">
        </div>
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
                <div class="card" style="width: 68rem; margin-left:-15px;"> 
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
                <div class="card" style="width: 22rem; margin-left:-15px; "> 
                    <div class="card-body">

         


                   <table class="table-sm  ml-4">
                    <thead>
                        <tr >
                            <td colspan="2"> <b>Transaction Details</b> </td>
                           
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
                          <td><input type="text" hidden name="exdate" value="{{$days}}"></td>
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
                            <td style="text-align: right;"> Inserted By :</td> 
                            <td style="text-align: left;">{{$Trans->inBy}}</td>
                          </tr>

                          <tr>
                            <td style="text-align: right;"> Inserted Date :</td> 
                            <td style="text-align: left;">{{$Trans->created_at->format('Y-m-d')}}</td>
                          </tr>

                          <tr>
                            <td style="text-align: right;"> Updated By :</td> 
                            <td style="text-align: left;">{{$Trans->upBy}}</td>
                          </tr>

                          <tr>
                            <td style="text-align: right;"> Updated Date :</td> 
                            <td style="text-align: left;">{{$Trans->updated_at->format('Y-m-d')}}</td>
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
                <div class="card" style="width: 25rem; margin-left:-17px;"> 
                    <div class="card-body">
                <table class="table-sm  ml-4">
                    <thead>
                        <tr >
                            <td colspan="2"> <b>Customer Details</b> </td>
                           
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
                <div class="card" style="width: 20rem; margin-left:30px;"> 
                    <div class="card-body">
                <table class="table-sm  ml-4">
                    <thead>
                        <tr >
                            <td colspan="2"> <b>Article Details</b> </td>
                           
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
                            <td style="text-align: right;"> Market Price :</td> 
                            <td style="text-align: left;">{{$Trans->marketPrice}} LKR</td>
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

        <div class="row">
          <div class="col-6 offset-6">

                       <!-- Transaction Details Table-->
                <!-- --------------------------------------- -->
                <!-- --------------------------------------- -->
                <!-- --------------------------------------- -->
      

                <table class="table" id="completeTable" style=" border-bottom: none; margin-left:20px;"  >

                  <thead>
                    <tr hidden>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                    </tr>
                  </thead>

                  <tbody  >
                    <tr>
                <td hidden >{{$Trans->id}}</b> </td>
                
                <td hidden >{{$Trans->fullName}} </td>
                <td hidden>{{$Trans->nicNo}}</td>
                <td hidden>{{$Trans->address}}</td>
                <td hidden>{{$Trans->contactNo}}</td>
                <td hidden>{{$Trans->email}}</td>
                <td hidden >{{$Trans->article}}</td>
                <td hidden >{{$Trans->kValue}}</td>
                <td hidden >{{$Trans->goldWeight}}</td>
                <td hidden>{{$Trans->marketPrice}} </td>
                <td hidden>{{$Trans->assessedPrice}} </td>
                <td hidden >{{$Trans->interestRate}}</td>
                <td hidden  >{{$Trans->advance}}</td>
                <td hidden >{{Auth::user()->name}}</b> </td>
                <td hidden>
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
              echo round($interestToday,2); 
                 
                  ?>
                </td>
                <td hidden>
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
              $total=$advance+$interestToday;
              echo round($total,2);
               ?>
                </td>
                <td hidden >{{$Trans->inBy}}</td>
                <td hidden >{{$Trans->monthInterest}}</td>
               
                <td style="text-align: right;" >
                  <a href="/manualInvoice/{{$Trans->id}}" class="btn btn-info">Invoice</a>
                  <button class="btn btn-secondary renew">Renew Transaction</button>
                  <button class="btn btn-success complete">Complete Transaction</button>
                </td>
                    </tr>
                  </tbody>

                </table>
               
         </div>


                       <!--Completed Transaction Form -->
                  <!-- --------------------------------------- -->
                  <!-- --------------------------------------- -->
                  <!-- --------------------------------------- -->

              <form action="{{route('home.completedTransactions.store')}}" method="post" id="completeTrans">
                {{csrf_field()}}

              <div class="modal fade" id="completeModel" tabindex="-1" role="dialog" aria-labelledby="kPrice" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:gray;">
                      <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Complete Transaction</h5>
                    </div>

                         <!--Completed Transaction Modal -->
                  <!-- --------------------------------------- -->
                  <!-- --------------------------------------- -->
                  <!-- --------------------------------------- -->

                
            <div class="modal-body">    
              <table class="table">
                <tbody hidden>
                  <tr>
              <td>  <input type="text" name="transId" id="transId" value="" readonly style="border:none;"> </td>
                  </tr>

                  <tr>
                    <td > <input type="text" name="Name" id="Name" value="" readonly style="border:none; width:150px;"> </td>
                  </tr>

                  <tr>
                    <td><input type="text" name="NIC" id="NIC" value="" readonly style="border:none; width:150px;"></td>
                  </tr>
              
                  <tr>
                    <td><input type="text" hidden name="Address" id="Address" value="" readonly style="border:none; width:150px;"></td>
                  </tr>

                  <tr>
                    <td><input type="text" name="contact" id="contact" value="" readonly style="border:none; width:150px;"></td>
                  </tr>
              
                  <tr>
                    <td><input type="text" name="email" id="email" value="" readonly style="border:none; width:150px;"></td>
                  </tr>

                  <tr>
                    <td ><input type="text" id="articleName" name="articleName" value="" readonly style="border:none; width:50px;"></td>
                  </tr>

                  <tr>
                    <td ><input type="text" id="karrotId"   name="karrotId" value="" readonly style="border:none; width:50px;"></td>
                  </tr>
              
                  <tr>
                    <td><input type="text"  name="gw" id="gw" value="" readonly style="border:none; width:50px;"></td>
                  </tr>
              
                  <tr>
                    <td><input type="text"  name="tMPrice" id="tMPrice" value="" readonly style="border:none; width:50px;"> </td>
                  </tr>

                  <tr>
                    <td ><input type="text"  name="faPrice" id="faPrice" value="" readonly style="border:none; width:50px;"> </td>
                  </tr>
              
              
                  <tr>
                    <td ><input type="text"  name="interestRate" id="interestRate" value="" readonly style="border:none; width:50px;"></td>
                  </tr>

                  <tr>
                  <td  ><input type="text"  name="advance"  id="advance" value="" readonly style="border:none; width:50px;"></td>
                  </tr>

                  <tr>
                  <td  ><input type="text"  name="interest"  id="interest" value="" readonly style="border:none; width:50px;"></td>
                  </tr>

                  <tr>
                  <td><input type="text"  name="totalpaid"  id="totalpaid" value="" readonly style="border:none; width:50px;"></td>
                  </tr>

                  <tr>
                  <td  ><input type="text"  name="user"  id="user" value="" readonly style="border:none; width:50px;"></td>
                  </tr>

                  <tr>
                  <td  ><input type="text"  name="inuser"  id="inuser" value="" readonly style="border:none; width:50px;"></td>
                  </tr>

                  <tr>
                  <td  ><input type="text"  name="monthIntrest"  id="monthIntrest" value="" readonly style="border:none; width:50px;"></td>
                  </tr>

                </tbody>

              </table>

              Are you sure you want to complete this Transaction
                         
            </div>
            
    
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="sumbit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          </div>
        </div>
        
      </form>

         <!--Renew Transaction Form -->
                  <!-- --------------------------------------- -->
                  <!-- --------------------------------------- -->
                  <!-- --------------------------------------- -->

                  <form action="{{route('home.renewTransactions.store')}}" method="post" id="renewTrans">
                    {{csrf_field()}}
    
                  <div class="modal fade" id="RenewModel" tabindex="-1" role="dialog" aria-labelledby="kPrice" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:gray;">
                          <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Renew Transaction</h5>
                        </div>
    
                             <!--Renew Transaction Modal -->
                      <!-- --------------------------------------- -->
                      <!-- --------------------------------------- -->
                      <!-- --------------------------------------- -->
    
                    
                <div class="modal-body">    
                  <table class="table">
                    <tbody hidden>
                      <tr>
                  <td>  <input type="text" name="RtransId" id="RtransId" value="" readonly style="border:none;"> </td>
                      </tr>
    
                      <tr>
                        <td > <input type="text" name="RName" id="RName" value="" readonly style="border:none; width:150px;"> </td>
                      </tr>
    
                      <tr>
                        <td><input type="text" name="RNIC" id="RNIC" value="" readonly style="border:none; width:150px;"></td>
                      </tr>
                  
                      <tr>
                        <td><input type="text" hidden name="RAddress" id="RAddress" value="" readonly style="border:none; width:150px;"></td>
                      </tr>
    
                      <tr>
                        <td><input type="text" name="Rcontact" id="Rcontact" value="" readonly style="border:none; width:150px;"></td>
                      </tr>
                  
                      <tr>
                        <td><input type="text" name="Remail" id="Remail" value="" readonly style="border:none; width:150px;"></td>
                      </tr>
    
                      <tr>
                        <td ><input type="text" id="RarticleName" name="RarticleName" value="" readonly style="border:none; width:50px;"></td>
                      </tr>
    
                      <tr>
                        <td ><input type="text" id="RkarrotId"   name="RkarrotId" value="" readonly style="border:none; width:50px;"></td>
                      </tr>
                  
                      <tr>
                        <td><input type="text"  name="Rgw" id="Rgw" value="" readonly style="border:none; width:50px;"></td>
                      </tr>
                  
                      <tr>
                        <td><input type="text"  name="RtMPrice" id="RtMPrice" value="" readonly style="border:none; width:50px;"> </td>
                      </tr>
    
                      <tr>
                        <td ><input type="text"  name="RfaPrice" id="RfaPrice" value="" readonly style="border:none; width:50px;"> </td>
                      </tr>
                  
                  
                      <tr>
                        <td ><input type="text"  name="RinterestRate" id="RinterestRate" value="" readonly style="border:none; width:50px;"></td>
                      </tr>
    
                      <tr>
                      <td  ><input type="text"  name="Radvance"  id="Radvance" value="" readonly style="border:none; width:50px;"></td>
                      </tr>
    
                      <tr>
                      <td  ><input type="text"  name="Rinterest"  id="Rinterest" value="" readonly style="border:none; width:50px;"></td>
                      </tr>
    
                      <tr>
                      <td><input type="text"  name="Rtotalpaid"  id="Rtotalpaid" value="" readonly style="border:none; width:50px;"></td>
                      </tr>
    
                      <tr>
                      <td  ><input type="text"  name="Ruser"  id="Ruser" value="" readonly style="border:none; width:50px;"></td>
                      </tr>

                      <tr>
                      <td  ><input type="text"  name="Rinuser"  id="Rinuser" value="" readonly style="border:none; width:50px;"></td>
                      </tr>

                      <tr>
                      <td  ><input type="text"  name="RmonthIntrest"  id="RmonthIntrest" value="" readonly style="border:none; width:50px;"></td>
                  </tr> 
    
                    </tbody>
    
                  </table>
    
                  Are you sure you want to Renew this Transaction
                             
                </div>
                
        
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="sumbit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              </div>
            </div>
            
          </form>

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