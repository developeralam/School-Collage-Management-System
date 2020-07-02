@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Print Marksheet</h2>
	</div>
	<div class="card-body">
		<div class="marksheet border">
			<h1 class="text-center">Amzadia Muktijoddha Academy</h1>
			<h3 class="text-center">Bangladesh</h3>
			<div class="row">
				<div class="col-7 pt-5 pl-5">
					<p>Name: {{$name}}</p>
					<p>Class: {{$class}}</p>
					<p>Exam: {{$exam}}</p>
				</div>
				<div class="col-4">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Letter Grade</th>
								<th>Class Interval</th>
								<th>Grade Point</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>A+</td>
								<td>100-80</td>
								<td>5</td>
							</tr>
							<tr>
								<td>A</td>
								<td>79-70</td>
								<td>4</td>
							</tr>
							<tr>
								<td>A-</td>
								<td>69-60</td>
								<td>3.5</td>
							</tr>
							<tr>
								<td>B</td>
								<td>59-50</td>
								<td>3</td>
							</tr>
							<tr>
								<td>C</td>
								<td>49-40</td>
								<td>2</td>
							</tr>
							<tr>
								<td>D</td>
								<td>33-39</td>
								<td>1</td>
							</tr>
							<tr>
								<td>F</td>
								<td>32-0</td>
								<td>0</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<table class="table table-bordered mt-5">
				<thead>
					<tr>
						<th>SI No</th>
						<th>Semister</th>
						<th>Name Of The Subject</th>
						<th>Marks</th>
						<th>Point</th>
						<th>GPA</th>
					</tr>
				</thead>
				<tbody>
					<?php $total_point=0; $i=0;?>
					@foreach($marks as $mark)
					<?php $i++; $total_point += $mark->marks_point;?>
					<tr>
						<td>{{$loop->index}}</td>
						<td>{{$mark->semister_id}}</td>
						<td>{{$mark->subject_name}}</td>
						<td>{{$mark->marks}}</td>
						<td>{{$mark->marks_point}}</td>
						<td>{{$mark->marks_grade}}</td>
					</tr>
					@endforeach
					<tr>
						<td colspan="4">Total</td>
						<td>{{number_format($total_point / $i, 2)}}</td>
					</tr>
				</tbody>
			</table> 
			
		</div>
		<button class="btn btn-info print">Print</button>

	</div>
</div>

@section('ajax')
<script>
$(document).ready(function(){
	$('.print').click(function(){
		$('.marksheet').printThis();
})
})
</script>
@endsection

@endsection('content')
