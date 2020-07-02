@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add A Student</h2>
	</div>
	<div class="card-body">
		<form action="{{route('admin.others.update.important', $ip->ip_id)}}" method="post">
			@csrf
			<div class="form-group">
				<label for="ip_name">Name</label>
				<input type="text" value="{{$ip->ip_name}}" id="ip_name" name="ip_name" class="form-control" placeholder="Enter Name Here"> 
			</div>
			<div class="form-group">
				<label for="ip_phone">Phone Number</label>
				<input type="number" value="{{$ip->ip_phone}}" id="ip_phone" name="ip_phone" class="form-control">
			</div>
			<div class="form-group">
				<label for="ip_address">Address</label>
				<textarea name="ip_address" id="ip_address" class="form-control" cols="30" rows="10">{{$ip->ip_address}}</textarea>
			</div>
			<div class="form-group">
				<label for="ip_position">Position</label>
				<input type="text" id="ip_position" value="{{$ip->ip_position}}" name="ip_position" class="form-control" placeholder="Enter Position Here">
			</div>
			<div class="form-group">
				<label for="ip_description">Description</label>
				<input type="text" value="{{$ip->ip_description}}" id="ip_description" class="form-control" name="ip_description" placeholder="Enter Description Here">
			</div>
			<input type="submit" class="btn btn-success" value="Update">
		</form>
		
	</div>
</div>











@endsection('content')