@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Subject List</h2>
		@include('partials.message')
		<a href="{{route('admin.subject.create')}}" class="btn btn-info float-right">Add Subject</a>
	</div>
	<div class="card-body row">
		<table class="table table-striped col-8 m-auto border">
			<thead>
				<tr>
					<th>#</th>
					<th>Subject Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subjects as $subject)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$subject->subject_name}}</td>
						<td><a href="{{route('admin.subject.delete', $subject->subject_id)}}" class="btn btn-danger">Delete</a><a href="{{route('admin.subject.edit', $subject->subject_id)}}" class="btn btn-info ml-1">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
</div>


@endsection('content')