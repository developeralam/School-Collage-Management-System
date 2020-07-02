@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Balance</h2>
		@include('partials.message')
	</div>
	<div class="card-body">
		 
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
		        <div class="card">
		          <div class="card-body pb-0">
		            <div class="d-flex justify-content-between">
		              <h4 class="card-title mb-0">Total Dipogit: <strong>{{App\Income::income() + App\Director::dirAmount()- App\Expence::expence()}} Taka</strong></h4>
		              <p class="font-weight-semibold mb-0">Total Bank Dipgit</br>{{App\Income::total_bank_dipogit() - App\Expence::total_withdraw()}} Taka</p>
		            </div>
		            <!-- <h3 class="font-weight-medium mb-4">{{App\Income::income() + App\Director::dirAmount()}} Taka</h3> -->
		          </div>
		          <canvas class="mt-n4" height="90" id="total-revenue"></canvas>
		        </div>
		      </div>

		    <div class="col-md-6 grid-margin stretch-card">
		        <div class="card">
		          <div class="card-body pb-0">
		            <div class="d-flex justify-content-between">
		              <h4 class="card-title mb-0">Total Expence</h4>
		              <p class="font-weight-semibold mb-0">Total Bank Withdraw<br>{{App\Expence::total_withdraw()}}</p>
		            </div>
		            <h3 class="font-weight-medium">{{App\Expence::expence()}} Taka</h3>
		          </div>
		          <canvas class="mt-n3" height="90" id="total-transaction"></canvas>
		        </div>
		    </div>

		</div>


		<div class="row">
			<!--Bank Amount-->
			<div class="col-md-4 grid-margin stretch-card average-price-card" id="bank-withdraw">
		        <div class="card text-white">
		          	
		          <div class="card-body">
		            <div class="d-flex justify-content-between pb-2 align-items-center">
		              <h2 class="font-weight-semibold mb-0">Bank Withdraw</h2>
		              <div class="icon-holder">
		                <i class="mdi mdi-briefcase-outline"></i>
		              </div>
		            </div>
		            <div class="d-flex justify-content-between">
		              <h5 class="font-weight-semibold mb-0">Bank Dipogit</h5>
		              <p class="text-white mb-0">Since all past year</p>
		          </div>
		          </div>
		        </div>
		      </div>
				<!-- End Bank Amount -->

		      
				<!--Shift To  Bank -->
		      <div class="col-md-4 grid-margin stretch-card average-price-card" id="shift-bank">
		        <div class="card text-white">
		          <div class="card-body">
		            <div class="d-flex justify-content-between pb-2 align-items-center">
		              <h2 class="font-weight-semibold mb-0">Balance Transfer</h2>
		              <div class="icon-holder">
		                <i class="mdi mdi-briefcase-outline"></i>
		              </div>
		            </div>
		            <div class="d-flex justify-content-between">
		              <h5 class="font-weight-semibold mb-0">Bank Dipogit</h5>
		              <p class="text-white mb-0">Transfer To Bank</p>
		            </div>
		          </div>
		        </div>
		      </div>
			<!-- Bank Transfer End -->
			<!-- Bank Dipogit List -->
		      <div class="col-md-4 grid-margin stretch-card average-price-card bank-dipo-list">
		        <div class="card text-white">
		          <div class="card-body">
		            <div class="d-flex justify-content-between pb-2 align-items-center">
		              <h2 class="font-weight-semibold mb-0">Bank Dipogit</h2>
		              <div class="icon-holder">
		                <i class="mdi mdi-briefcase-outline"></i>
		              </div>
		            </div>
		            <div class="d-flex justify-content-between">
		              <h5 class="font-weight-semibold mb-0"></h5>
		              <p class="text-white mb-0">All Bank Dipogit</p>
		            </div>
		          </div>
		        </div>
		      </div>
		      <!-- Bank Dipogit List End -->
			</div>

			<!-- Shift Bank Form -->
			<div class="shift_bank_form d-none">
				<form action="{{route('admin.income.store.bank')}}" method="post">
					@csrf

					<div class="form-group">
						<label for="amount">Dipogit Amount</label>
						<input type="amount" class="form-control" id="amount" name="income_amount" placeholder="Enter Income Amount">
					</div>
					<div class="form-group">
						<label for="income_desc">Dipogit Description</label>
						<textarea name="income_desc" id="income_desc" class="form-control" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
						<label for="income_date">Dipogit Date</label>
						<input type="date" name="income_date" id="income_date" class="form-control">
					</div>
						<button type="submit" class="btn btn-success">Transfer</button>
				</form>
			</div>
		      <!-- Shift Bank Form End -->

		      <!-- Bank Withdraw Form Start -->
				<form action="{{route('admin.expence.withdraw')}}" class="d-none bank-withdraw-form" method="post">
					@csrf 
					<div class="form-group">
						<label for="expence_cat">Expence Category</label>
						<select name="expence_cat" id="expence_cat" class="form-control">
							<option value="">Select A Category</option>
							@foreach(App\ExpenceCategory::all_cat() as $category)
								<option value="{{$category->expence_category_id}}">{{$category->expence_category}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="amount">Withdraw Amount</label>
						<input type="amount" class="form-control" id="amount" name="amount" placeholder="Enter Expence Amount">
					</div>
					<div class="form-group">
						<label for="expence_desc">Withdraw Description</label>
						<textarea name="expence_desc" id="expence_desc" class="form-control" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
						<label for="expence_date">Withdraw Date</label>
						<input type="date" name="expence_date" id="expence_date" class="form-control">
					</div>
						<button type="submit" class="btn btn-success">Withdraw</button>
				</form>
		      <!-- Bank Withdraw Form End -->
		</div>
		<!-- Card Body End -->
	</div>
	<!-- Card End -->

<!-- Dipogit By Admin -->
<div class="card mt-2">
	<div class="card-header">
		<h2 class="bg-info p-2 text-center text-white">Dipogit By Admin</h2>
	</div>
	<div class="card-body">
		<table class="table table-striped">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Status</th>
				<th>Dipogit Amount</th>
				<th>Action</th>
			</tr>
			@foreach(App\Director::alldirList() as $dir)
			<tr>
				<td>{{$loop->index+1}}</td>
				<td>{{$dir->directors_name}}</td>
				<td>{{$dir->directors_status == 0?'Director': 'Chairman'}}</td>
				<td>{{$dir->directors_dipogit}}</td>
				<td><a href="{{route('admin.director.edit', $dir->directors_id)}}" class="btn btn-info">Edit</a></td>
			</tr>
			@endforeach
			<tr>
				<td colspan="3">Total Director's Dipogit</td>
				<td><strong>{{App\Director::dirAmount()}}</strong> Taka</td>
				<td></td>
			</tr>
		</table>
	</div>
</div>

<!-- Expence  -->
<div class="card mt-2">
	<div class="card-header">
		<h2 class="bg-info p-2 text-center text-white">Category Wize All Expence</h2>
	</div>
	<div class="card-body">
		<table class="table table-striped">
			<tr>
				<td>Admin Expence</td>
				<td><?php $ex = 0;
					foreach(App\Expence::adminExpence() as $expence){
						$ex += $expence->expence_amount;
					} echo $ex; ?> Taka</td>
			</tr>
			<tr>
				<td>Teacher's Sallary</td>
				<td><?php $ex = 0;
					foreach(App\Expence::sallaryExpence() as $expence){
						$ex += $expence->expence_amount;
					} echo $ex; ?> Taka</td>
			</tr>
			<tr>
				<td>Other's Cost</td>
				<td><?php $ex = 0;
					foreach(App\Expence::otherExpence() as $expence){
						$ex += $expence->expence_amount;
					} echo $ex; ?> Taka</td>
			</tr>
		</table>
		
	</div>
</div>
@section('ajax')
<script>
	$('#shift-bank').click(function(){
		$('.shift_bank_form').removeClass('d-none');
		$('.bank-withdraw-form').addClass('d-none');
	})

	//Bank WithDraw
	$('#bank-withdraw').click(function(){
		$('.shift_bank_form').addClass('d-none');
		$('.bank-withdraw-form').removeClass('d-none');
	})
</script>
@endsection('ajax')
@endsection('content')