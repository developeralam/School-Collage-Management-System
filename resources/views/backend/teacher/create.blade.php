@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Add Teacher</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.teacher.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="teachers_name_bangali">Teacher Name Bangla</label>
					<input type="text" class="form-control" id="teachers_name_bangali" name="teachers_name_bangali" placeholder="Enter Teacher's Full Name In Bangla">
				</div>
				<div class="form-group">
					<label for="teachers_name_bangali">Teacher Name English *</label>
					<input type="text" class="form-control" id="teachers_name_english" name="teachers_name_english" placeholder="Enter Teacher's Full Name In English">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Enter Teacher's Email">
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="teachers_district">Teacher's District *</label>
							<input type="text" name="teachers_district" class="form-control" id="teachers_district" placeholder="Enter Teacher's District">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="teachers_postoffice">Teacher's Post Office *</label>
							<input type="text" name="teachers_postoffice" class="form-control" id="teachers_postoffice" placeholder="Enter Teacher's Post Office">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="teachers_village">Teacher's Vilalge *</label>
					<input type="text" name="teachers_village" class="form-control" id="teachers_village" placeholder="Enter Teacher's Village">
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="teacher_gender">Teacher's Gender *</label>
							<select name="teacher_gender" id="teacher_gender" class="form-control">
								<option value="">Select One</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="teacher_maritial_status">Teacher's Maritial Status *</label>
							<select name="teacher_maritial_status" id="teacher_maritial_status" class="form-control">
								<option value="">Select One</option>
								<option value="Married">Married</option>
								<option value="Unmarried">Unmarried</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<select name="subject" id="subject" class="form-control">
						<option value="">Select A Subject</option>
						@foreach(App\Subject::subjects() as $subject)
							<option value="{{$subject->subject_id}}">{{$subject->subject_name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
				</div>
				<div class="form-group">
					<label for="class">Class</label>
					<select name="class" id="class" class="form-control">
						<option value="">Select A Class</option>
						@foreach(App\StudentClass::allClass() as $class)
						<option value="{{$class->classes_id}}">{{$class->class_name}}</option>
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
					<textarea name="address" id="address" class="form-control" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<label for="teachers_postoffice">Teacher's Sallary</label>
					<input type="number" name="sallary" class="form-control" id="sallary" placeholder="Enter Teacher's Sallery">
				</div>
				<div class="form-group">
					<label for="teachers_photo">Teacher's Photo</label>
					<input type="file" name="teachers_photo" class="form-control" id="teachers_photo">
				</div>
					<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')