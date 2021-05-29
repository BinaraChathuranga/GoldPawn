@extends('layouts.admin')

@section('content')

   <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}"> 
 

   
   
   <section>
    <body>
        
   
    <div class="card" style="width: 1100px;" id="invoice"> 
    <div class="card-body">

   <div class="container" >
       <hr>
   <div class="row">
   <div class="col-3">
   </div>

            <!-- completed Transaction Table -->
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
               <td style="text-align: left;"> <b>Transaction : {{$invo->id}}  </b> </td>
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
                   <td >{{$invo->fullName}}</td>
               </tr>

               <tr>
                   <td style="text-align: left;">NIC  <br>
                   (ජා.හැ.අං.)
                   </td>
                   <td>:</td>
                   <td>{{$invo->nicNo}}</td>
               </tr>

               <tr>
                   <td style="text-align:left;">Address <br>
                       (ලිපිනය)
                   </td>
                   <td>:</td>
                   <td>{{$invo->address}}</td>
                </tr>

                <tr>
                   <td style="text-align: left;">Telephone No<br>
                       (දුරකථන අංකය)
                   </td>
                   <td>:</td>
                   <td>{{$invo->contactNo}}</td>
                </tr>

                <tr>
                   <td style="text-align:left;">Email Address <br>
                       (ඊමේල් ලිපිනය)
                   </td>
                   <td>:</td>
                   <td>{{$invo->email}}</td>
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
                   <td>{{$invo->article}}</td>                        
                </tr>
                 
                <tr>
                   <td style="text-align: left;" >Karat Value  <br>
                   (රන් අනුපාතය)
                   </td>
                   <td>:</td>
                   <td>{{$invo->kValue}}</td>
                   
               </tr>

               <tr>
                   <td style="text-align: left;">Total Weight Of Gold <br>
                       (මුළු රන් බර)
                   </td>
                   <td>:</td>
                   <td>{{$invo->goldWeight}} g</td>
                </tr>       

                <tr>
                    <td style="text-align:left;">Market Price <br>
                        (වෙළඳපොල වටිනාකම)
                    </td>
                    <td>:</td>
                    <td>{{$invo->marketPrice}} LKR</td>
                    
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
                <td>{{$invo->assessedPrice}} LKR</td>
             </tr>

             

             <tr>
                <td style="text-align: left;">Monthly Interest Rate <br>
                    (මාසික පොලී අනුපාතිකය)
                </td>
                <td>:</td>
                <td>{{$invo->interestRate}}%  </td>
             </tr>

             <tr>
                <td style="text-align:left;">Advance <br>
                    (අත්තිකාරම් මුදල)
                </td>
                <td>:</td>
                <td>{{$invo->advance}} LKR</td>
                
             </tr>

             <tr>
                <td style="text-align: left;">Interest-Per Month <br>
                    (මාසික පොලී මුදල)
                </td>
                <td>:</td>
                <td>{{$invo->monthInterest}} LKR</td>
                
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
                    <td style="text-align: right;">Pawning Advance <br>
                     (උකස් අත්තිකාරම)</td> 
                    <td>:</td>
                    <td style="text-align: left;">
                      <b>{{$invo->advance}} LKR</b> 
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
       <div class="col-2 offset-10">
    <a href="#" class="btn btn-secondary" id="print">Print</a>
    <a href="/invoiceIssued/{{$invo->id}}" class="btn btn-primary" id="">OK</a>
   </div>
</div>
   
   </body>
  
   
</section>
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/invoice/jquery.min.js')}}"></script>
<script src="{{asset('js/printThis.js')}}"></script>

<script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>

<script>
    $('#print').click(function(){
        $('#invoice').printThis();
    })
</script>


<!-- <script>
    window.addEventListener("load", window.print());
</script>  -->






@endsection





