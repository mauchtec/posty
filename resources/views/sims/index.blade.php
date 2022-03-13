@extends('layouts.app')
@section('content')

<div >
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6 mm">
						<a href="#addSim" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Sim</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
                    
				</div>
            </div>
           

            <!-- Simcard Table-->

            <table class="table table-boarder table-striped">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Site Name
                        </th>
                        <th>
                            Sim Serial
                        </th>
                        <th>
                            Network Name
                        </th>
                        <th>
                            MSISDN
                        
                        </th>
                        <th>
                            Scaner Serial
                        
                        </th>
                        <th>
                            Pin
                        
                        </th>
                        <th>
                            Puck
                        
                        </th>
                        <th>
                            Type
                        
                        </th>
                        <th>
                            Edit
                        
                        </th>
                        <th>
                            Delete
                        
                        </th>
                    </tr>
                </thead>
                <tbody>
                  
                </tbody>
            </table>

			</div>
        </div>
    </div>
 


     <div id="addSim" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('addsim')}}" method="post">
                    @csrf
                    <div class="modal-header">	
           
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            
                                <input type="text" class="form-control" placeholder="Enter Sim Serial Number" name="simserial" id="simserial">
                             
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter Sim MSISDN Number" id="simmsisdn" name="simmsisdn">
                                </div>
                                <div class="col">
                                    <label for="cars"><b>Network:</b> </label>
                            <select name="simnetwork" id="simnetwork">
                                <option value="volvo">Select</option>
                                <option value="MTN">MTN</option>
                                <option value="Vodacom">Vodacom</option>
                                <option value="Afrihost">Afrihost</option>
                                <option value="Celc">Celc</option>
                                <option value="Telkom">Telkom</option>
                              </select>
                                </div>
                            </div>
                         
                    </div>	
                        <div class="form-group">
                              <div class="row">
                            <div class="col">
                            <label for="simtype"><b>Type:</b></label>
                            <select name="simtype" id="simtype">
                                <option value="opel">Select</option>
                                <option value="Prepaid">Prepaid</option>
                                <option value="Contract">Contract</option>
                               
                              </select>
                              </div>    
                              <div class="col">
                                <label for="sitename"><b>Site:</b></label>
                                <select name="posts_id" id="posts_id">
                                    @foreach ($sites as $site)
      <option value="{{$site->id}}">{{$site->sitename}}</option> 
      @endforeach
                                    <option value="volvo">Select Site</option>
                                    <option value="MTN">MTN</option>
                                    <option value="Vodacom">Vodacom</option>
                                    <option value="Afrihost">Afrihost</option>
                                    <option value="Celc">Celc</option>
                                    <option value="Telkom">Telkom</option>
                                  </select>
                                  </div>
                                 </div>                             
                    </div>	
                                
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                  <input type="text" class="form-control" placeholder="Enter Pin Number" name="simpin" id="simpin">
                                </div>
                                <div class="col">
                                  <input type="text" class="form-control" placeholder="Enter Puck Number" name="simpuck" id="simpuck">
                                </div>
                              </div>
                            
                        </div>
                       
                        <div class="form-group">
                            
                            <input type="text" class="form-control" placeholder="Enter Sim Package" name="simpackage" id="simpackage">
                         
                    </div>
                    <div class="form-group">
                            
                        <input type="text" class="form-control" placeholder="Enter Scanner Serial Number" name="scannerserial" id="scannerserial">
                     
                </div>
                        
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button class="btn btn-primary btnsave" type="submit">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
   
    
</div>

<!--- delete-->

<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           
                <input type="text" name="sim_id" id="sim_id">
                <h4>Are you sure you want to delete this data?</h4>
             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger deletesim">Delete</button>
        </div>
      </div>
    </div>
  </div>


<!-- end delte -->




<!--edit -->

