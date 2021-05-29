@extends('layouts.admin')

@section('content')

   <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}"> 
 

   
   
   <section>
    <body>
        
   
    <div class="card" style="width: 1100px;" id="letter"> 
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
               <td style="text-align: left;"> <b>Transaction : {{$warn1->id}}  </b> </td>
               <td style="text-align: center;"><h3>3rd Warning Letter</h3></td>
               <td style="text-align: right;"> Date : <?php $date=date("Y/m/d"); echo $date ?> </td>
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
                   <td >{{$warn1->fullName}}</td>
               </tr>

               <tr>
                   <td style="text-align: left;">NIC  <br>
                   (ජා.හැ.අං.)
                   </td>
                   <td>:</td>
                   <td>{{$warn1->nicNo}}</td>
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
                   <td>{{$warn1->article}}</td>                        
                </tr>
                 
                <tr>
                   <td style="text-align: left;" >Karat Value  <br>
                   (රන් අනුපාතය)
                   </td>
                   <td>:</td>
                   <td>{{$warn1->kValue}}</td>
                   
               </tr>

               <tr>
                   <td style="text-align: left;">Total Weight Of Gold <br>
                       (මුළු රන් බර)
                   </td>
                   <td>:</td>
                   <td>{{$warn1->goldWeight}} g</td>
                </tr>       

                <tr>
                    <td style="text-align:left;">Market Price <br>
                        (වෙළඳපොල වටිනාකම)
                    </td>
                    <td>:</td>
                    <td>{{$warn1->marketPrice}} LKR</td>
                    
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
                <td>{{$warn1->assessedPrice}} LKR</td>
             </tr>

             

             <tr>
                <td style="text-align: left;">Monthly Interest Rate <br>
                    (මාසික පොලී අනුපාතිකය)
                </td>
                <td>:</td>
                <td>{{$warn1->interestRate}}%  </td>
             </tr>

             <tr>
                <td style="text-align:left;">Advance <br>
                    (අත්තිකාරම් මුදල)
                </td>
                <td>:</td>
                <td>{{$warn1->advance}} LKR</td>
                
             </tr>

             <tr>
                <td style="text-align: left;">Interest-Per Month <br>
                    (මාසික පොලී මුදල)
                </td>
                <td>:</td>
                <td>{{$warn1->monthInterest}} LKR</td>
                
             </tr>

             <tr>
                <td style="text-align: left;">Pawned Date <br>
                    (උකසට තැබූ දිනය)
                </td>
                <td>:</td>
                
                <td><?php
                    $createdDate=$warn1->created_at; echo date($createdDate)
                    ?></td>
                
             </tr>

          </table>
          
    
        </div>
    </div>
</div>
       </div>
        <br>
       <hr>

       <div class="row">
       <div class="col-12 ">

          
       <table>
           @foreach($warning as $w)
           <tr>
           <td>{{$w->warn3_notice}}</td>
           </tr> <br>
           <tr>
           <td>{{$w->warn3_notice_eng}}</td>
           </tr>
           @endforeach
       </table>
       <br>

       <table class="table">
           <tr >
           <td style="text-align: right;">Yours Faithfully | මෙයට විශ්වාසී <br> ............................................................ <br> Manager | කළමනාකරු</td> <br>
           
           </tr>
       </table>
    </div>
</div>

<hr>
        </div>
      </div>
   </div>

   <div class="row">
       <div class="col-2 offset-10">
    <a href="#" class="btn btn-secondary" id="print">Print</a>
    <a href="/warn3letterIssued/{{$warn1->id}}" class="btn btn-primary" id="">OK</a>
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
        $('#letter').printThis();
    })
</script>


<!-- <script>
    window.addEventListener("load", window.print());
</script>  -->






@endsection





