@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add A Student</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-12">
			<form action="{{route('admin.student.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="form-group col-3">
						<label for="class_id">Class</label>
						<select class="form-control" name="class_id" id="class_id">
							<option value="">Select...</option>
							@foreach($student_classes as $student_class)
								<option value="{{$student_class->classes_id}}">{{$student_class->class_name}}</option>
							@endforeach
						</select>
					</div>
					<!-- <div class="form-group col-3">
						<label for="division">Division</label>
						<select name="division" class="form-control" id="division">
							<option value="">Select One</option>
							<option value="Science">Science</option>
							<option value="Commerce">Commerce</option>
							<option value="Arts">Arts</option>
						</select>
					</div> -->
					<div class="form-group col-3">
						<label for="Section">Section</label>
						<select name="section" class="form-control" id="section">
							<option value="">Select One</option>
							<option value="A">A</option>
							<option value="B">B</option>
						</select>
					</div>
					<div class="form-group col-3">
						<label for="student_roll">Student Roll</label>
						<input type="number" id="student_roll" name="student_roll" class="form-control" id="student_roll">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="education_year">Edu Year</label>
						<input type="number"  class="form-control" id="education_year" name="education_year">
					</div>
					<div class="form-group col-4">
						<label for="student_name_bangali">Student Name Bangla</label>
						<input type="text" name="student_name_bangali" id="student_name_bangali" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="student_name_english">Student Name English</label>
						<input type="text" name="student_name_english" id="student_name_english" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="student_birth">Date Of Birth</label>
						<input type="date" name="student_birth" id="student_birth" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="student_year">Student Year</label>
						<input type="number" name="student_year" id="student_year" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="student_sex">Sex</label>
						<select name="student_sex" id="student_sex" class="form-control">
							<option value="">Select...</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="student_religion">Relegion</label>
						<select name="student_religion" id="student_religion" class="form-control">
							<option value="">Select...</option>
							<option value="islam">Islam</option>
							<option value="hindu">Hindu</option>
							<option value="christan">Christan</option>
							<option value="budha">Buddha</option>
						</select>
					</div>
					<div class="form-group col-4">
						<label for="student_nationality">Nationality</label>
						<select name="student_nationality" id="student_nationality" class="form-control">
							<option value="">Select...</option>
							<option value="bangladeshi">Bangladeshi</option>
						</select>
					</div>
					<div class="form-group col-4">
						<label for="father_name_bangla">Father Name Bangala</label>
						<input type="text" name="father_name_bangali" id="father_name_bangla" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="father_name_english">Father Name English</label>
						<input type="text" name="father_name_english" id="father_name_english" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="father_occupation">Father Occupation</label>
						<input type="text" name="father_occupation" id="father_occupation" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="father_income">Father Income</label>
						<input type="number" name="father_income" id="father_income" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="father_mobile">Father Mobile</label>
						<input type="number" name="father_mobile" id="father_mobile" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="mother_name_bangali">Mother Name Bangali</label>
						<input type="text" name="mother_name_bangali" id="mother_name_bangali" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="mother_name_english">Mother Name English</label>
						<input type="text" name="mother_name_english" id="mother_name_english" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="past_institute_name">Past Institute Name</label>
						<input type="text" name="past_institute_name" id="past_institute_name" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="past_institute_class">Past Institute Class</label>
						<select class="form-control" name="past_institute_class" id="past_institute_class">
							<option value="">Select....</option>
							@foreach($student_classes as $student_class)
								<option value="{{$student_class->id}}">{{$student_class->class_name}}</option>
							@endforeach

						</select>
					</div>
					<div class="form-group col-4">
						<label for="student_village">Student Vilage</label>
						<input type="text" name="student_village" id="student_village" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="student_post_office">Student Post Office</label>
						<input type="text" name="student_postoffice" id="student_post_office" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="student_permanent_village">Student Permanent Village</label>
						<input type="text" name="student_permanent_village" id="student_permanent_village" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="student_permanent_postoffice">Student Permanent Post Office</label>
						<input type="text" name="student_permanent_postoffice" id="student_permanent_postoffice" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="local_guardian_village">Local Guardian Village</label>
						<input type="text" name="local_guardian_village" id="local_guardian_village" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="local_guardian_postoffice">Local Guardian Post office</label>
						<input type="text" name="local_guardian_postoffice" id="local_guardian_postoffice" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="local_guardian_district">Local Guardian District</label>
						<input type="text" name="local_guardian_district" id="local_guardian_district" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-4">
						<label for="local_guardian_phone">Local Guardian Phone</label>
						<input type="text" name="local_guardian_phone" id="local_guardian_phone" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="institute_car">Interested In School Car</label>
						<select class="form-control" name="institute_car" id="institute_car">
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="form-group col-4">
						<label for="music_interested">Music Interested</label>
						<select name="music_interested" id="music_interested" class="form-control">
							<option value="">Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
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
				
				
					<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')