@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add Student Marks</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.marks.store')}}" method="post">
				@csrf
				<table class="table table-striped">
					<a href="{{route('admin.marks.create')}}" class="btn btn-info mb-2 float-right">Back</a>
					<thead>
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>Class</th>
							<th>Roll</th>
							<th>Marks</th>
						</tr>
					</thead>
					<tbody>
						@foreach($students as $student)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$student->student_name_english}}</td>
							<td>{{$student->class_name}}</td>
							<td>{{$student->student_roll}}</td>
							<td>
								<input type="hidden" name="class_id[]" value="{{$student->classes_id}}">

								<input type="hidden" name="students_id[]" value="{{$student->students_id}}">

								<input type="text" placeholder="Enter Marks Here" name="marks[]" class="form-control">

								<input type="hidden" name="exam_id[]" value="{{$exam_id}}">

								<input type="hidden" name="subject_id[]" value="{{$subject_id}}">
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				
				<input type="submit" class="btn btn-success">
			</form>
		</div>
		
	</div>
</div>











@endsection('content')