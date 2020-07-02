@extends('backend.layouts.master')
@section('content')
<div class="card marksheet">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Teacher's Details</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">

			<form>
				@csrf
				<div class="img text-center m-auto" style="width: 300px; height: 150px">
					<img src="{{asset('images/teacher/'.$teacher->photo)}}" width="100%" height="auto" alt="sdg">
				</div>
				<div class="form-group">
					<label for="teachers_name_bangali">Teacher Name Bangla</label>
					<input type="text" class="form-control" id="teachers_name_bangali" name="teachers_name_bangali" value="{{$teacher->teachers_name_bangali}}" placeholder="Enter Teacher's Full Name In Bangla">
				</div>
				<div class="form-group">
					<label for="teachers_name_bangali">Teacher Name English *</label>
					<input type="text" class="form-control" id="teachers_name_english" name="teachers_name_english"  value="{{$teacher->teachers_name_english}}" placeholder="Enter Teacher's Full Name In English">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email"   value="{{$teacher->email}}" class="form-control" id="email" placeholder="Enter Teacher's Email">
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="teachers_district">Teacher's District *</label>
							<input type="text" value="{{$teacher->teachers_district}}" name="teachers_district" class="form-control" id="teachers_district" placeholder="Enter Teacher's District">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="teachers_postoffice">Teacher's Post Office *</label>
							<input type="text" value="{{$teacher->teachers_postoffice}}" name="teachers_postoffice" class="form-control" id="teachers_postoffice" placeholder="Enter Teacher's Post Office">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="teachers_village">Teacher's Vilalge *</label>
					<input type="text" value="{{$teacher->teachers_village}}" name="teachers_village" class="form-control" id="teachers_village" placeholder="Enter Teacher's Village">
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="teacher_gender">Teacher's Gender *</label>
							<select name="teacher_gender" id="teacher_gender" class="form-control">
								<option value="">Select One</option>
								<?php
									if($teacher->teacher_gender == 'Male'){
								?>
								<option value="Male" selected="">Male</option>
								<?php
									}else{
								?>
								<option value="Female" selected="">Female</option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="teacher_maritial_status">Teacher's Maritial Status *</label>
							<select name="teacher_maritial_status" id="teacher_maritial_status" class="form-control">
								<option value="">Select One</option>
								<?php
									if ($teacher->teacher_maritial_status == 'Married') {
										
								?>
								<option value="Married" selected="">Married</option>
								<?php
									}else{
								?>
								<option value="Unmarried" selected="">Unmarried</option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<select name="subject" id="subject" class="form-control">
						<option value="">Select A Subject</option>
						@foreach(App\Subject::subjects() as $subject)
							<option value="{{$subject->subject_id}}" {{$teacher->subject == $subject->subject_id ? 'selected' : ''}}>{{$subject->subject_name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="number" class="form-control"  value="{{$teacher->phone}}" id="phone" name="phone" placeholder="Enter Phone Number">
				</div>
				<div class="form-group">
					<label for="class">Class</label>
					<select name="class" id="class" class="form-control">
						<option value="">Select A Class</option>
						@foreach(App\StudentClass::allClass() as $class)
						<option value="{{$class->classes_id}}" {{$teacher->class == $class->classes_id ? 'selected': ''}}>{{$class->class_name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="department">Department</label>
					<select name="department" id="department" class="form-control">
						<option value="">Select A Department</option>
						<option value="1">Science</option>
						<option value="2">Arts</option>
						<option value="3">Commerce</option>
					</select>
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<input name="address" id="address" class="form-control" value="{{$teacher->address}}">
				</div>
				<div class="form-group">
					<label for="teachers_postoffice">Teacher's Sallary</label>
					<input type="number" value="{{$teacher->sallary}}" name="sallary" class="form-control" id="sallary" placeholder="Enter Teacher's Sallery">
				</div>
			</form>
					<button class="btn btn-success print">Print</button>
		</div>
		
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