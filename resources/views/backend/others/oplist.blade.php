@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-info text-white text-center mb-2">Outsider Person List</h2>
		@include('partials.message')
	</div>
	<div class="card-body">
		 
		<table class="table table-striped">
			<thead>
				<tr>
					<th>SI</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ops as $op)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$op->op_name}}</td>
					<td>{{$op->op_phone}}</td>
					<td>{{$op->op_address}}</td>
					<td><a href="{{route('admin.others.edit.outsider', $op->op_id)}}" class="btn btn-success">Edit</a><a class="btn btn-danger ml-1" href="{{route('admin.others.delete.outsider', $op->op_id)}}">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>





@endsection('content')