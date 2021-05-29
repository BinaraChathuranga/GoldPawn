@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{asset('js/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">



<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">Articles</h1>
          </div><!-- /.col -->

          <!-- /.col -->
          <div class="col-8">
          <img style="height: 50px; margin-left: -190px; width:905px;" src="{{asset('img/gp.png')}}" alt="">
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
        <hr>
        
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Article">
            New Article
          </button>

          <button hidden type="button" class="btn btn-primary" data-toggle="modal" data-target="#kValue">
            New Karrot Value
          </button>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kPrices">
            New Prices
          </button>
            <hr>
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 400px;">
                {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if(session('Redstatus'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 400px;">
                {{session('Redstatus')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <button class="btn btn-primary offset-10" id="print" style="width: 150px;">Print Report</button>
              <!-- insert Article Modals -->
          <!-- ------------------------------- -->
          <!-- ------------------------------- -->
          <!-- ------------------------------- -->


                  <!-- Article Modal -->
                  <!-- ------------------------------- -->
                  <!-- ------------------------------- -->
          <div class="modal fade" id="Article" tabindex="-1" role="dialog" aria-labelledby="Article" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color:gray;">
                  <h5 class="modal-title" id="exampleModalLabel" style="color: white;">New Article</h5>
                </div>

                <!-- insert Article form -->
                <form action="{{route('home.articles.store')}}" method="post">
                    {{csrf_field()}}
                <div class="modal-body">    
                        <div class="input-group-sm" form-group>
                            <h6 >Enter Article Name</h6>     
                             <input type="text" pattern="[A-Za-z]+" oninvalid="alert('You cannot enter numbers here')" title="You cannot enter numbers here" name="artName" class="form-control" style="width: 465px;" placeholder="" required>
                        </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="sumbit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
   

                   <!-- kValue Modal -->
                   <!-- ------------------------------- -->
                   <!-- ------------------------------- -->
  <div class="modal fade" id="kValue" tabindex="-1" role="dialog" aria-labelledby="kValue" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color:gray;">
                  <h5 class="modal-title" id="exampleModalLabel" style="color: white;">New Article</h5>
                </div>

                <!-- insert KValue form -->
                <form action="{{route('home.kvalue.store')}}" method="post">
                    {{csrf_field()}}
                <div class="modal-body">    
                        <div class="input-group-sm" form-group>
                            <h6 >Karrot Value</h6>    
                             <input type="text" name="kValue" class="form-control" pattern="[K][0-9]{2}" oninvalid="alert('Please Enter Format like (K22)')" title="Please Enter Format like (K22)"  style="width: 465px;" placeholder="" required> <br>

                             
                        </div>
                </div>


                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="sumbit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>

                  <!-- kPrices Modal -->
                  <!-- ------------------------------- -->
                  <!-- ------------------------------- -->

           <div class="modal fade" id="kPrices" tabindex="-1" role="dialog" aria-labelledby="kValue" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color:gray;">
                  <h5 class="modal-title" id="exampleModalLabel" style="color: white;">New Article</h5>
                </div>

                <!-- insert Prices form -->
                <form action="{{route('home.kPrices.store')}}" method="post">
                    {{csrf_field()}}
                <div class="modal-body">    
                        <div class="input-group-sm" form-group>
                            <div class="input-group-sm" form-group>
                            <h6 >Karrot Value</h6>    
                             <input type="text" name="karrotVal" class="form-control" pattern="[K][0-9]{2}" oninvalid="alert('Please Enter Format like (K22)')" title="Please Enter Format like (K22)"  style="width: 100px;" placeholder="" required> <br>

                             </div>
                            <h6 >Monthly Intrest Rate</h6>    
                             <input type="text" name="intrest" pattern="([0-9]{1,2}|[0-9]{1,2}[\.]?[0-9]{1,2})$" oninvalid="alert('Please enter 0-99 any value without letters')" title="Please enter 0-99 any value without letters" class="form-control" style="width: 100px;" placeholder="" required> <br>
                             <h6 >Market Price</h6>    
                             <input type="number" name="marketP" pattern="[0-9]+" oninvalid="alert('You cannot enter letters here')" title="You cannot enter letters here" class="form-control" style="width: 465px;" placeholder="" required> <br>
                             <h6 >Assessed Price</h6>    
                             <input type="number" name="assessedP" pattern="[0-9]+" oninvalid="alert('You cannot enter letters here')" title="You cannot enter letters here" class="form-control" style="width: 465px;" placeholder="" required> <br>
                             
                        </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="sumbit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>

  
               <!-- Edit Article Modals -->
          <!-- ------------------------------- -->
          <!-- ------------------------------- -->
          <!-- ------------------------------- -->

          <div class="modal fade" id="EArticle" tabindex="-1" role="dialog" aria-labelledby="Article" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color:gray;">
                  <h5 class="modal-title" id="exampleModalLabel" style="color: white;">New Article</h5>
                </div>

                <!-- Edit Article form -->
                <form action="" method="post" id="editArticle">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                <div class="modal-body">    
                        <div class="input-group-sm" form-group>
                            <h6 >Enter Article Name</h6>    
                             <input type="text" id="eartName" pattern="[A-Za-z]+" oninvalid="alert('You cannot enter numbers here')" title="You cannot enter numbers here" name="eartName" class="form-control" style="width: 465px;" placeholder="">
                        </div>
                        <br>

                        <select id="Astatus" name="Astatus" class="form-control" style="width: 100px;">  
                          <option value="active">active</option>
                          <option value="deleted">deleted</option>
                        </select> 
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="sumbit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>

           <!-- edit kValue Modal -->
           <!-- ------------------------------- -->
           <!-- ------------------------------- -->
  <div class="modal fade" id="editkValue" tabindex="-1" role="dialog" aria-labelledby="kValue" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:gray;">
          <h5 class="modal-title" id="exampleModalLabel" style="color: white;">New Article</h5>
        </div>

        <!-- edit KValue form -->
        <form action="" method="post" id="editkValues">
            {{csrf_field()}}
            {{method_field('PUT')}}
        <div class="modal-body">    
                <div class="input-group-sm" form-group>
                    <h6 >Karrot Value</h6>    
                     <input type="text" name="ekValue" pattern="[K][0-9]{2}" oninvalid="alert('Please Enter Format like (K22)')" title="Please Enter Format like (K22)" id="ekValue" class="form-control" style="width: 465px;" placeholder=""> <br>

                     
                </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="sumbit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>

              <!-- edit kprices Modal -->
              <!-- ------------------------------- -->
              <!-- ------------------------------- -->
  <div class="modal fade" id="editkPrice" tabindex="-1" role="dialog" aria-labelledby="kPrice" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:gray;">
          <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Edit Karat Values</h5>
        </div>

        <!-- edit Kprices form -->
        <form action="" method="post" id="editPrices">
            {{csrf_field()}}
            {{method_field('PUT')}}
        <div class="modal-body">    
                <div class="input-group-sm" form-group>
                  
                    <h6 >Karat Value</h6>    
                   <input type="text" name="ekarrotVal" readonly pattern="[K][0-9]{2}"  oninvalid="alert('Please Enter Format like (K22)')" title="Please Enter Format like (K22)" id="ekarrotVal" class="form-control" style="width: 100px;" placeholder="">
                    <br> 
                    <h6 >Intrest Rate</h6>    
                   <input type="text" name="eintrest" pattern="([0-9]{1,2}|[0-9]{1,2}[\.]?[0-9]{1,2})$"  oninvalid="alert('Please enter 0-99 any value without letters')" title="Please enter 0-99 any value without letters" id="eintrest" class="form-control" style="width: 100px;" placeholder=""> <br>
                   <h6 >Market Price</h6>    
                   <input type="number" name="emarketP" pattern="[0-9]+" oninvalid="alert('You cannot enter letters here')" title="You cannot enter letters here" id="emarketP" class="form-control" style="width: 465px;" placeholder=""> <br>
                   <h6 >Assessed Price</h6>    
                   <input type="number" name="eassessedP" pattern="[0-9]+" oninvalid="alert('You cannot enter letters here')" title="You cannot enter letters here" id="eassessedP" class="form-control" style="width: 465px;" placeholder=""> <br>
                   <h6 >Status</h6> 
                   <select id="status" name="status" class="form-control" style="width: 100px;">  
                   
                   <option value="active">active</option>
                   <option value="deleted">deleted</option>
                    
                    </select> 
                     
                </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="sumbit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>

        
   

                   
<br>
<hr>
                <!-- article table -->
                <!-- ------------------------------- -->
                <!-- ------------------------------- -->
                
                <div class="row" id="artiRepo">
                    <div class="col-4">
                        <table id="editArticleTable" class="table table-striped">
                          <thead>
                            <tr style="background-color:  rgba(136, 172, 238, 0.644);">
                                <th hidden style="text-align: center;">Id</th>
                                <th style="text-align: center;" >Article Name</th>
                                <th style="text-align: center;" >Status</th>
                                <th style="text-align: center;"></th>
                            </tr>
                          </thead>

                          <tbody>
                                @foreach($artView as $a)
                            <tr>
                                <td hidden style="text-align: center;">{{$a->id}}</td> 
                                <td style="text-align: center;" class="danger">{{$a->artName}}</td>
                                <td <?php if($a->status == 'active'):?> style="color:green; text-align:center" <?php elseif($a->status == 'deleted'):?>  style="color:red;  text-align:center" <?php endif; ?>>{{$a->status}}</td>
                                <td>
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-secondary" >Action</button>
                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item artEdit" href="#" >Edit</a>
                                      <a class="dropdown-item artDelete" href="#">Delete</a>
                                      
                                     
                                    </div>
                                  </div>
                                     <!-- <a href="#" class="btn btn-secondary artEdit">Edit</a> 
                                    <a href="#" class="btn btn-danger">Delete</a> -->
                                    </select>
                                  </td>
                            </tr>
                                @endforeach
                              </tbody>

                        </table>
                    </div>

                   
               

                <!-- karrot value table -->
                <!-- ------------------------------- -->
                <!-- ------------------------------- -->
                
                    <div class="col-1" hidden>
                        <table  id="editkValueTable" class="table table-striped ">
                          <thead>
                            <tr  style="background-color: rgba(136, 172, 238, 0.644);">
                                <th hidden style="text-align: center;">Id</th>
                                <th style="text-align: center;">Karrot Value</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;"></th>
                            </tr>
                          </thead>

                          <tbody>
                               @foreach($kValView as $k)
                            <tr>
                                <td hidden style="text-align: center;">{{$k->id}}</td>
                                <td style="text-align: center;">{{$k->kValues}}</td>
                                <td <?php if($k->status == 'active'):?> style="color:green; text-align:center" <?php elseif($k->status == 'deleted'):?>  style="color:red;  text-align:center" <?php endif; ?>>{{$k->status}}</td>
                                <td>
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-secondary" >Action</button>
                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item kvalEdit" href="#" >Edit</a>
                                      <a class="dropdown-item kValdelete" href="#">Delete</a>
                                      
                                     
                                    </div>
                                  </div>
                                  <!-- <a href="#" class="btn btn-secondary kvalEdit"> Edit</a> 
                                  <a href="#" class="btn btn-danger"  >Delete</a> -->
                                </td>
                            </tr>
                              @endforeach  
                            </tbody>
                        </table>
                    </div>
              
<hr>
<br>
                     <!-- karrotprices table -->
                     <!-- ------------------------------- -->
                     <!-- ------------------------------- -->
        
                     <div class="col-7">
                      <table id="editkPriceTable" class="table table-striped ">
                        <thead>
                          <tr style="background-color:  rgba(136, 172, 238, 0.644)">
                              <th style="text-align: center;" hidden>Id</th>
                              <th style="text-align: center;">Karrot Value</th>
                              <th style="text-align: center;">Market Price</th>
                              <th style="text-align: center;">Assessed Price</th>
                              <th style="text-align: center;">Int Rate</th>
                              <th style="text-align: center;">Status</th>
                              <th style="text-align: center;"></th>
                          </tr>
                        </thead>

                        <tbody>
                             @foreach($kValView as $kp)
                          <tr>
                              <td style="text-align: center;" hidden>{{$kp->id}}</td>
                              <td style="text-align: center;">{{$kp->kValue}}</td>
                              <td style="text-align: center;">{{$kp->marketPrice}}</td>
                              <td style="text-align: center;">{{$kp->assessedPrice}}</td>
                              <td style="text-align: center;">{{$kp->intrest_rate}}</td>
                              <td <?php if($kp->status == 'active'):?> style="color:green; text-align:center" <?php elseif($kp->status == 'deleted'):?>  style="color:red;  text-align:center" <?php endif; ?>>{{$kp->status}}</td>
                              <td>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-secondary">Action</button>
                                  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item kPriceEdit" href="#" >Edit</a>
                                    <a class="dropdown-item kPriceDelete" href="#">Delete</a>
                                    
                                   
                                  </div>
                                </div>
                                <!-- <a href="#" class="btn btn-secondary kPriceEdit">Edit</a> 
                                <a href="#" class="btn btn-danger">Delete</a> -->
                              </td>
                          </tr>
                            @endforeach  
                          </tbody>
                      </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Delete Article Modal -->
            <!-- ------------------------------- -->
            <!-- ------------------------------- -->

<div class="modal fade" id="deleteArtM" tabindex="-1" role="dialog" aria-labelledby="articles" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:gray;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Delete Article</h5>
      </div>

      <!-- Delete Article form -->
      <form action="" method="post" id="deleteArt">
          {{csrf_field()}}
          {{method_field('DELETE')}}

              <div class="modal-body">    
        
              <input type="hidden" name="_method" value="DELETE">
              <h6>Are you sure you want to delete this Article?</h6>

                   
              
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary">Delete</button>
      </div>
      </form>
    </div>
  </div>
  </div>

          <!-- Delete kValue Modal -->
          <!-- ------------------------------- -->
          <!-- ------------------------------- -->

<div class="modal fade" id="deletekValueM" tabindex="-1" role="dialog" aria-labelledby="kValues" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:gray;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Delete Karat Value</h5>
      </div>

      <!-- Delete kValue form -->
      <form action="" method="post" id="deletekValues">
          {{csrf_field()}}
          {{method_field('DELETE')}}

              <div class="modal-body">    
        
              <input type="hidden" name="_method" value="DELETE">
              <h6>Are you sure you want to delete this Karat Value?</h6>

                   
              
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>

            <!-- Delete kPrice Modal -->
            <!-- ------------------------------- -->
            <!-- ------------------------------- -->
            

<div class="modal fade" id="deletekPriceM" tabindex="-1" role="dialog" aria-labelledby="kValues" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:gray;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Delete Karat Price</h5>
      </div>

      <!-- Delete kPrice form -->
      <form action="" method="post" id="deletekPrices">
          {{csrf_field()}}
          {{method_field('DELETE')}}

              <div class="modal-body">    
        
              <input type="hidden" name="_method" value="DELETE">
              <h6>Are you sure you want to delete this Karat Price?</h6>

                   
              
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary">Delete</button>
      </div>
      </form>
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

          // Edit Article Table
          // ------------------------------------
           // ------------------------------------
           $('#print').click(function(){
        $('#artiRepo').printThis();
    })
    $(document).ready(function(){
      var table=$('#editArticleTable').DataTable({
        "paging" :false,
        "ordering": false,
        "info":     false,
       });
            
        table.on('click','.artEdit',function(){
        $tr=$(this).closest('tr');
        if ($($tr).hasClass('child')){
          $tr=$tr.prev('.parent');
        }

        var data = table.row($tr).data();
        console.log(data);

        $('#eartName').val(data[1]);
        $('#Astatus').val(data[2]);

        $('#editArticle').attr('action','articles/'+data[0]);
        $('#EArticle').modal('show');
      });

          // Delete Article Table
          // ------------------------------------
          // ------------------------------------
      
       table.on('click','.artDelete',function(){
        $tr=$(this).closest('tr');
        if ($($tr).hasClass('child')){
          $tr=$tr.prev('.parent');
        }

        var data = table.row($tr).data();
        console.log(data);

        $('#deleteArt').attr('action','articles/'+data[0]);
        $('#deleteArtM').modal('show');
    });  
  });  



          // Edit Values Table
          // ------------------------------------
           // ------------------------------------
    
    $(document).ready(function(){
    var table1=$('#editkValueTable').DataTable({
    "paging" :false,
});

  table1.on('click','.kvalEdit',function(){
  $tr1=$(this).closest('tr');
  if ($($tr1).hasClass('child')){
    $tr1=$tr1.prev('.parent');
  }

  var data1 = table1.row($tr1).data();
  console.log(data1);

  $('#ekValue').val(data1[1]);


  $('#editkValues').attr('action','kvalue/'+data1[0]);
  $('#editkValue').modal('show');
});

          // Delete kValue Table
          // ------------------------------------
          // ------------------------------------

        table1.on('click','.kValdelete',function(){
        $tr1=$(this).closest('tr');
        if ($($tr1).hasClass('child')){
          $tr1=$tr1.prev('.parent');
        }

        var data1 = table1.row($tr1).data();
        console.log(data1);

        $('#deletekValues').attr('action','kvalue/'+data1[0]);
        $('#deletekValueM').modal('show');
    });  
}); 

          // Edit kPrices Table
          // ------------------------------------
           // ------------------------------------

$(document).ready(function(){
var table2=$('#editkPriceTable').DataTable({
      "paging" :false,
      "ordering": false,
        "info":     false,

});
      
  table2.on('click','.kPriceEdit',function(){

  $tr2=$(this).closest('tr');
  if ($($tr2).hasClass('child')){
    $tr2=$tr2.prev('.parent');
  }

  var data2 = table2.row($tr2).data();
  console.log(data2);

  $('#ekarrotVal').val(data2[1]);
  $('#emarketP').val(data2[2]);
  $('#eassessedP').val(data2[3]);
  $('#eintrest').val(data2[4]);
  $('#status').val(data2[5]);

  $('#editPrices').attr('action','kPrices/'+data2[0]);
  $('#editkPrice').modal('show');
});


          // Delete kPrices Table
          // ------------------------------------
          // ------------------------------------

table2.on('click','.kPriceDelete',function(){

$tr2=$(this).closest('tr');
if ($($tr2).hasClass('child')){
  $tr2=$tr2.prev('.parent');
}

var data2 = table2.row($tr2).data();
console.log(data2);


$('#deletekPrices').attr('action','kPrices/'+data2[0]);
$('#deletekPriceM').modal('show');
});
});    


</script>

 

   
  


     
   
     
              
   
  
  

  
  
 
 

  
   
    
    
    
@endsection

