@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Edit Exam</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.exam.update', $exam->exams_id)}}" method="post">
				@csrf
				<div class="form-group">
					<label for="exam_name">Exam Name</label>
					<input type="text" class="form-control" id="exam_name" name="exam_name" placeholder="Enter Exam Name" value="{{$exam->exam_name}}">
				</div>
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')