@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-4">
          <h1 class="m-0 text-dark">Edit Transaction </h1>
          
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


               <!-- Edit Transaction form -->
          <!-- --------------------------------------- -->
          <!-- --------------------------------------- -->

                <form method="post" action="{{route('home.transactions.update',$eTrans->id)}}">
                <input type="hidden"  name="_token" value="{{csrf_token()}}">
                <input type="text" name="euser" hidden value="{{Auth::user()->name}}">
                {{csrf_field()}}
                {{method_field('PUT')}}
            <div class="row">
            

            <!-- --------------------------------------- -->
            <!-- --------------------------------------- -->

           <div class="col-8">
     <div class="card" style="width: 47rem;"> 
     <div class="card-body">
        <table class="table">
            <tr>
              <td colspan="2" style="text-align: center;"><h6 style="text-decoration:underline; "><b>Customer Details</b></h6></td>
              <td colspan="2" style="text-align: center;"><h6 style="text-decoration:underline;"><b>Article Details</b></h6></td>
            </tr>
            <tr>
              <td colspan="2"><div class="input-group-sm">
                <input type="text" name="eName" class="form-control" style="width: 400px;" placeholder="Full Name" value="{{$eTrans->fullName}}" required>
                </div>
              </td>
              <td style="text-align: right;">Select Article</td>
              <td><div class="input-group-sm">
                <select name="articleName" id="articleName" readonly class="form-control" style="width: 100px;" > 
                  @foreach($artArray as $key => $value)
                  <option value="{{$value->artName}}" {{$value->artName == $eTrans->article ? 'selected':''}}>{{$value->artName}}</option>
                  @endforeach
                </select>
              </div>
            </td> <br>
            </tr>

            <tr>
              <td colspan="2"><div class="input-group-sm">
                <input type="text" name="eNIC" pattern="([0-9]{9}[V]|[0-9]{12})" oninvalid="alert('Please enter valid old or new NIC No.')" title="Please enter valid old or new NIC No." class="form-control" value="{{$eTrans->nicNo}}" style="width: 400px;" placeholder="NIC No." required>
              </div>
              </td>
              <td style="text-align: right;">Select Karrot Value</td>
              <td><div class="input-group-sm">
                <select id="karrotId" name="karrotId" readonly class="form-control" style="width: 100px;">  
                @foreach($kValArray as $key => $value)
                  <option value="{{$value->kValue}}" {{$value->kValue == $eTrans->kValue ? 'selected':''}}>{{$value->kValue}}</option>
                  @endforeach
                  </select>
              </div>
            </td>
            </tr>

            <tr>
              <td colspan="2"><div class="input-group-sm">
                <textarea cols="30" rows="3" type="text" name="eAddress" class="form-control" value="{{$eTrans->address}}" style="width: 400px;" placeholder="Address">{{$eTrans->address}}</textarea>
              </div>
             </td>
             <td style="text-align: right;">Gold Weight</td>
             <td><div class="input-group-sm">
              <input type="text" id="goldWeight" readonly name="egw" pattern="([0-9]+|[0-9]+[\.]?[0-9]{1,2})$" oninvalid="alert('You cannot enter letters in here')" title="You cannot enter letters in here" class="input form-control" value="{{$eTrans->goldWeight}}" style="width: 100px;">  
                </div>
             </td>
            </tr>

            <tr>
              <td colspan="2"> <div class="input-group-sm">
                <input type="text" name="econtact" pattern="[0-9]{9}" oninvalid="alert('Please enter Contact number with 10 digits')" title="Please Contact number with 10 digits" class="form-control" style="width: 400px;" value="{{$eTrans->contactNo}}" placeholder="Contact No:">
              </div>
              </td>
              <td style="text-align: right;">Market Price</td>
              <td><div class="input-group-sm">
                <input type="text" id="tmPrice" name="etMPrice" readonly class="input form-control" value="{{$eTrans->marketPrice}}"  style="width: 100px;" > 
              </div>
              </td>
            </tr>

            <tr>
              <td colspan="2"><div class="input-group-sm">
                <input type="email" name="eemail" class="form-control" style="width: 400px;" value="{{$eTrans->email}}" placeholder="Email Address">
              </div>
              </td>
              <td style="text-align: right;">Assessed Price</td>
              <td><div class="input-group-sm">
                <input type="text" name="efaPrice" readonly id="faPrice" readonly class="form-control" value="{{$eTrans->assessedPrice}}" style="width: 100px;">
              </div>
            </td>
            </tr>

            <tr>
              <td colspan="2"></td>
              <td style="text-align: right;">Advance</td>
              <td><div class="input-group-sm">
                <input type="text" name="eadvance" readonly id="advance"  value="{{$eTrans->advance}}" class="input form-control" style="width: 100px;" >
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2"></td>
              <td style="text-align: right;">Monthly Interest</td>
              <td><div class="input-group-sm">
                <input type="text" name="einterest"  id="interest" value="{{$eTrans->monthInterest}}" readonly class="form-control" style="width: 100px;">
                 </div>
              </td>
            </tr>
             <tr>
                 <td colspan="2"></td>
                 <td></td>
                 <td style="text-align: right;" ><button type="submit"  class="btn btn-primary">Submit</button></td>
                
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
                    <td style="text-align: right;">Main Balance : </td>
                        <td style="text-align: right;">
                         <input type="text" dir="rtl" name="mainBalance" class="form-control" id="mainBalance" value="20000" style="width:100px;" readonly></td>
                        <td>LKR</td>
                    </tr> 

                    <tr>
                    <td style="text-align: right;">Main Balance :</td>
                        <td style="text-align: right;">
                         <input type="text" dir="rtl" name="mainBalance1" class="form-control" id="mainBalance1" value="" style="width:100px;" readonly></td>
                        <td>LKR</td>
                    </tr>

                    <tr>
                        <td style="text-align: right;"> Market Price(1g) : </td>
                        <td style="text-align: right;"><label for="" dir="rtl" id="mPrice" name="mPrice" class="form-control" style="width: 80px;" ></label> </td>
                        <td>LKR</td>
                    </tr>
                   
                    <tr>
                       <td style="text-align: right;">Assessed Price(1g) :</td> 
                       <td style="text-align: right;"><label name="aPrice" dir="rtl" id="asPrice" class="form-control" style="width: 80px;"></label> </td>
                       <td>LKR</td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: right;">Interest Rate :</td>
                        <td style="text-align: right;"><input type="text" dir="rtl" name="einterestRate" class="form-control" value="{{$eTrans->interestRate}}" id="interestRate" value="2.5" style="width:80px;" readonly></td>
                        <td>%</td>
                    </tr>
    
                    
                    
                    
                </table>
               </div>
              </div>
            </div>

            
           </div>
        </form>
          </div>
    </section>
           
     


    



    
<!-- <input type="text" hidden class="form-control" name="user" value="{{Auth::user()->name}}" style="width: 100px;"> -->
           

         
  
    
    

     <script src="{{asset('dist/js/jquery-2.1.0.js')}}"></script>
     <script src="{{asset('dist/js/jquery-ui-1.10.1.custom.min.js')}}"></script>
     <script src="{{asset('js/marketprice.js')}}"></script>

     <script>


      $('#karrotId').on('change', function(e){
        console.log(e);
        var k_id = e.target.value;
        $.get('/json-getmprice?k_id=' + k_id,function(data) {
          console.log(data);
          $('#mPrice').empty();
          

          $.each(data, function(index, mpriceObj){
            $('#mPrice').append('<label value="'+ mpriceObj.marketPrice +'">'+ mpriceObj.marketPrice+'</label>');
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
            $('#asPrice').append('<label value="'+ apriceObj.assessedPrice +'">'+ apriceObj.assessedPrice+'</label>');
          })
        });
      });

      
    
         
   </script>


@endsection