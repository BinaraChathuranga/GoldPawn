@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-4">
          <h1 class="m-0 text-dark">New Transaction </h1> <br>
            
        </div><!-- /.col -->

        <div class="col-8">
        <img style="height: 50px; margin-left: -190px; width:905px;" src="{{asset('img/gp.png')}}" alt="">
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

          <!-- insert Transaction form -->
          <!-- --------------------------------------- -->
          <!-- --------------------------------------- -->
            
              <!-- {{ Form::open(['method'=>'post']) }} -->
              <form id="intra" method="post" action="{{route('home.transactions.store')}}"> 
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="text" hidden name="user" value="{{Auth::user()->name}}">
                {{csrf_field()}}
            <div class="row">

              
              <!-- --------------------------------------- -->
              <!-- --------------------------------------- -->
      <div class="col-8">
     <div class="card" style="width: 47rem; margin-left:-15px;" > 
     <div class="card-body">

                <div class="alert alert-danger collapse" id="alert3"  style="width: 320px; margin-left:30px;">
                   Please Select a Karot Value  
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                </div>

        <table class="table">

            <tr>
              <td colspan="2" style="text-align: center;"><h6 style="text-decoration:underline; "><b>Customer Details</b></h6></td>
              <td colspan="3" style="text-align: center;"><h6 style="text-decoration:underline;"><b>Article Details</b></h6></td>
            </tr>
            <tr>
              <td>Name</td>
              <td >
                <div class="input-group-sm">
                <input type="text"  name="Name" class="form-control" style="width: 300px;" placeholder="eg: Jhon Cena " required>
                </div>
              </td>
              <td colspan="2" style="text-align: right;">Select Article</td>
              <td><div class="input-group-sm">
                <select name="articleName" id="articleName" class="form-control"  style="width: 100px;" required> 
                  <option value="" hidden selected >-select-</option>
                  @foreach($artArray as $key => $value)
                  <option value="{{$value->artName}}">{{$value->artName}}</option>
                  @endforeach
                </select>
              </div>
            </td> <br>
            </tr>

            <tr>
              <td>NIC No</td>
              <td><div class="input-group-sm">
                <input type="text" pattern="([0-9]{9}[V]|[0-9]{12})" oninvalid="alert('Please enter valid old or new NIC No.')" title="Please enter valid old or new NIC No." name="NIC"  class="form-control"  style="width: 300px;" placeholder="eg: 999999999V / 999999999999" required >
              </div>
             
              </td>
              <td colspan="2" style="text-align: right;">Select Karrot Value</td>
              <td><div class="input-group-sm">
                
                <select id="karrotId" name="karrotId" class="form-control" style="width: 105px;" required>  
                <option value="" hidden selected >-select-</option>
                  @foreach($kValArray as $key => $value)  
                <option value="{{$value->kValue}}">{{$value->kValue}}</option>
                  @endforeach  
                  </select>
              </div>
            </td>
            </tr>

            <tr>
              <td>Address</td>
              <td><div class="input-group-sm">
                <textarea type="text" name="Address" class="form-control" style="width: 300px;" placeholder="Address" required></textarea>
              </div>
             </td>
             <td colspan="2" style="text-align: right;">Gold Weight</td>
             <td><div class="input-group-sm">
              <input type="text" pattern="([0-9]+|[0-9]+[\.]?[0-9]{1,2})$" oninvalid="alert('You cannot enter letters in here')" title="You cannot enter letters in here" id="goldWeight" name="gw" class="input form-control" style="width: 100px;" placeholder="eg: 1 or 1.50" required>  
                </div>
             </td>
            </tr>

            <tr>
              <td>Tel No.</td>
              <td> <div class="input-group-sm">
                <input type="text" pattern="[0-9]{10}" oninvalid="alert('Please Contact number with 10 digits')" title="Please enter Contact number with 10 digits" name="contact" class="form-control" style="width: 300px;" placeholder="eg: 0123456789" required>
              </div>
              </td>
              <td colspan="2" style="text-align: right;">Market Price</td>
              <td><div class="input-group-sm">
                <input type="number" id="tmPrice" name="tMPrice" readonly class="input form-control"  style="width: 100px;" required > 
              </div>
              </td>
            </tr>

            <tr>
              <td>Email</td>
              <td><div class="input-group-sm">
                <input type="email" name="email" class="form-control" style="width: 300px;" placeholder="eg: name@gmail.com" required>
              </div>
              </td>
              <td colspan="2" style="text-align: right;">Assessed Price</td>
              <td><div class="input-group-sm">
                <input type="number" name="faPrice" id="faPrice" readonly class="form-control" style="width: 100px;" required>
              </div>
            </td>
            </tr>

            <tr>
              <td colspan="2"></td>
              <td colspan="2" style="text-align: right;">Advance</td>
              <td><div class="input-group-sm">
                <input type="number" name="advance" pattern="[0-9]+" oninvalid="alert('You cannot enter letters in here')" title="You cannot enter letters in here" id="advance" class="input form-control" style="width: 100px;" required >
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2"></td>
              <td colspan="2" style="text-align: right;">Monthly Interest</td>
              <td><div class="input-group-sm">
                <input type="number" name="interest" id="interest" readonly class="form-control" style="width: 100px;" required>
                 </div>
              </td>
            </tr>
             <tr>
                 <td colspan="2">
                 
                 </td>
                 <td colspan="3" style="text-align: right;"><button type="submit" value="validate" onclick="return Validate()" class="btn btn-primary" id="subTrans">Submit</button></td>
                 
                
             </tr>
          </table>
        </div>
    </div>
