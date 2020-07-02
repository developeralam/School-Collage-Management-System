@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Student List</h2>
		@include('partials.message')
	</div>
	<div class="card-body row">
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Student Roll</th>
				</tr>
			</thead>
			<tbody>
				@foreach($parrents as $parrent)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$parrent->parrent_name}}</td>
						<td>{{$parrent->phone}}</td>
						<td>{{$parrent->student_roll}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
</div>


@endsection('content')