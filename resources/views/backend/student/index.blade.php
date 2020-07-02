@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Student List</h2>
		@include('partials.message')
		<a href="{{route('admin.student.create')}}" class="btn btn-info float-right">Admit Student</a>
	</div>
	<div class="card-body">
		 

		<form action="" method="">
			<div class="form-group">
				<button class="btn btn-primary">Class</button><button class="btn btn-success ml-3">Village</button><button class="btn btn-info ml-3">Name</button><button class="btn btn-danger ml-3">Roll</button>
				<!--<select name="class" id="class" class="form-control">
					<option value="">Select A Class</option>
					@foreach($classes as $class)
					<option value="{{$class->classes_id}}">{{$class->class_name}}</option>
					@endforeach
				</select>
			-->
			<input type="text" name="class" placeholder="Enter Your Keyword Here" class="form-control mt-2" id="class">
			</div>	
		</form>

		<div class="student list">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Class</th>
						<th>Roll</th>
						<th>Father's Name</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="student-tbody">
					
				</tbody>
			</table>
		</div>

		
	</div>
</div>


@section('ajax')

<script>
		$('#class').keypress(function(){
			var studentClass = $('#class').val();
			$("#student-tbody").html("");
			var value = "";
			$.get("http://localhost/school_management_system/public/admin/student/get-students/"+studentClass, function(data){
				data.forEach(function(element){
				var ur = "{{route('admin.student.edit','id')}}";
				var alam = ur.replace('id', element.students_id);
				var u = "{{route('admin.student.destroy', 'id')}}";
				var des = u.replace('id', element.students_id);

				var d = "{{route('admin.student.details', 'id')}}";
				var det = d.replace('id', element.students_id);
				console.log(alam);
						value += "<tr><td>"+element.students_id+"</td><td>"+element.student_name_english+"</td><td>"+element.class_id+"</td><td>"+element.student_roll+"</td><td>"+element.father_name_english+"</td><td>"+element.father_mobile+"</td><td>"+element.student_village+"</td><td><a class='btn btn-primary' href='"+alam+"'>Edit</a><a class='btn btn-danger ml-1' href='"+des+"'>Delete</a><a class='btn btn-info ml-1' href='"+det+"'>Details</a></td></tr>";
				});

				$("#student-tbody").html(value);
			});


		});
	</script>
@endsection

@endsection('content')