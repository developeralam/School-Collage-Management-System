@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add A Student</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.student.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Full Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Enter Student's Full Name">
				</div>
				<div class="form-group">
					<label for="class">Class</label>
					<select name="class" id="class" class="form-control">
						<option value="">Select A Class</option>
						<option value="1">Class One</option>
						<option value="1">Class Two</option>
						<option value="1">Class Three</option>
					</select>
				</div>
				<div class="form-group">
					<label for="Roll">Roll</label>
					<input type="number" class="form-control" id="rol" name="roll" placeholder="Enter Student's Roll">
				</div>
				<div class="form-group">
					<label for="section">Section</label>
					<select name="section" id="section" class="form-control">
						<option value="">Select A Class</option>
						<option value="1">A</option>
						<option value="1">b</option>
					</select>
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<textarea name="address" id="address" class="form-control" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<label for="gender">Gender</label>
					<select name="gender" id="gender" class="form-control">
						<option value="">Select A Gender</option>
						<option value="1">Male</option>
						<option value="1">Female</option>
					</select>
				</div>
					<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')