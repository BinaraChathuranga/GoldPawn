@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}"> 
 

   
   
   <section>
    <body>
       
        
        <input type="text" hidden name="user" value="{{Auth::user()->name}}">
        
        
   
    <div class="card" style="width: 1100px;" id="invoice"> 
    <div class="card-body">

      <div class="container" >
       <hr>
   <div class="row">
   <div class="col-3">
   </div>
                <!-- Invoice -->
            <!-- --------------------------------------- -->
            <!-- --------------------------------------- -->
            <!-- --------------------------------------- -->
                
            <div class="col-6" style="text-align: center;">
           <img src="{{asset('img/gp3.png')}}" alt="" style="width: 500px; height: 40px; ;" class="mt-4"> <br>
           <h6> <b>GOLDEN PAWN Pawning Center</b> </h6>
           <h6><b>No.144/2, Arambegama road, Pilimathalawa</b> </h6>
           <h6> <b>Tel. No : 076-4206423 / 075-6414671</b> </h6>
           <h6> <b>goldenPawn@gmail.com</b> </h6>

       </div>

   <div class="col-3">
   </div>
   </div>
   <hr>


    <div class="row">
        <div class="col-12 ">
           <table class="table  table-striped" >
           <tr>
               <td style="text-align: left;"> <b>Transaction : <input type="text" name="transId" value="{{$completedTrans->transId}}" readonly style="border:none;"></b> </td>
               <td style="text-align: right;"> Date : <?php $date=date("Y/m/d"); echo $date ?> &nbsp; Time : <?php $time=date("h:i:s"); echo $time ?> </td>
               <td>  </td>
           </tr>
       </table>
              
      </div>
   </div>


    <div class="row">
        <div class="col-4">
           <div class="card shadow-none border-bottom-0 border-top-0" style="width: 25rem; margin-left:-40px;"> 
               <div class="card-body">
       
           <table class="table-sm ml-1">
               <tr>
                  <td style="text-align:left;">Full Name <br>
                   (සම්පූර්ණ නම)
                 </td> 
                 <td>:</td>
                   <td > <input type="text" name="Name" value="{{$completedTrans->fullName}}" readonly style="border:none; width:150px;"> </td>
                   <input type="text" name="createdat" value="{{$completedTrans->created_at}}" hidden readonly style="border:none; width:150px;">
               </tr>

               <tr>
                   <td style="text-align: left;">NIC  <br>
                   (ජා.හැ.අං.)
                   </td>
                   <td>:</td>
                   <td><input type="text" name="NIC" value="{{$completedTrans->nicNo}}" readonly style="border:none; width:150px;"></td>
               </tr>

               <tr hidden>
                   <td style="text-align:left;">Address <br>
                       (ලිපිනය)
                   </td>
                   <td>:</td>
                   <td><input type="text" hidden name="Address" value="{{$completedTrans->address}}" readonly style="border:none; width:150px;"></td>
                </tr>

                <tr>
                   <td style="text-align: left;">Telephone No<br>
                       (දුරකථන අංකය)
                   </td>
                   <td>:</td>
                   <td><input type="text" name="contact" value="{{$completedTrans->contactNo}}" readonly style="border:none; width:150px;"></td>
                </tr>

                <tr>
                   <td style="text-align:left;">Email Address <br>
                       (ඊමේල් ලිපිනය)
                   </td>
                   <td>:</td>
                   <td><input type="text" name="email" value="{{$completedTrans->email}}" readonly style="border:none; width:150px;"></td>
                </tr>

               

           </table>
    </div>
       </div>
           </div>
    


       <div class="col-3 offset-1">
           <div class="card shadow-none border-bottom-0 border-top-0" style="width: 22rem; height:21rem; margin-left: -85px;" > 
               <div class="card-body">
       
            <table class="table-sm">

               <tr>
                   <th colspan="4" style="text-align:center;"> <b>Article Details</b> </th>
                   <th colspan="3" style="text-align:center;">  </th>
                   
               </tr>

               <tr>
                  <td  style="text-align:left;"> Article Name 
                     <br>
                   (උකස් භාණ්ඩයේ නම) 
                  </td> 
                  <td>:</td>
                   <td style="text-align:right;"><input type="text" name="articleName" value="{{$completedTrans->article}}" readonly style="border:none; width:50px;"></td>                        
                </tr>
                 
                <tr>
                   <td style="text-align: left;" >Karat Value  <br>
                   (රන් අනුපාතය)
                   </td>
                   <td>:</td>
                   <td style="text-align:right;"><input type="text" name="karrotId" value="{{$completedTrans->kValue}}" readonly style="border:none; width:50px;"></td>
                   
               </tr>

               <tr>
                   <td style="text-align: left;">Total Weight Of Gold <br>
                       (මුළු රන් බර)
                   </td>
                   <td>:</td>
                   <td><input type="text" dir="rtl" name="gw" value="{{$completedTrans->goldWeight}}" readonly style="border:none; width:50px;">g</td>
                   
                </tr>       

                <tr>
                    <td style="text-align:left;">Market Price <br>
                        (වෙළඳපොල වටිනාකම)
                    </td>
                    <td>:</td>
                    <td><input type="text" dir="rtl" name="tMPrice" value="{{$completedTrans->marketPrice}}" readonly style="border:none; width:50px;"> LKR</td>
                    
                 </tr>
                
             </table>
            </div>
          </div>
        </div>

           <div class="col-3">
           <div class="card shadow-none border-bottom-0 border-top-0" style="width: 22rem; height:21rem;"> 
            <div class="card-body">
    
         <table class="table-sm">

            <tr>
                <th colspan="4" style="text-align:center;"> <b>Transaction Details</b> </th>
                <th colspan="3" style="text-align:center;">  </th>
                
            </tr>

            <tr>
                <td style="text-align: left;">Assessed Price<br>
                    (තක්සේරු වටිනාකම)
                </td>
                <td>:</td>
                <td style="text-align:right;"><input type="text" dir="rtl" name="faPrice" value="{{$completedTrans->assessedPrice}}" readonly style="border:none; width:50px;"> LKR</td>
             </tr>

             

             <tr>
                <td style="text-align: left;">Monthly Interest Rate <br>
                    (මාසික පොලී අනුපාතිකය)
                </td>
                <td>:</td>
                <td style="text-align:right;"><input type="text" dir="rtl" name="intrestRate" value="{{$completedTrans->intrestRate}}" readonly style="border:none; width:50px;">%  </td>
             </tr>

             <tr>
                <td style="text-align:left;" >Advance <br>
                    (අත්තිකාරම් මුදල)
                </td>
                <td>:</td>
                <td style="text-align:right;" ><input type="text" dir="rtl" name="advance" value="{{$completedTrans->advance}}" readonly style="border:none; width:50px;"> LKR</td>
                
             </tr>

             <tr>
                <td style="text-align: left;">Total Interest <br>
                    (මුළු පොලී මුදල)
                </td>
                <td>:</td>
                <td style="text-align:right;">
                           <input type="text" name="interest" dir="rtl" value="{{$completedTrans->interestPay}}" readonly style="border:none; width:60px;"> LKR

                </td>
                
             </tr>

          </table>
    
        </div>
    </div>
