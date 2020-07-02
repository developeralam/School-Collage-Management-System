@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add Parrent</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.parrent.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Full Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Enter Student's Full Name">
				</div>
				<div class="form-group">
					<label for="Roll">Student Roll</label>
					<input type="number" class="form-control" id="rol" name="roll" placeholder="Enter Student's Roll">
				</div>
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="number" class="form-control" id="rol" name="phone" placeholder="Enter Phone Number">
				</div>
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')