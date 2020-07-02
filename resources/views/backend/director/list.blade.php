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
		              <p class="font-weight-semibold mb-0">Since Last Year</p>
		            </div>
		            <h3 class="font-weight-medium mb-4">{{App\Income::income()}}</h3>
		          </div>
		          <canvas class="mt-n4" height="90" id="total-revenue"></canvas>
		        </div>
		      </div>

		    <div class="col-md-6 grid-margin stretch-card">
		        <div class="card">
		          <div class="card-body pb-0">
		            <div class="d-flex justify-content-between">
		              <h4 class="card-title mb-0">Total Expence</h4>
		              <p class="font-weight-semibold mb-0">Since Last Year</p>
		            </div>
		            <h3 class="font-weight-medium">{{App\Teacher::totalTeacher()}}</h3>
		          </div>
		          <canvas class="mt-n3" height="90" id="total-transaction"></canvas>
		        </div>
		    </div>

		</div>


		<div class="row">
			<!--Director List-->
			<div class="col-md-4 grid-margin stretch-card average-price-card" id="studentfeediv">
		        <div class="card text-white">
		          	
		          <div class="card-body">
		            	<a href="{{route('admin.director.list')}}">
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
		      </a>
		            </div>
		          </div>
		        </div>
		      </div>
				<!--Director Create -->
		      <div class="col-md-4 grid-margin stretch-card average-price-card">
		        <div class="card text-white">
		          	<a href="{{route('admin.director.create')}}">
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
		          </a>
		        </div>
		      </div>

		      <div class="col-md-4 grid-margin stretch-card average-price-card">
		        <div class="card text-white">
		          	<a href="">
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
		          </a>
		        </div>
		      </div>

			</div>
		</div>
	</div>

		

@endsection('content')