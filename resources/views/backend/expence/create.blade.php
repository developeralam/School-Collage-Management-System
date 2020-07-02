@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add Expence</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.expence.store')}}" method="post">
				@csrf 
				<div class="form-group">
					<label for="expence_cat">Expence Category</label>
					<select name="expence_cat" id="expence_cat" class="form-control">
						<option value="">Select A Category</option>
						@foreach($categories as $category)
							<option value="{{$category->expence_category_id}}">{{$category->expence_category}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="amount">Expence Amount</label>
					<input type="amount" class="form-control" id="amount" name="amount" placeholder="Enter Expence Amount">
				</div>
				<div class="form-group">
					<label for="expence_desc">Expence Description</label>
					<textarea name="expence_desc" id="expence_desc" class="form-control" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<label for="expence_date">Expence Date</label>
					<input type="date" name="expence_date" id="expence_date" class="form-control">
				</div>
					<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')