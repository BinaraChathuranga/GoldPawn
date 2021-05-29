@extends('layouts.COadmin')

@section('content')

<form id="email" action="/sendEmail2" method="post">
    {{csrf_field()}}

    

    <div class="card offset-1 " style="width: 55rem; height: 35rem;"  > 
        <div class="card-header" style="text-align: center;">
            <h3>2nd Warning Email</h3>
        </div>

        <div class="card-body">
           <table class="table-sm">
   
               <tr>
                   <td>Email</td>
                   <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </td>
                   <td>  <input type="email" class="form-control" name="email"  id="name" value="{{$warn->email}}" style="width: 300px;"></td>
               </tr>

               <tr>
                    <td>Subject</td>
                    <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                    <td><input type="text" class="form-control"  name="subject" style="width: 300px;" value="2nd Warning Email" readonly></td>
              </tr>
                 @foreach($warning as $w)
              <tr>
                    <td>Messege</td>
                    <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                    <td> <textarea type="text" class="form-control" readonly  name="messege" style="width: 700px; height:300px;">
{{$w->warn2_notice_eng}}
</textarea></td>
                    <input type="text" hidden name="id" value="{{$warn->id}}">
             </tr>
                @endforeach

            </table>
           </div>

           <div class="card-footer">
            <button  type="submit"  class="btn btn-info offset-9"> send</button>
           </div>
       </div>
   </div> 


  
   
    
    
    


   
     
    <!-- <a href="/co-warnIssued/{{$warn->id}}" class="btn btn-info" onclick="$(this).closest('form').submit()"> Send Email</a> -->

    </form>
   


    


<script src="{{asset('jquery/jquery.min.js')}}"></script>
   <script src="{{asset('dist/js/jquery-2.1.0.js')}}"></script>

<script>
    
    
    
  
</script>

@endsection