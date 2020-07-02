@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Edit Director</h2>
		@include('partials.message')
	</div>
	<div class="card-body">
		 
		
	<form action="{{route('admin.director.update', $dirs->directors_id)}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="name">Full Name</label>
						<input type="text" class="form-control" value="{{$dirs->directors_name}}" id="name" name="name" placeholder="Enter Director's Full Name">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="number" id="phone" value="{{$dirs->derectors_phone}}" name="phone" class="form-control" placeholder="Enter Director's Phone Number">
						
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" value="{{$dirs->directors_email}}" id="email" name="email" placeholder="Enter Director's Email">
					</div>
					<div class="form-group">
						<label for="dipogit">Dipogit</label>
						<input type="number" id="dipogit" name="dipogit" value="{{$dirs->directors_dipogit}}" class="form-control" placeholder="Enter Director's Dipogit">
					</div>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" class="form-control" id="status">
							<option value="">Select One</option>
							
							<option value="0" <?php if ($dirs->directors_status == 0) { echo "selected"; }?>>Director</option>
							
							<option value="1" <?php if ($dirs->directors_status == 1) { echo "selected"; }?>>Chairman</option>
							
						</select>
					</div>

					<div class="chariman-input d-none">
						<div class="form-group">
							<label for="quote">Quote</label>
							<textarea name="directors_quote" id="quote" class="form-control" cols="30" rows="10">{{$dirs->directors_quote}}</textarea>
						</div>
						<!-- <div class="form-group">
							<label for="image">Image</label>
							<input type="file" class="form-control" name="directors_image" id="image">
						</div> -->
					</div>
					<button type="submit" class="btn btn-success">Submit</button>
				</form>

		
	</div>

@section('ajax')
	<script>
		var val = $('#status').val();
		if (val == 1) {
			$('.chariman-input').removeClass('d-none');
		}
	</script>
@endsection('ajax')

@endsection('content')