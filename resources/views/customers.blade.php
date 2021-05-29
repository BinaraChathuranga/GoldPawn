@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">




<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">Registered Customers</h1>
          </div><!-- /.col -->
          <!-- /.col -->
          <div class="col-8">
          <img style="height: 50px; margin-left: -95px; width:820px;" src="{{asset('img/gp.png')}}" alt="">
            </div>

          

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <hr>
    <!-- /.content-header -->
 <!-- Main content -->
 <section class="content">
<div class="row">
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-body">
      

      

  <body>
   
    
     
   <div class="panel panel-default">
    <div class="panel-body" id="report">
    <div class="row offset-2" id="incomeReport">

     
   
      <div class="col-10">

       
        <h5>Registered Customers</h5>
        <hr>

    

      <!-- Income by completing Transaction -->
      <!-- --------------------------------------- -->
      <!-- --------------------------------------- -->
      
      <table id="myTable" class="table table-striped table-bordered" >
        <thead>
        <tr>
          <th  style="text-align: center;">User Id</th>
          <th  style="text-align: center;">User Name</th>
          <th  style="text-align: center;">Email</th>
          <th  style="text-align: center;">User Role</th>
          <th  style="text-align: center;">Registered at</th>
          
        </tr>
        </thead>
        
        <tbody>
          @foreach($aUsers as $ac)
          <tr>
            <td style="text-align: center;">{{$ac->id}}</td>
            <td style="text-align: center;">{{$ac->name}}</td>
            <td style="text-align: center;">{{$ac->email}}</td>
            <td style="text-align: center;">{{$ac->role}}</td>
            <td style="text-align: center;">{{$ac->created_at}}</td>
            
          </tr>
          @endforeach
         
        </tbody>

        
  
    </table>
    <hr>
   
        </div>
    
       
       
      
      
</div>
</div>

      
  </body>



    </div>

     

     

     
                   
              
      </div>
    </div>
  </div>

   </section>

   
  


     
   
     
              
   
  
   
  <script src="{{asset('jquery/jquery.min.js')}}"></script> 
  <script src="{{asset('dist/js/jquery-2.1.0.js')}}"></script>
  <script src="{{asset('dist/js/jquery-ui-1.10.1.custom.min.js')}}"></script>
  <script src="{{asset('js/printThis.js')}}"></script>
  
  
 
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>

  
        
  <script>



    $(document).ready( function () {
      
    $('#myTable').DataTable({

     
        "ordering": false,
        "info":     false,

    
      );
    }

    });
   } );

$('#print').click(function(){
        $('#myTable').printThis();
    })

    



         
</script>
  

  

      




  
  
 
 

  
   
    
    
    
@endsection

