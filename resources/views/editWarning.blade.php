@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">



<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">Edit Warning</h1>
          </div><!-- /.col -->
          <!-- /.col -->
          <div class="col-8">
          <img style="height: 50px; margin-left: -85px; width:805px;" src="{{asset('img/gp.png')}}" alt="">
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
        
   
 
   </div>
    </div>
  </div>
  
  <hr>
 

    
   <div class="panel panel-default">
    <div class="panel-body">

      
          <h4 class="offset-1">1st Warning</h3> <hr><br>
          <div class="row">
          <div class="col-2 offset-1" >
           
            @foreach($warning as $w1)
            <form action="{{route('home.Warning.update',$w1->id)}}" method="post">
              {{csrf_field()}}
              {{method_field('PUT')}}
          <h6>After</h6> <input type="number" pattern="[0-9]+" oninvalid="alert('You cannot enter letters here')" class="form-control"   name="warn1duration" style="width:100px;" value="{{$w1->warn1_duration}}"> <h6>Days</h6>
        </div>
      
        <div class="col-8">
          <h6>Sinhala</h6> <textarea name="warn1notice" id="warn1notice" class="form-control"   cols="30" rows="10"> {{$w1->warn1_notice}} </textarea>
          <br>
          <h6>English</h6> <textarea name="warn1noticeeng" id="warn1notice" class="form-control"   cols="30" rows="10"> {{$w1->warn1_notice_eng}} </textarea>
          
           <br>
          <button type="submit" class="btn btn-success offset-11">Edit</button>
        </div>
      </div>
        
          @endforeach
        
      <hr>

          <h4 class="offset-1">2nd Warning</h3> <hr><br>
            @foreach($warning as $w2)
            <div class="row">
            <div class="col-2 offset-1" >
            <h6>After</h6> <input type="number" pattern="[0-9]+" oninvalid="alert('You cannot enter letters here')" class="form-control"   name="warn2duration" style="width:100px;" value="{{$w2->warn2_duration}}"> <h6>Days</h6>
          </div>
        
          <div class="col-8">
          <h6>Sinhala</h6> <textarea name="warn2notice" id="warn1notice" class="form-control"   cols="30" rows="10"> {{$w2->warn2_notice}} </textarea>
          <br>
          <h6>English</h6> <textarea name="warn2noticeeng" id="warn1notice" class="form-control"   cols="30" rows="10"> {{$w2->warn2_notice_eng}} </textarea>
          <br>
            <button type="submit" class="btn btn-success offset-11">Edit</button>
          </div>
        </div>
            @endforeach
        <hr>

          <h4 class="offset-1">3rd Warning</h3> <hr><br>
            @foreach($warning as $w3)
            <div class="row">
            <div class="col-2 offset-1" >
            <h6>After</h6> <input type="number" pattern="[0-9]+" oninvalid="alert('You cannot enter letters here')" class="form-control"  name="warn3duration" style="width:100px;" value="{{$w3->warn3_duration}}"> <h6>Days</h6>
          </div>
        
          <div class="col-8">
          <h6>Sinhala</h6> <textarea name="warn3notice" id="warn1notice" class="form-control"   cols="30" rows="10"> {{$w3->warn1_notice}} </textarea>
          <br>
          <h6>English</h6> <textarea name="warn3noticeeng" id="warn1notice" class="form-control"   cols="30" rows="10"> {{$w3->warn1_notice_eng}} </textarea>
          <br>
            <button type="submit" class="btn btn-success offset-11">Edit</button>
          </div>
        </div>
      </form>
        @endforeach
      
        <br>
      
      
      
</div>
</div>


     

     

     
                   
    

   </section>

  <script src="{{asset('dist/js/jquery-2.1.0.js')}}"></script>
  <script src="{{asset('dist/js/jquery-ui-1.10.1.custom.min.js')}}"></script>
  
  <script src="{{asset('jquery/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
        


  <script>
    $(document).ready( function () {
    
      $('#warn1notice').keyup(function(){
          var w1no=getElementById("warn1notice").text();
          
          $('#warn1').val(w1no);

     });
} );

          // Delete Transactions
          // ------------------------------------
          // ------------------------------------



</script>
  
  
 
 

  
   
    
    
    
@endsection