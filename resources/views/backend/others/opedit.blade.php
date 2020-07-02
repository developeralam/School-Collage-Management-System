@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add A Student</h2>
	</div>
	<div class="card-body">
		<form action="{{route('admin.others.update.outsider', $op->op_id)}}" method="post">
			@csrf
			<div class="form-group">
				<label for="op_name">Name</label>
				<input type="text" value="{{$op->op_name}}" id="op_name" name="op_name" class="form-control" placeholder="Enter Name Here"> 
			</div>
			<div class="form-group">
				<label for="op_number">Phone Number</label>
				<input type="number" value="{{$op->op_phone}}" id="op_phone" name="op_phone" class="form-control">
			</div>
			<div class="form-group">
				<label for="op_address">Address</label>
				<textarea name="op_address" id="op_address" class="form-control" cols="30" rows="10">{{$op->op_address}}</textarea>
			</div>
			<div class="form-group">
				<label for="op_position">Position</label>
				<input type="text" id="op_position" value="{{$op->op_position}}" name="op_position" class="form-control" placeholder="Enter Position Here">
			</div>
			<div class="form-group">
				<label for="op_description">Description</label>
				<input type="text" value="{{$op->op_description}}" id="op_description" class="form-control" name="op_description" placeholder="Enter Description Here">
			</div>
			<input type="submit" class="btn btn-success" value="Update">
		</form>
		
	</div>
</div>











@endsection('content')