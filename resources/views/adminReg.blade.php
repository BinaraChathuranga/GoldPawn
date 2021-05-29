@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">



<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">Register</h1>
          </div><!-- /.col -->

          <!-- /.col -->
          <div class="col-8">
          <img style="height: 50px; margin-left: -190px; width:905px;" src="{{asset('img/gp.png')}}" alt="">
          </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

          <!-- insert Transaction form -->
          <!-- --------------------------------------- -->
          <!-- --------------------------------------- -->
            
              <!-- {{ Form::open(['method'=>'post']) }} -->
              <hr>

            <a href="/activeUsers" class="btn btn-primary">Active Users</a>
            <a href="/regCustomers" class="btn btn-primary">Registered Customers</a>

            <hr>
             
            <div class="row">
              @if(count($errors)>0)
                  @foreach($errors->all() as $error)
                  <p class="alert alert-danger">{{$error}}</p>
                  @endforeach
              @endif

            
              
              <!-- --------------------------------------- -->
              <!-- --------------------------------------- -->
           <div class="col-6 offset-3">
     <div class="card" style="width: 35rem; margin-left:-15px;" > 
        <div class="card-header">
            <h5>Admin Register</h5>
        </div>
     <div class="card-body">
      <form method="post" action="/AdminRegister1"> 
              
        {{csrf_field()}}
        <div class="input-group-sm">
            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" style="width: 500px;" placeholder="Name" required>
            </div>
            <br>

            <div class="input-group-sm">
                <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" style="width: 500px;" placeholder="Email Address" required>
                </div>
                <br>

                <div class="input-group-sm">
                     <select name="" id="roleDrop" class="form-control" value="" style="width: 150px;" required> 
                     <option value="" hidden selected >-select a Role-</option>
                      <option value="1">admin</option>
                      <option value="2">co_admin</option>
                      
                    </select>
                  </div>

                  <div class="input-group-sm">
                    <input type="text" hidden name="role" id="role" class="form-control" value="" style="width: 500px;" placeholder="Role">
                  </div> <br>

                <div class="input-group-sm">
                    <input type="password" name="password" id="password" class="form-control" style="width: 500px;" placeholder="Password" required>
                    </div><br>

                <div class="input-group-sm">
                        <input type="password" name="password_confirmation" id="repassword" class="form-control" style="width: 500px;" placeholder="Confirm Password" required>
                        </div>

                        <div class="card-footer">
                          <button class="btn btn-primary" type="submit">OK</button>
                      </div>
                    </form>
        </div>
      
    </div>
  
</div> 




              <!-- --------------------------------------- -->
              <!-- --------------------------------------- -->

        

            
           </div>
           
           <!-- {{ Form::close() }} -->
        
          </div>
    </section>

    <script src="{{asset('dist/js/jquery-2.1.0.js')}}"></script>
     <script src="{{asset('dist/js/jquery-ui-1.10.1.custom.min.js')}}"></script>

     <script>
       var select=document.getElementsByTagName('select')[0];
       var input=document.getElementById('role');

       select.onchange=function(){
         input.value=select.options[select.selectedIndex].text;
       }

     </script>

    @endsection