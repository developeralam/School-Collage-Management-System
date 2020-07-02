@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Edit Class</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.class.update', $class->classes_id)}}" method="post">
				@csrf
				<div class="form-group">
					<label for="class">Class</label>
					<input type="text" class="form-control" id="class" name="class" placeholder="Enter Class Name" value="{{$class->class_name}}">
				</div>
				
					<button type="submit" class="btn btn-success">Update</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')