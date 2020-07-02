@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add Income</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.income.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="income_cat">Dipogit Category</label>
					<select name="income_cat" id="income_cat" class="form-control">
						<option value="">Select A Category</option>
						@foreach($categories as $category)
							<option value="{{$category->income_category_id}}">{{$category->income_category}}</option>
						@endforeach
					</select>
				</div>
				<div class="d-none" id="student_fee">
					<div class="form-group">
						<label for="student_id">Student Roll</label>
						<input type="number" name="student_id" class="form-control">
					</div>
					<div class="form-group">
						<label for="month">Payment Month</label>
						<select name="payment_month" id="month" class="form-control">
							<option value="">Select a month</option>
							<option value="1">January</option>
							<option value="2">February</option>
							<option value="3">March</option>
							<option value="4">April</option>
							<option value="5">May</option>
							<option value="6">June</option>
							<option value="7">Jully</option>
							<option value="8">Augahst</option>
							<option value="9">September</option>
							<option value="10">Aoctbar</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
					</div>
				</div>

				<div class="d-none" id="student_exam_fee">
					<div class="form-group">
						<label for="student_id">Student Roll</label>
						<input type="number" name="semister_exam_fee_roll" class="form-control">
					</div>
					<div class="form-group">
						<label for="month">Payment Month</label>
						<select name="semister_exam_fee_semister" id="month" class="form-control">
							<option value="">Select a Semister</option>
							@foreach(App\Exam::allExam() as $exam)
							<option value="{{$exam->exams_id}}">{{$exam->exam_name}}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="amount">Dipogit Amount</label>
					<input type="amount" class="form-control" id="amount" name="income_amount" placeholder="Enter Dipogit Amount">
				</div>
				<div class="form-group">
					<label for="income_desc">Dipogit Description</label>
					<textarea name="income_desc" id="income_desc" class="form-control" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<label for="income_date">Dipogit Date</label>
					<input type="date" name="income_date" id="income_date" class="form-control">
				</div>
					<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		
	</div>
</div>




@section('ajax')
	<script>
		$('#income_cat').change(function(){
			var value = $("#income_cat").val();
			if (value == 1) {
			$("#student_fee").removeClass("d-none");
			$("#student_exam_fee").addClass("d-none");
			}else if(value == 2){
				$("#student_fee").addClass("d-none");
				$("#student_exam_fee").removeClass("d-none");
			};

		})
	</script>
@endsection






@endsection('content')