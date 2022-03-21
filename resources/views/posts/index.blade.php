@extends('layouts.app')
@section('content')


  <!--Edit modal-->

  <div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <form action="{{url('update-site')}} " method="POST">

        
        @method('patch')
        
        <div class="modal-body">
        
            <input type="text"  id="edit_site_id" name="edit_site_id">
			<div class="form-group mb-3"> 
				<label for="">Suppervisor Name</label>
				<input type="text"  id="suppervisorname" class="   name form-control">
			</div>
          <div class="form-group mb-3"> 
              <label for="">Site Name</label>
              <input type="text"  id="sitename" class="   name form-control">
          </div>
          <div class="form-group mb-3">
            <label for="">Email</label>
            <input type="text" id="suppervisoremail"  class="  email form-control">
        
        <div class="form-group mb-3">
            <label for="">Phone</label>
            <input type="text" id="sitenumber"  class="  phone form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Address</label>
            <input type="text" id="location"  class="  course form-control">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" value="cool" class="btn btn-primary update_site">Save & Update </button>
        </div>
        
        </form>
      
            
        
       
      </div>
    </div>
    </div>
  </div>




  

  <!--Edit modal-->


<div >
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-5">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-2">
                            
                        <input type="text" class="form-control" placeholder="Search" name="search" id="search" class="search">
                     
                </div>
					<div class="col-sm-5">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			
	<!--		<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div> -->       
</div>
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route('post')}}" method="post">
				@csrf
				<div class="modal-header">	
		
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Suppervisor Name</label>
						<input type="text" name="suppervisorname" id="suppervisorname" class="form-control @error('supervisorname')
						border border-danger
						@enderror" required>
					</div>					
					<div class="form-group">
						<label>Site Name</label>
						<input type="text" name="sitename" id="sitename" value="" class="form-control @error('sitename')
						border border-danger
						@enderror" required>
					</div>
					<div class="form-group">
						<label> Suppervisor Email</label>
						<input type="email" name="suppervisoremail" id="suppervisoremail" class="form-control  @error('suppervisoremail')
						border border-danger
						@enderror" required>
					</div>
					<div class="form-group">
						<label> Site Address</label>
						<textarea class="form-control   @error('siteaddress')
						border border-danger
						@enderror" name="location" id="location" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="sitenumber" id="sitenumber" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<button class="btn btn-primary" type="submit">save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->

<!-- Delete Modal HTML -->
<div class="modal fade" id="deleteStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <input type="text" name="" id="delete_stud_id">
           <h4>Are you sure you want to delete this data?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" value="cool" class="btn btn-primary delete_student_btn">Delete</button>
        </div>
      </div>
    </div>
  </div>
    


  <!--Edit modal-->

<div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('update-student')}} " method="POST">
        @method('PUT')
        
        <div class="modal-body">
        
            <input type="text"  id="edit_stud_id" name="edit_stud_id">
          <div class="form-group mb-3"> 
              <label for="">Student Name</label>
              <input type="text"  id="edit_name" class="   name form-control">
          </div>
          <div class="form-group mb-3">
            <label for="">Email</label>
            <input type="text" id="edit_email"  class="  email form-control">
        
        <div class="form-group mb-3">
            <label for="">Phone</label>
            <input type="text" id="edit_phone"  class="  phone form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Course</label>
            <input type="text" id="edit_course"  class="  course form-control">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" value="cool" class="btn btn-primary update_student">Save & Update changes</button>
        </div>
        
        </form>
      
            
        
       
      </div>
    </div>
    </div>
  </div>




 
