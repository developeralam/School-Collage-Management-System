@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Director's</h2>
		@include('partials.message')
	</div>
	<div class="card-body">
		 
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
		        <div class="card">
		          <div class="card-body pb-0">
		            <div class="d-flex justify-content-between">
		              <h4 class="card-title mb-0">Total Income</h4>
		              <p class="font-weight-semibold mb-0">Since All Year</p>
		            </div>
		            <h3 class="font-weight-medium mb-4">{{App\Income::income()}} Taka</h3>
		          </div>
		          <canvas class="mt-n4" height="90" id="total-revenue"></canvas>
		        </div>
		      </div>

		    <div class="col-md-6 grid-margin stretch-card">
		        <div class="card">
		          <div class="card-body pb-0">
		            <div class="d-flex justify-content-between">
		              <h4 class="card-title mb-0">Total Expence</h4>
		              <p class="font-weight-semibold mb-0">Since All Year</p>
		            </div>
		            <h3 class="font-weight-medium">{{App\Expence::expence()}} Taka</h3>
		          </div>
		          <canvas class="mt-n3" height="90" id="total-transaction"></canvas>
		        </div>
		    </div>

		</div>


		<div class="row">
			<!--Director List-->
			<div class="col-md-4 grid-margin stretch-card average-price-card" id="director-list">
		        <div class="card text-white">
		          	
		          <div class="card-body">
		            <div class="d-flex justify-content-between pb-2 align-items-center">
		              <h2 class="font-weight-semibold mb-0">Director List</h2>
		              <div class="icon-holder">
		                <i class="mdi mdi-briefcase-outline"></i>
		              </div>
		            </div>
		            <div class="d-flex justify-content-between">
		              <h5 class="font-weight-semibold mb-0">Student Fee</h5>
		              <p class="text-white mb-0">Since last Month</p>
		          </div>
		          </div>
		        </div>
		      </div>
				<!--Director Create -->
		      <div class="col-md-4 grid-margin stretch-card average-price-card" id="create-director">
		        <div class="card text-white">
		          <div class="card-body">
		            <div class="d-flex justify-content-between pb-2 align-items-center">
		              <h2 class="font-weight-semibold mb-0">Create Director</h2>
		              <div class="icon-holder">
		                <i class="mdi mdi-briefcase-outline"></i>
		              </div>
		            </div>
		            <div class="d-flex justify-content-between">
		              <h5 class="font-weight-semibold mb-0">Total Exam</h5>
		              <p class="text-white mb-0">Since last Year</p>
		            </div>
		          </div>
		        </div>
		      </div>

		      <div class="col-md-4 grid-margin stretch-card average-price-card">
		        <div class="card text-white">
		          <div class="card-body">
		            <div class="d-flex justify-content-between pb-2 align-items-center">
		              <h2 class="font-weight-semibold mb-0"></h2>
		              <div class="icon-holder">
		                <i class="mdi mdi-briefcase-outline"></i>
		              </div>
		            </div>
		            <div class="d-flex justify-content-between">
		              <h5 class="font-weight-semibold mb-0"></h5>
		              <p class="text-white mb-0"></p>
		            </div>
		          </div>
		        </div>
		      </div>

			</div>
			
			<div class="d-none" id="dir-list">
				<hr class="pt-3">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Dipogit</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($directors as $director)
							<tr>
								<td>{{$loop->index+1}}</td>
								<td>{{$director->derectors_phone}}</td>
								<td>{{$director->directors_name}}</td>
								<td>{{$director->directors_email}}</td>
								<td>{{$director->directors_dipogit}}</td>
								<td><a href="{{route('admin.director.edit', $director->directors_id)}}" class="btn btn-info">Edit</a><a href="{{route('admin.director.delete', $director->directors_id)}}" class="btn btn-danger">Delete</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<div class="d-none" id="dir-create">
				<hr class="pt-3">
				<form action="{{route('admin.director.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="name">Full Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Enter Director's Full Name">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="number" id="phone" name="phone" class="form-control" placeholder="Enter Director's Phone Number">
						
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter Director's Email">
					</div>
					<div class="form-group">
						<label for="dipogit">Dipogit</label>
						<input type="number" id="dipogit" name="dipogit", class="form-control" placeholder="Enter Director's Dipogit">
					</div>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" class="form-control" id="status">
							<option value="">Select One</option>
							<option value="0">Director</option>
							<option value="1">Chairman</option>
						</select>
					</div>

					<div class="chariman-input d-none">
						<div class="form-group">
							<label for="quote">Quote</label>
							<textarea name="directors_quote" id="quote" class="form-control" cols="30" rows="10"></textarea>
						</div>
						<!-- <div class="form-group">
							<label for="image">Image</label>
							<input type="file" class="form-control" name="directors_image" id="image">
						</div> -->
					</div>
					<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>

		</div>
	</div>

	<div class="card mt-3">
		<div class="card-body">
			<h2 class="font-italic text-center bg-danger p-2 text-white">Welcome To Admin Panel</h2>
			<div class="row mt-3">
				<div class="col-4">
					<div class="chariman-img text-center mb-1">
						<img src="{{asset('dirImage/chairman.png')}}"  width="200px" alt="Chairman Picture">
					</div>
					
				</div>
				<div class="col-8">
					<div class="chairman-quote mt-1">

						<p class="blockquote-footer font-italic font-weight-light" style="font-size:21px">{{App\Director::chairmanQuote()}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

		
@section('ajax')
	<script>
		$("#create-director").click(function(){
			$("#dir-create").removeClass('d-none');			
			$("#dir-list").addClass('d-none');

		});
		$("#director-list").click(function(){
			$("#dir-list").removeClass('d-none');
			$("#dir-create").addClass('d-none');
		});

		$("#status").change(function(){
			var val = $("#status").val();
			if (val == 0) {
				$(".chariman-input").addClass('d-none');
			}else if(val == 1){
				$(".chariman-input").removeClass('d-none');
			}
		});
	</script>
@endsection('ajax')
@endsection('content')