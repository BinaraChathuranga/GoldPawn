<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-6" style="text-align: center;">
           <img src="{{asset('img/gp3.png')}}" alt="" style="width: 500px; height: 40px; ;" class="mt-4"> <br>
            <b>GOLDEN PAWN Pawning Center</b><br>
            <b>No.144/2, Arambegama road, Pilimathalawa</b><br>
            <b>Tel. No : 076-4206423 / 075-6414671</b><br>
            <b>goldenPawn@gmail.com</b>

</div>


   <div class="row">
        <div class="col-4">
           <div class="card shadow-none border-bottom-0 border-top-0" style="width: 25rem; margin-left:-40px;"> 
               <div class="card-body">
       
           <table class="table-sm ml-1">

                <tr>
                 Date : <?php $date=date("Y/m/d"); echo $date ?> 
                </td>
                </tr>
                <br>

                <tr>
                <td style="text-align: left;"> <b>Transaction : {{$e_info->id}}</b> </td>
                </tr>

               <tr>
                 <td style="text-align:left;">Full Name </td> 
                 <td>:</td>
                 <td >{{$e_info->fullName}}</td>
               </tr>

               <tr>
                   <td style="text-align: left;">NIC</td>
                   <td>:</td>
                   <td>{{$e_info->nicNo}}</td>
               </tr>
               <br>

               <tr>
                   <td style="text-align:left;"><b>Article Details</b></td>
               </tr>

               <tr>
                  <td  style="text-align:left;"> Article Name</td> 
                  <td>:</td>
                  <td>{{$e_info->article}}</td>                        
                </tr>
                 
                <tr>
                   <td style="text-align: left;" >Karat Value</td>
                   <td>:</td>
                   <td>{{$e_info->kValue}}</td>
                   
               </tr>

               <tr>
                   <td style="text-align: left;">Total Weight Of Gold</td>
                   <td>:</td>
                   <td>{{$e_info->goldWeight}} g</td>
                </tr>       

                <tr>
                    <td style="text-align:left;">Market Price</td>
                    <td>:</td>
                    <td>{{$e_info->marketPrice}} LKR</td>
                    
                 </tr>
                 <br>

                 <tr>
                 <td style="text-align: left;"><b>Transaction Details</b></td>
                </tr>

                <tr>
                <td style="text-align: left;">Assessed Price</td>
                <td>:</td>
                <td>{{$e_info->assessedPrice}} LKR</td>
             </tr>

             

             <tr>
                <td style="text-align: left;">Monthly Interest Rate</td>
                <td>:</td>
                <td>{{$e_info->interestRate}}%  </td>
             </tr>

             <tr>
                <td style="text-align:left;">Advance</td>
                <td>:</td>
                <td>{{$e_info->advance}} LKR</td>
                
             </tr>

             <tr>
                <td style="text-align: left;">Interest-Per Month</td>
                <td>:</td>
                <td>{{$e_info->monthInterest}} LKR</td>
                
             </tr>

             <tr>
                <td style="text-align: left;">Pawned Date</td>
                <td>:</td>
                <td><?php
                    $createdDate=$e_info->created_at; echo date($createdDate)
                    ?></td>
                
             </tr>


</table>
    </div>
       </div>
           </div>
           <br>
           <br>

          
       <table>
           
           <tr>
               <td> {{$e_messege}}</td> 
           </tr>
           
       </table>
        <br>
        <br>

       <table class="table-sm">
           <tr>
           <td style="text-align: left;">Yours Faithfully<br> ............................................................ <br> Manager</td> <br>
           </tr>
       </table>
    </div>
</div> 
    
</body>
</html>