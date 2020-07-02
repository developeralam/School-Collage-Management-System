@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add  Expence Category</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.expence.category.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Category Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Enter Expence Category Name">
				</div>
				<div class="form-group">
					<label for="desc">Add a description ( optional )</label>
					<input type="text" class="form-control" id="desc" name="desc" placeholder="Enter Expence Category Description">
				</div>
				
					<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')