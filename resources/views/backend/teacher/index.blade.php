@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Teacher List</h2>
		@include('partials.message')
	</div>
	<div class="card-body row">
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teachers as $teacher)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$teacher->teachers_name_english}}</td>
						<td>{{$teacher->email}}</td>
						<td>{{$teacher->phone}}</td>
						<td>{{$teacher->address}}</td>
						<td><a href="{{route('admin.teacher.edit', $teacher->teachers_id)}}" class="btn btn-primary">Edit</a><a href="{{route('admin.teacher.destroy', $teacher->teachers_id)}}" class="ml-1 btn btn-danger">Delete</a><a href="{{route('admin.teacher.details', $teacher->teachers_id)}}" class="ml-1 btn btn-info">Details</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
</div>


@endsection('content')