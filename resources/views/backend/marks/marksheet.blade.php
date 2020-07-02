@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add Students Marksheet</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<table class="table table-striped">
					
					<thead>
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>Roll</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($marks as $mark)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$mark->student_name_english}}</td>
							<td>{{$mark->student_roll}}</td>
							<td>
								
								<form action="{{route('admin.print.marksheet')}}" method="get">
									<input type="hidden" value="{{$mark->students_id}}" name="students_id">
									<input type="hidden" name="class_id" value="{{$mark->class_id}}">
									<input type="hidden" name="exam_id" value="{{$semister_id}}">
									<input type="submit" value="Details & Print" class="btn btn-primary">
								</form>
							</td>
							<td>
								
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
		</div>
		
	</div>
</div>











@endsection('content')