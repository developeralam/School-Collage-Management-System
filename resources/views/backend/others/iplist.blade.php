@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-info text-white text-center mb-2">Importent Person List</h2>
		@include('partials.message')
	</div>
	<div class="card-body row">
		 <div class="col-12">
		 	
			<table class="table table-striped">
				<thead>
					<tr>
						<th width="1%">SI</th>
						<th width="5%">Name</th>
						<th width="20%">Phone</th>
						<th width="25%">Position</th>
						<th width="10%">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($ips as $ip)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$ip->ip_name}}</td>
						<td>{{$ip->ip_phone}}</td>
						<td>{{$ip->ip_position}}</td>
						<td><a class="btn btn-primary" href="{{route('admin.others.edit.important', $ip->ip_id)}}">Edit</a><a class="btn btn-danger ml-1" href="{{route('admin.others.delete.important', $ip->ip_id)}}">Delete</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		 </div>

	</div>
</div>





@endsection('content')