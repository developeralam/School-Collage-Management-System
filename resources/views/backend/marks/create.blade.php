@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add A Student</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.marks.getStudetails')}}" method="get">
				@csrf
				<div class="form-group">
					<label for="name">Student Class</label>
					<select name="class" id="class" class="form-control">
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
					<label for="Subject">Subject</label>
					<select name="subject" id="subject" class="form-control">
						<option value="">Select A Subject</option>
						@foreach($subjects as $subject)
							<option value="{{$subject->subject_id}}">{{$subject->subject_name}}</option>
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
</div>











@endsection('content')