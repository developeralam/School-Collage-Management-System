@extends('backend.layouts.master')
@section('content')
<div class="row">
	<div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mb-0">Total Student</h4>
              <p class="font-weight-semibold mb-0"></p>
            </div>
            <h3 class="font-weight-medium mb-4">{{App\Student::totalStu()}}</h3>
          </div>
          <canvas class="mt-n4" height="90" id="total-revenue"></canvas>
        </div>
      </div>

      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mb-0">Total Teacher</h4>
              <p class="font-weight-semibold mb-0">-2.87%</p>
            </div>
            <h3 class="font-weight-medium">{{App\Teacher::totalTeacher()}}</h3>
          </div>
          <canvas class="mt-n3" height="90" id="total-transaction"></canvas>
        </div>
    </div>

</div>
<div class="row">

	<div class="col-md-4 grid-margin stretch-card average-price-card">
        <div class="card text-white">
          <div class="card-body">
            <div class="d-flex justify-content-between pb-2 align-items-center">
              <h2 class="font-weight-semibold mb-0">{{App\Subject::totalSubject()}}</h2>
              <div class="icon-holder">
                <i class="mdi mdi-briefcase-outline"></i>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="font-weight-semibold mb-0">Total Subject</h5>
              <p class="text-white mb-0">Since last Year</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 grid-margin stretch-card average-price-card">
        <div class="card text-white">
          <div class="card-body">
            <div class="d-flex justify-content-between pb-2 align-items-center">
              <h2 class="font-weight-semibold mb-0">{{App\Exam::totalExam()}}</h2>
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
              <h2 class="font-weight-semibold mb-0">{{App\StudentClass::totalClass()}}</h2>
              <div class="icon-holder">
                <i class="mdi mdi-briefcase-outline"></i>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="font-weight-semibold mb-0">Total Class</h5>
              <p class="text-white mb-0">Since last Year</p>
            </div>
          </div>
        </div>
      </div>

</div>

<!-- Map Section -->
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4335.4958851958745!2d89.8283787784041!3d23.970942166333412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe0f778a011f2d%3A0x63d60d6e84affbbf!2sAmzadia%20Muktijoddha%20Academy!5e0!3m2!1sbn!2sbd!4v1585580432419!5m2!1sbn!2sbd" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>









@endsection('content')