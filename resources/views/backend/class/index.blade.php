@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Class List</h2>
		@include('partials.message')
		<a href="{{route('admin.class.create')}}" class="btn btn-info float-right">ADD CLASS</a>
	</div>
	<div class="card-body row">
	
		
		<table class="table table-striped m-auto border border-sacoundary col-8">
			<thead>
				<tr>
					<th>id</th>
					<th>Class Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($classes as $class)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$class->class_name}}</td>
						<td>
							<a href="{{route('admin.class.delete', $class->classes_id)}}" class="btn btn-danger">Delete</a><a href="{{route('admin.class.edit', $class->classes_id)}}" class="btn btn-info ml-1">Edit</a>
						</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
</div>
 

@endsection('content')