<div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('update-sim')}}" method="post">
            
            <input type="hidden" name="id" class="id">
            <div class="modal-body">
               
                <div class="form-group"> 
                    
                    <input type="text"  id="simserial" placeholder="Enter sim serial " class=" simserial form-control">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input type="text" class=" simmsisdn form-control" placeholder="Enter Sim MSISDN Number" id="simmsisdn" >
                        </div>
                        <div class="col">
                            <label for="cars"><b>Network:</b> </label>
                    <select name="simnetwork" id="simnetwork" class="simnetwork">
                        <option value="volvo">Select</option>
                        <option value="MTN">MTN</option>
                        <option value="Vodacom">Vodacom</option>
                        <option value="Afrihost">Afrihost</option>
                        <option value="Celc">Celc</option>
                        <option value="Telkom">Telkom</option>
                      </select>
                        </div>
                    </div>
                 
            </div>	
                <div class="form-group">
                      <div class="row">
                    <div class="col">
                    <label for="simtype"><b>Type:</b></label>
                    <select name="simtype" id="simtype" class="simtype">
                        <option value="opel">Select</option>
                        <option value="Prepaid">Prepaid</option>
                        <option value="Contract">Contract</option>
                       
                      </select>
                      </div>    
                      <div class="col">
                        <label for="sitename"><b>Site:</b></label>
                        <select name="posts_id" class=" posts_id" id="posts_id">
                            <option value="">Select Site</option>
                            @foreach ($sites as $site)
                               <option value="{{$site->id}}">{{$site->sitename}}</option> 
                            @endforeach                            
                        </select>
                          </div>
                         </div>                             
            </div>	
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                          <input type="text" class=" simpin form-control" placeholder="Enter Pin Number"  id="simpin">
                        </div>
                        <div class="col">
                          <input type="text" class=" simpuck form-control" placeholder="Enter Puck Number" name="simpuck" id="simpuck">
                        </div>
                      </div>
                    
                </div>
               
                <div class="form-group">
                    
                    <input type="text" class="form-control simpackage" placeholder="Enter Sim Package" name="simpackage" id="simpackage">
                 
            </div>
            <div class="form-group">
                    
                <input type="text" class="form-control scannerserial" placeholder="Enter Scanner Serial Number" name="scannerserial" id="scannerserial">
             
        </div>
                
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <button class="btn btn-primary btnupdate" type="submit">save</button>
            </div>
        </form>
     
      </div>
    </div>
    </div>
<!-- end edit -->

   
@endsection

@section('scripts')
    <script>
        //update
        $(document).on('click','.btnupdate', function(e){
    e.preventDefault();
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    var id = $('.id').val();
    console.log(id);
    var data = {
                   'simserial': $('.simserial').val(),
                   'scannerserial': $('.scannerserial').val(),
                   'simpackage': $('.simpackage').val(),
                   'simpuck': $('.simpuck').val(),
                   'simpin': $('.simpin').val(),
                   'posts_id': $('.posts_id').val(),
                   'simmsisdn': $('.simmsisdn').val(),
                   'simtype': $('.simtype').val(),
                   'simnetwork': $('.simnetwork').val(),
               };
               
               $.ajax({
                   type: "PUT",
                   url: "/update-sim/"+id,
                   data: data,
                   dataType: "json",
                   
                   success: function (response) {
                      
                   }
               });
}); 


//end update
        $(document).ready(function () {
            
            fetchsims();
            function fetchsims(){
                $.ajax({
                    type: "GET",
                    url: "get-sims",
                    data: "data",
                    dataType: "json",
                    success: function (response) {
                        $('tbody').html("");
                      
                        $.each(response.data, function (key, item) { 
                           
                            $('tbody').append('<tr>\
                                <td>'+ item.id +'</td>\
                                 <td>'+ item.sitename +'</td>\
                                 <td>'+ item.simserial +'</td>\
                                 <td>'+ item.simnetwork +'</td>\
                                 <td>'+ item.simmsisdn +'</td>\
                                 <td>'+ item.scannerserial +'</td>\
                                 <td>'+ item.simpin +'</td>\
                                 <td>'+ item.simpuck +'</td>\
                                 <td>'+ item.simtype +'</td>\
                                 <td><button type="button" value="'+ item.id +'" class="edit_sim btn btn-primary btn-sm">Edit</button></td>\
                                 <td><button type="button" value="'+item.id+'" class="delete_sim btn btn-danger btn-sm">Delete</button></td>\
                                 </tr>')
                        });
                        
                    }
                });
            }
      
//delete
$(document).on('click','.delete_sim', function (e) {
    e.preventDefault();
    var sim_id = $(this).val();
    $('#sim_id').val(sim_id);
    $('#exampleModal').modal('show');

});
$(document).on('click', '.deletesim' , function (e) {
    e.preventDefault();
    var sim_id = $('#sim_id').val();
    
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.ajax({
        type: "delete",
        url: "/deletesim/"+sim_id,     
        
        success: function (response) {
            
            $('#exampleModal').modal('hide');
            fetchsims();
            if(response.message.status == 200){
                alert('cool');
            }
        }
    });
});


//end delete

        //edit

        $(document).on('click', '.edit_sim',function (e) {
    e.preventDefault();
   
    var sim_id = $(this).val();
    
    $('#editStudentModal').modal('show');
    $.ajax({
        type: "GET",
        url: "/get-sim/"+ sim_id,
        dataType: "json",
        success: function (response) {
            
            if(response.status== 404){
                //alert('ddd');
            }else{ 
                $(".id").val(response.messages.id);
                $(".simserial").val(response.messages.simserial);
                $('.scannerserial').val(response.messages.scannerserial);
                $('.simpackage').val(response.messages.simpackage);
                $('.simpuck').val(response.messages.simpuck);
                $('.simmsisdn').val(response.messages.simmsisdn);
                $('.simpin').val(response.messages.simpin);
                $('.posts_id').val(response.messages.sitename);
            }
        }
    });
   
});

});
    </script>
@endsection