</div>
       </div>

       <hr>

       <div class="row">
      <div class="col-12 ">
   <table>
           <tr>
               <td>I hereby pawn and hand over to the Golden Pawn center above gold articles owned by me. 
                      I declare that above particulars are true and correct. And agree to all terms and condions in contract of pawn.</td> 
           </tr>
           
           <tr>
               <td>මා සතු ඉහත සඳහන් රන් භාණ්ඩ මෙයින් "Golden Pawn" ආයතනයට උකස් කර භාර දෙමි. ඉහත සඳහන් තොරතුරු නිවැරැදි බව ප්‍රකාශ කරමින් , 
                   උකස් ගිවිසුමේ නියමයන් හා කොන්දේසි වලට එකඟ වන බව මෙයින් සහතික කරමි. </td>
               <td>  </td>
           </tr>
       </table>
       <br>

       <table class="table">
           <tr >
           <td style="text-align: right;">................................................................................ <br> Pawner's signature/උකස්කරුගේ අත්සන</td> <br>
           
           </tr>
       </table>
    </div>
</div>

<hr>

<div class="col-4 offset-7">

    <div class="card shadow-none" style="width: 25rem; margin-left: 40px;"> 
        <div class="card-body">
            <table class="table sm table-striped">
                <tr>
                    <td style="text-align: right;">Total To Pay <br>
                     (ගෙවිය යුතු මුළු මුදල)</td> 
                    <td>:</td>
                    <td style="text-align: left;" >
                       <input type="text" dir="rtl" name="totalpaid" value="{{$completedTrans->totalPay}}" readonly style="border:none; width:80px;">
                      <b> LKR</b> 
                    </td>
                </tr>
          </table>
        </div>
    </div>
</div>

<hr>
        </div>
     
      </div>
   </div>

   <div class="row">
    <div class="col-4 offset-8">

            <!-- completed Transaction Table -->
            <!-- --------------------------------------- -->
            <!-- --------------------------------------- -->
            <!-- --------------------------------------- -->
         <table class="table" id="comDeleteTrans" style=" border-bottom: none;" >
           <thead hidden>
               <tr>
               <th>1</th>
               <th>1</th>
               </tr>
           </thead>

           <tbody>
            <tr>
                <td hidden>{{$completedTrans->transId}}</td>
                <td><a href="#" class="btn btn-secondary" id="print">Print</a>
                <a href="/completeTransaction/{{$completedTrans->transId}}" class="btn btn-secondary">Ok</a> 
                
                </td>
            </tr>
          </tbody>
         </table>
    
   
   
   </div>

</div>
</body>
  
   
</section>
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/invoice/jquery.min.js')}}"></script>
<script src="{{asset('js/printThis.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>

<script>  
 $('#print').click(function(){
        $('#invoice').printThis();
 })
</script>









@endsection





