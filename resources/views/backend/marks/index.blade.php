@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">View Marks</h2>
		@include('partials.message')
	</div>
	<div class="card-body">
		
		<form action="{{route('admin.marks.viewmarks')}}" method="get">
			@csrf
			<div class="form-group">
				<label for="class_id">Student Class</label>
				<select name="class_id" id="class_id" class="form-control">
					<option value="">Select A Class</option>
					@foreach($classes as $class)
					<option value="{{$class->classes_id}}">{{$class->class_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="exam">Student Exam</label>
				<select name="exam" id="exam" class="form-control">
					<option value="">Select A Exam</option>
					@foreach($exams as $exam)
						<option value="{{$exam->exams_id}}">{{$exam->exam_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="student_roll">Roll</label>
				<input type="number" class="form-control" id="student_roll" name="student_roll" placeholder="Enter Student's Roll">
			</div>
			<input type="submit" class="btn btn-success">
		</form>

		

		
	</div>
</div>
@section('ajax')
	<script>
		$('#class').change(function(){
			var studentClass = $('#class').val();
			$("#student-tbody").html("");
			var value = "";
			$.get("http://localhost/school_management_system/public/admin/student/get-students/"+studentClass, function(data){

				data.forEach(function(element){
					value += "<tr><td>"+element.id+"</td><td>"+element.name+"</td><td>"+element.name+"</td><td>"+element.roll+"</td><td>"+element.address+"</td></tr>";
				});

				$("#student-tbody").html(value);
			});
		});
	</script>
@endsection

@endsection('content')