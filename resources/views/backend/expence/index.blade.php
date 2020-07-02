@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Expence List <a href="{{route('admin.expence.create')}}" class="btn btn-info float-right">Add Expence</a></h2>

		@include('partials.message')
	</div>
	<div class="card-body">

		<div class="form-group">
			<button class="btn btn-primary month">Month</button>

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
		<div id="filter_main_body" class="d-none mb-5">
			<h2 class="text-center alert alert-success p-2 mt-2 mb-2">Filterd Expence</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Date</th>
						<th>Amount</th>
						<th>Expence Category</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="filter_body">
					
				</tbody>
			</table>
		</div>

		<div class="all-expence-list">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Expence Category</th>
						<th>Amount</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="student-tbody">
					@foreach($expences as $expence)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$expence->expence_category}}</td>
							<td>{{$expence->expence_amount}} Taka</td>
							<td>{{$expence->expence_date}}</td>
							<td>
								<form action="{{route('admin.expence.destroy', $expence->expence_id)}}" method="get">
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

		//get value
		$('.filter').click(function(){
			$("#filter_main_body").removeClass('d-none');
			var year = $('#year').val();
			var month = $('#month').val();
			var value = '';
			$.get("http://localhost/school_management_system/public/admin/expence/month_filter/"+year+"/"+month, function(data){


				data.forEach( function(element) {
					var delet = "{{route('admin.expence.destroy', 'id')}}";
					var del = delet.replace('id', element.expence_id);
					value +='<tr><td>'+element.expence_id+'</td><td>'+element.expence_date+'</td><td>'+element.expence_amount+'</td><td>'+element.expence_category+'</td><td><a href="'+del+'" class="btn btn-danger">Delete</a></td></tr>';
				});
				$("#filter_body").html(value);
			});
		});

	});
</script>
@endsection('ajax')
@endsection('content')