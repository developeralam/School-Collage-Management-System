@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add Class</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.class.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="class">Class</label>
					<input type="text" class="form-control" id="class" name="class" placeholder="Enter Class Name">
				</div>
				
					<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')