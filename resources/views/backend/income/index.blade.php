@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Dipogit List <a href="{{route('admin.income.create')}}" class="btn btn-info float-right">Add Dipogit</a></h2>

		@include('partials.message')
	</div>
	<div class="card-body">
		<div class="form-group">
			<button class="btn btn-primary month">Month</button>
			<button class="btn btn-info ml-2 roll">Roll</button>

		</div>
		<!-- Month -->
		<div class="mon d-none">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="year">Year</label>
						<select name="year" id="year" class="form-control">
							<option value="">Select One..</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
						</select>
					</div>
					
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="month">Month</label>
						<select name="month" id="month" class="form-control">
							<option value="">Select One...</option>
							<option value="01">January</option>
							<option value="02">February</option>
							<option value="03">March</option>
							<option value="04">April</option>
							<option value="05">May</option>
							<option value="06">June</option>
							<option value="07">Jully</option>
							<option value="08">Augahst</option>
							<option value="09">September</option>
							<option value="10">Aoctbar</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
					</div>
					
				</div>
				<button class="btn btn-info ml-3 filter">Filter</button>
			</div>
		</div>
		<!-- Roll -->
		<div class="ro d-none">
			<div class="form-group">
				<label for="roll">Roll Number</label>
				<input type="number" id="roll" class="form-control" placeholder="Enter Student Roll Number">
			</div>
			<button class="btn btn-success roll-filter">Filter</button>
		</div>
		<div id="filter_main_body" class="d-none mb-5">
			<h2 class="text-center alert alert-success p-2 mt-2 mb-2">Filterd Dipogit</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Date</th>
						<th>Amount</th>
						<th>Income Category</th>
						<th>Student Roll</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="filter_body">
					
				</tbody>
			</table>
		</div>
		<div class="student list">
			<h2 class="text-center alert alert-success p-2 mt-2 mb-2">All Dipogit</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Date</th>
						<th>Amount</th>
						<th>Income Category</th>
						<th>Student Roll</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="student-tbody">
					@foreach($incomes as $income)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$income->income_date}}</td>
							<td>{{$income->income_amount}} Taka</td>
							<td>{{$income->income_category}}</td>
							<td>{{$income->student_roll}}</td>
							<td>
								<form action="{{route('admin.income.delete', $income->income_id)}}" method="get">
									@csrf
									<input type="submit" value="Delete" class="btn btn-danger">
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		
	</div>
</div>


@section('ajax')
<script>
	$('.month').click(function(){
		$('.mon').removeClass('d-none');
		$('.ro').addClass('d-none');

		//get value
		$('.filter').click(function(){
			$("#filter_main_body").removeClass('d-none');
			var year = $('#year').val();
			var month = $('#month').val();
			var value = '';
			$.get("http://localhost/school_management_system/public/admin/income/month_filter/"+year+"/"+month, function(data){


				data.forEach( function(element) {
					var delet = "{{route('admin.income.delete', 'id')}}";
					var del = delet.replace('id', element.income_id);
					value +='<tr><td>'+element.income_id+'</td><td>'+element.income_date+'</td><td>'+element.income_amount+'</td><td>'+element.income_category+'</td><td>'+element.student_roll+'</td><td><a href="'+del+'" class="btn btn-danger">Delete</a></td></tr>';
				});
				$("#filter_body").html(value);
			});
		});

	});

	//Roll
	$('.roll').click(function(){
		$('.ro').removeClass('d-none');
		$('.mon').addClass('d-none');
		$("#filter_main_body").addClass('d-none');

		$(".roll-filter").click(function(){
			$("#filter_main_body").removeClass('d-none');
			$("#filter_body").html(" ");
			var roll = $('#roll').val();
			var value = ''
			$.get("http://localhost/school_management_system/public/admin/income/roll_filter/"+roll, function(data){
				data.forEach( function(element) {
					var delet = "{{route('admin.income.delete', 'id')}}";
					var del = delet.replace('id', element.income_id);
					value +='<tr><td>'+element.income_id+'</td><td>'+element.income_date+'</td><td>'+element.income_amount+'</td><td>'+element.income_category+'</td><td>'+element.student_roll+'</td><td><a href="'+del+'" class="btn btn-danger">Delete</a></td></tr>';
				});
				$('#filter_body').html(value);
			});
		});
	});
</script>
@endsection('ajax')
@endsection('content')