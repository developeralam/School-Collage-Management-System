@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Exam List</h2>
		@include('partials.message')
		<a href="{{route('admin.exam.create')}}" class="btn btn-info float-right">Add Exam</a>
	</div>
	<div class="card-body row">
		
		<table class="table table-striped col-8 m-auto border">
			<thead>
				<tr>
					<th>#</th>
					<th>Exam Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($exams as $exam)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$exam->exam_name}}</td>
						<td><a href="{{route('admin.exam.delete', $exam->exams_id)}}" class="btn btn-danger">Delete</a><a href="{{route('admin.exam.edit', $exam->exams_id)}}" class="btn btn-info ml-1">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
</div>


@endsection('content')