<!-- Delete Modal HTML -->


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-responsive">
				<table class="table table-bordered table-striped  table-hover">
					<thead>
						
						<tr>
							<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
							<th>Supervisor Name</th>
						<th>Site Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@if ($posts->count())
						@foreach ($posts as $post )
						<tr id="{{$post->id}} " >
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value=" {{auth()->user()->id}} ">
									<label for="checkbox1"></label>
								</span>
							</td>
							<td  >{{$post->suppervisorname}} </td>
							<td >{{$post->sitename}} </td>
							
							<td >{{$post->suppervisoremail}} </td>
							<td > {{$post->location}}</td>
							<td >{{$post->sitenumber}} </td>
							<td>
								

								
								<button type="button" value="{{$post->id}} " class="delete_site edit btn btn-danger btn-sm"><i style="font-size:10px" class="fa">&#xf014;</i></button>
								<button type="button" value="{{$post->id}} " class="edit_site edit btn btn-primary btn-sm"><i class="material-icons fa-xs " style=" font-size:10px " data-toggle="tooltip" title="Edit">&#xE254;</i></button>

						
							</td>
						</tr>
						@endforeach
					
						@else
						<p>there are no sites</p>
					@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function () {
		$("#search").on('keyup',  function() { 
    var query = $(this).val();

    
 
     // console.log(query);
    $.ajax({
                  
                    url: "{{url('searchsite')}}",
                    data: {query:query},
                    dataType: "json",
                    success: function (response) {
                        $('tbody').html("");
                      
                        $.each(response.messages, function (key, item) { 
                           
                            $('tbody').append('<tr>\
                                 <td>'+ item.suppervisorname +'</td>\
                                 <td>'+ item.sitename +'</td>\
                                 <td>'+ item.suppervisoremail +'</td>\
                                 <td>'+ item.location +'</td>\
                                 <td>'+ item.sitenumber +'</td>\
                                 <td><button type="button" value="'+ item.id +'" class="edit_sim btn btn-primary btn-sm">Edit</button></td>\
                                 <td><button type="button" value="'+item.id+'" class="delete_sim btn btn-danger btn-sm">Delete</button></td>\
                                 </tr>')
                        });
                        
                        
                    }
                });
  
});
	});
$(document).on('click','.edit_site', function (e) {
	e.preventDefault();
	var site_id = $(this).val();
	$('#editStudentModal').modal('show');
	//console.log(site_id);
	$.ajax({
		type: "GET",
		url: "/edit-site/"+site_id,
		
		success: function (response) {
			console.log(response.messages);
			if(response.status==404){
                $('#sussess_messge').html("");
                $('#sussess_messge').text(response.message);
            }else{
				$('#edit_site_id').val(response.messages.id);
				$('#suppervisorname').val(response.messages.suppervisorname);
				$('#suppervisoremail').val(response.messages.suppervisoremail);
				$('#location').val(response.messages.location);
				$('#sitenumber').val(response.messages.sitenumber);
				$('#sitename').val(response.messages.sitename);
				
				

               
               
            }
		}
	});
});



$(document).on('click','.update_site', function(e){
    e.preventDefault();
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    var site_id = $('#edit_site_id').val();
    var data = {
                   'suppervisorname': $('#suppervisorname').val(),
                   'sitename': $('#sitename').val(),
                   'suppervisoremail': $('#suppervisoremail').val(),
                   'location': $('#location').val(),
				   'sitenumber': $('#sitenumber').val(),					
               };
               $.ajax({
                   type: "patch",
                   url: "/update-site/"+site_id,
                   data: data,
                   dataType: "json",
                   success: function (response) {
                       console.log(response);
                   }
               });
});


$(document).on('click','.delete_site', function (e) {
    e.preventDefault();
    var stud_id = $(this).val();
  

$('#delete_stud_id').val(stud_id);
$('#deleteStudentModal').modal('show');

});
$(document).on('click', '.delete_student_btn', function (e) {
    e.preventDefault();
    var stud_id = $('#delete_stud_id').val();
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	$.ajax({
        type: "DELETE",
        url: "/delete-site/"+ stud_id,
        
        success: function (response) {
            console.log(response);
            $('#deleteStudentModal').modal('hide');
            fetchstudent();
        }
    });

});


	</script>

@endsection