</div> 




              <!-- --------------------------------------- -->
              <!-- --------------------------------------- -->

        <div class="col-4">
          <div class="card" style="width: 320px; margin-left:30px;"> 
            <div class="card-body">

               


                <table>
                    
                   <tr>
                        <td style="text-align: right;">Market Price(1g) :</td>
                        <td style="text-align: right;"> <label dir="rtl" name="mPrice" id="mPrice" class="form-control" style="width: 100px;"></label> </td>
                        <td>LKR</td>
                    </tr>
                   
                    <tr>
                       <td style="text-align: right;">Assessed Price(1g) :</td> 
                       <td style="text-align: right;"><label name="aPrice" dir="rtl" id="asPrice" class="form-control" style="width: 100px;"></label> </td>
                       <td>LKR</td>
                    </tr>
                   
                    
                    <tr>
                        <td style="text-align: right;">Interest Rate : </td>
                        <td style="text-align: right;">
                        
                        <select name="interestRate" dir="rtl" id="interestRate" readonly class="form-control"  style="width: 100px;" required> 
      
                      </select></td>
                        
                        <td>%</td>
                    </tr>

                    <!-- <tr>
                      <td style="text-align: right;">Main Balance :</td>
                          <td style="text-align: right;">
                          
                          <input dir="rtl" type="text" name="mainBalance"  class="form-control" id="mainBalance" value="{{$ledger->avaBal}}" style="width:100px;" readonly>
                          </td>
                          <td>LKR</td>

                          <td style="text-align: right;">income :</td>
                          <td style="text-align: right;">
                          
                          <input dir="rtl" type="text" name="income"  class="form-control" id="income" value="{{$income->income}}" style="width:100px;" readonly>
                          </td>
                          <td>LKR</td>
                      </tr>  -->
                              <?php
                              $MB=$ledger->avaBal;
                              $total=$MB;
                              ?>
                      <tr>
                        <td style="text-align: right;">Total Balance :</td>
                            <td style="text-align: right;">
                             <input dir="rtl" type="text" name="totalBal" class="form-control" id="totalBal" value="{{$total}}" style="width:100px;" readonly></td>
                            <td>LKR</td>
                        </tr>
  
                      <tr>
                      <td style="text-align: right;">Available Balance :</td>
                          <td style="text-align: right;">
                           <input dir="rtl" type="text" name="mainBalance1" class="form-control" id="mainBalance1" value="" style="width:100px;" readonly></td>
                          <td>LKR</td>
                      </tr>
    
                    
                    
                    
                </table>
               </div>
              </div>
                <div class="alert alert-danger collapse" id="alert"  style="width: 320px; margin-left:30px;">
                Advance you enter is greater than assessed price or Available Balance is not enough for this Transaction. <br><br>
                Please Renew Balance and Try Again, <br> <br>
                 <a href="/home" style="color: black;">click here </a> to Return Home 
                </div>

                <div class="alert alert-danger collapse" id="alert1"  style="width: 320px; margin-left:30px;">
                  Available Balance is not Enough for Transactions <br>
                  Please Renew Balance and Try Again,

                   <a href="/home" style="color: black;">click here </a> to Return Home 
                  </div>
            </div>

            
           </div>
            </form> 
           <!-- {{ Form::close() }} -->
        
          </div>
    </section>
           
     
     <script src="{{asset('dist/js/jquery-2.1.0.js')}}"></script>
     <script src="{{asset('dist/js/jquery-ui-1.10.1.custom.min.js')}}"></script>
     <script src="{{asset('js/marketprice.js')}}"></script>

     <script>
          
      //     $('#articleName').on('change', function(e){
      //   console.log(e);
      //   var art_id = e.target.value;
      //   $.get('/json-getkValue?art_id=' + art_id,function(data) {
      //     console.log(data);
      //     $('#karrotId').empty();
      //     $('#karrotId').append('<option value="0" disabled="true" selected="true">Select</option>');

      //     $.each(data, function(index, kValObj){
      //       $('#karrotId').append('<option value="'+ kValObj.kValues +'">'+ kValObj.kValues+'</option>');
      //     })
      //   });
      // });
      $(document).ready(function() {
        var mainBal =parseFloat($('#totalBal').val());
          if(mainBal<1000)
          $('#alert1').show('fade') && $('#subTrans').attr('disabled','disabled');
      
         
} );

      $('#karrotId').on('change', function(e){
        console.log(e);
        var k_id = e.target.value;
        $.get('/json-getmprice?k_id=' + k_id,function(data) {
          console.log(data);
          $('#mPrice').empty();
          

          $.each(data, function(index, mpriceObj){
            $('#mPrice').append('<label value="'+ mpriceObj.marketPrice+'">'+ mpriceObj.marketPrice+'</label>');
          })
        });
      });

      $('#karrotId').on('change', function(e){
        console.log(e);
        var k_id = e.target.value;
        $.get('/json-getaprice?k_id=' + k_id,function(data) {
          console.log(data);
          $('#asPrice').empty();
          

          $.each(data, function(index, apriceObj){
            $('#asPrice').append('<label value="'+ apriceObj.assessedPrice+'">'+ apriceObj.assessedPrice+'</label>');
          })
        });

        
      });

      $('#karrotId').on('change', function(e){
        console.log(e);
        var k_id = e.target.value;
        $.get('/json-getintrestRate?k_id=' + k_id,function(data) {
          console.log(data);
          $('#interestRate').empty();
          

          $.each(data, function(index, iRateObj){
            $('#interestRate').append('<option value="'+ iRateObj.intrest_rate+'">'+ iRateObj.intrest_rate+'</option>');
          })
        });

        

        
      });
      $('#advance').keyup(function(){
          var mainBal =parseFloat($('#totalBal').val());
          var aPrice =parseFloat($('#faPrice').val());
          var advance=parseFloat($(this).val());

          if(advance>mainBal || advance>aPrice)
          $('#alert').show('fade') && $('#subTrans').attr('disabled','disabled');
      
          else
          $('#alert').hide('fade') && $('#subTrans').removeAttr('disabled');



        });

        // $('#advance').keyup(function(){
        //   var aPrice =parseFloat($('#faPrice').val());
        //   var advance=parseFloat($(this).val());

        //   if(advance>aPrice)
        //   $('#alert1').show('fade') && $('#subTrans').attr('disabled','disabled');
      
        //   else
        //   $('#alert1').hide('fade') && $('#subTrans').removeAttr('disabled');;



        // })

      // $(document).ready(function(){
      //   $('#advance').keyup(function(){
      //     var mainBal =parseFloat($('#mainBalance').val());
      //     var aPrice =parseFloat($('#faPrice').val());
      //     var advance=parseFloat($(this).val());

      //     if(advance>mainBal)
      //     $('#alert').show('fade') && $('#subTrans').attr('disabled','disabled');
      
      //     else
      //     $('#alert').hide('fade') && $('#subTrans').removeAttr('disabled');;



      //   });
      // });
      
      // $(document).ready(function(){
      //   $('#advance').keyup(function(){
      //     var aPrice =parseFloat($('#faPrice').val());
      //     var advance=parseFloat($(this).val());

      //     if(advance>aPrice)
      //     $('#alert1').show('fade') && $('#subTrans').attr('disabled','disabled');
      
      //     else
      //     $('#alert1').hide('fade') && $('#subTrans').removeAttr('disabled');;



      //   });
      // });
      
      function Validate(){
             var kval=document.getElementById("karrotId");
          if(karrotId.value==""){     
         $('#alert3').show('fade');
         
         return false;
        }
        return true

        }
  

    
   </script>


@endsection