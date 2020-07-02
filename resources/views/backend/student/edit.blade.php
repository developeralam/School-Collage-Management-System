@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add A Student</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-12">
			<form action="{{route('admin.student.update', $students->students_id)}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="form-group col-3">
						<label for="class_id">Class</label>
						<select class="form-control" name="class_id" id="class_id">
							<option value="">Select...</option>
							@foreach($student_classes as $student_class)
								<option value="{{$student_class->classes_id}}" {{$students->class_id == $student_class->classes_id ? 'selected': ''}}>{{$student_class->class_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-3">
						<label for="division">Division</label>
						<select name="division" class="form-control" id="division">
							<option value="">Select One</option>
							<option value="Science" {{$students->division == 'Science' ? 'selected': ''}}>Science</option>
							<option value="Commerce" {{$students->division == 'Commerce' ? 'selected': ''}}>Commerce</option>
							<option value="Arts" {{$students->division == 'Arts' ? 'selected': ''}}>Arts</option>
						</select>
					</div>
					<div class="form-group col-3">
						<label for="Section">Section</label>
						<select name="section" class="form-control" id="section">
							<option value="">Select One</option>
							<option value="A" {{$students->section == 'A' ? 'selected': ''}}>A</option>
							<option value="B" {{$students->section == 'B' ? 'selected': ''}}>B</option>
						</select>
					</div>
					<div class="form-group col-3">
						<label for="student_roll">Student Roll</label>
						<input type="number" value="{{$students->student_roll}}" id="student_roll" name="student_roll" class="form-control" id="student_roll">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="education_year">Edu Year</label>
						<input type="number" value="{{$students->education_year}}"   class="form-control" id="education_year" name="education_year">
					</div>
					<div class="form-group col-4">
						<label for="student_name_bangali">Student Name Bangla</label>
						<input type="text" value="{{$students->student_name_bangali}}" name="student_name_bangali" id="student_name_bangali" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="student_name_english">Student Name English</label>
						<input type="text" value="{{$students->student_name_english}}" name="student_name_english" id="student_name_english" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="student_birth">Date Of Birth</label>
						<input type="date" value="{{$students->student_birth}}" name="student_birth" id="student_birth" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="student_year">Student Year</label>
						<input type="number" value="{{$students->student_year}}" name="student_year" id="student_year" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="student_sex">Sex</label>
						<select name="student_sex" id="student_sex" class="form-control">
							<option value="">Select...</option>
							<option value="male" {{$students->student_sex == 'male' ? 'selected': ''}}>Male</option>
							<option value="female" {{$students->student_sex == 'female' ? 'selected': ''}}>Female</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="student_religion">Relegion</label>
						<select name="student_religion" id="student_religion" class="form-control">
							<option value="">Select...</option>
							<option value="islam" {{$students->student_religion == 'islam' ? 'selected': ''}}>Islam</option>
							<option value="hindu" {{$students->student_religion == 'hindu' ? 'selected': ''}}>Hindu</option>
							<option value="christan" {{$students->student_religion == 'christan' ? 'selected': ''}}>Christan</option>
							<option value="budha" {{$students->student_religion == 'budha' ? 'selected': ''}}>Buddha</option>
						</select>
					</div>
					<div class="form-group col-4">
						<label for="student_nationality">Nationality</label>
						<select name="student_nationality" id="student_nationality" class="form-control">
							<option value="">Select...</option>
							<option value="bangladeshi" {{$students->student_nationality == 'bangladeshi' ? 'selected': ''}}>Bangladeshi</option>
						</select>
					</div>
					<div class="form-group col-4">
						<label for="father_name_bangla">Father Name Bangala</label>
						<input type="text" value="{{$students->father_name_bangali}}" name="father_name_bangali" id="father_name_bangla" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="father_name_english">Father Name English</label>
						<input type="text" value="{{$students->father_name_english}}" name="father_name_english" id="father_name_english" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="father_occupation">Father Occupation</label>
						<input type="text" value="{{$students->father_occupation}}" name="father_occupation" id="father_occupation" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="father_income">Father Income</label>
						<input type="number" value="{{$students->father_income}}" name="father_income" id="father_income" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="father_mobile">Father Mobile</label>
						<input type="number" value="{{$students->father_mobile}}" name="father_mobile" id="father_mobile" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="mother_name_bangali">Mother Name Bangali</label>
						<input type="text" value="{{$students->mother_name_bangali}}" name="mother_name_bangali" id="mother_name_bangali" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="mother_name_english">Mother Name English</label>
						<input type="text" value="{{$students->mother_name_english}}" name="mother_name_english" id="mother_name_english" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="past_institute_name">Past Institute Name</label>
						<input type="text" value="{{$students->past_institute_name}}" name="past_institute_name" id="past_institute_name" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="past_institute_class">Past Institute Class</label>
						<select class="form-control" name="past_institute_class" id="past_institute_class">
							<option value="">Select....</option>
							@foreach($student_classes as $student_class)
								<option {{$students->past_institute_class == $student_class->classes_id ? 'selected' : ''}} value="{{$student_class->classes_id}}">{{$student_class->class_name}}</option>
							@endforeach

						</select>
					</div>
					<div class="form-group col-4">
						<label for="student_village">Student Vilage</label>
						<input type="text" value="{{$students->student_village}}" name="student_village" id="student_village" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="student_post_office">Student Post Office</label>
						<input type="text" value="{{$students->student_postoffice}}" name="student_postoffice" id="student_post_office" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="student_permanent_village">Student Permanent Village</label>
						<input type="text" value="{{$students->student_permanent_village}}" name="student_permanent_village" id="student_permanent_village" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="student_permanent_postoffice">Student Permanent Post Office</label>
						<input type="text" value="{{$students->student_permanent_postoffice}}" name="student_permanent_postoffice" id="student_permanent_postoffice" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="local_guardian_village">Local Guardian Village</label>
						<input type="text" value="{{$students->local_guardian_village}}" name="local_guardian_village" id="local_guardian_village" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="local_guardian_postoffice">Local Guardian Post office</label>
						<input type="text" value="{{$students->local_guardian_postoffice}}" name="local_guardian_postoffice" id="local_guardian_postoffice" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="local_guardian_district">Local Guardian District</label>
						<input type="text" value="{{$students->local_guardian_district}}" name="local_guardian_district" id="local_guardian_district" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="local_guardian_phone">Local Guardian Phone</label>
						<input type="text" value="{{$students->local_guardian_phone}}" name="local_guardian_phone" id="local_guardian_phone" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="institute_car">Interested In School Car</label>
						<select class="form-control" name="institute_car" id="institute_car">
							<option value="">Select</option>
							<option value="Yes" {{$students->institute_car == 'Yes'? 'selected': ''}}>Yes</option>
							<option value="No" {{$students->institute_car == 'No'? 'selected': ''}}>No</option>
						</select>
					</div>
					<div class="form-group col-4">
						<label for="music_interested">Music Interested</label>
						<select name="music_interested" id="music_interested" class="form-control">
							<option value="">Select</option>
							<option value="Yes" {{$students->music_interested == 'Yes'? 'selected': ''}}>Yes</option>
							<option value="No" {{$students->music_interested == 'No'? 'selected': ''}}>No</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="student_photo">Student Photo</label>
						<input type="file" class="form-control" name="student_photo" id="student_photo">
					</div>
					<div class="form-group col-4">
						<label for="father_photo">Father Photo</label>
						<input type="file" name="father_photo" class="form-control" id="father_photo">
					</div>
					<div class="form-group col-4">
						<label for="mother_photo">Mother Photo</label>
						<input type="file" name="mother_photo" class="form-control" id="mother_photo">
					</div>
				</div>
				
				
					<button type="submit" class="btn btn-success">Update</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')