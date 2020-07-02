@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center mb-2">Send Sms</h2>
		@include('partials.message')
	</div>
	<div class="card-body">
		 
		<div class="row">
			
			<div class="col-md-4 grid-margin stretch-card average-price-card" id="studentfeediv">
		        <div class="card text-white">
		          	
		          <div class="card-body">
		            <div class="d-flex justify-content-between pb-2 align-items-center">
		              <h2 class="font-weight-semibold mb-0">Unpaid</h2>
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

		      <div class="col-md-4 grid-margin stretch-card average-price-card" id="awareness">
		        <div class="card text-white">
		          <div class="card-body">
		            <div class="d-flex justify-content-between pb-2 align-items-center">
		              <h2 class="font-weight-semibold mb-0"></h2>
		              <div class="icon-holder">
		                <i class="mdi mdi-briefcase-outline"></i>
		              </div>
		            </div>
		            <div class="d-flex justify-content-between">
		              <h5 class="font-weight-semibold mb-0">Awareness</h5>
		              <p class="text-white mb-0">Student & Parrent</p>
		            </div>
		          </div>
		        </div>
		      </div>

		      <div class="col-md-4 grid-margin stretch-card average-price-card" id="vipperson">
		        <div class="card text-white">
		          
		          <div class="card-body">
		            <div class="d-flex justify-content-between pb-2 align-items-center">
		              <h2 class="font-weight-semibold mb-0"></h2>
		              <div class="icon-holder">
		                <i class="mdi mdi-briefcase-outline"></i>
		              </div>
		            </div>
		            <div class="d-flex justify-content-between">
		              <h5 class="font-weight-semibold mb-0">Vip Person</h5>
		              <p class="text-white mb-0">Since last Year</p>
		            </div>
		          </div>
		          
		        </div>
		      </div>

		</div>

		<!--Student Fee From Section -->
		<div id="studentfee" class="d-none">
			<div class="form-group" id="">
				<label for="class"> Select A Class</label>
				<select name="class" id="studentfeeclass" class="form-control">
					<option value="">Select One</option>
					@foreach(App\StudentClass::allClass() as $class)
						<option value="{{$class->classes_id}}">{{$class->class_name}}</option>
					@endforeach
				</select>
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

		<!-- Student Awareness Section -->

		<div class="d-none" id="awarediv">
			<div class="form-group">
				<button class="btn btn-primary">Class</button><button class="btn btn-success ml-3">Village</button><button class="btn btn-info ml-3">Name</button>
				<input type="text" id="class" class="form-control mt-2" name="awareinput" placeholder="Enter Your Keyword Here">
			</div>
		</div>

		<!-- Vip Secion -->

		<div class="d-none" id="vipdiv">
			<div class="form-group">
				<label for="vip">Select Category</label>
				<select name="vip" id="vip" class="form-control">
					<option value="">Select One</option>
					<option value="1">Important Person</option>
					<option value="2">Outsider Person</option>
					<option value="3">Teacher</option>
				</select>
			</div>
		</div>

		<!-- Student Resutl Section -->
		<table class="table table-striped" id="stable">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Roll</th>
						<th>Father's Name</th>
						<th>Phone</th>
						<th>Fee</th>
					</tr>
				</thead>
				<tbody id="student-tbody">
					
				</tbody>		
		</table>
		<div class="" id="msgbox">
			<h3 id="return" class="d-none alert alert-success"></h3>
			<div class="form-group pt-4">
				<label for="message">Message</label>
				<textarea name="message" id="message" cols="30" rows="10" class="form-control">
					
				</textarea>
			</div>
			<button class="btn btn-info" id="allsend">All Send</button>
		</div>
	</div>

	<!--- Vip Details Show Section -->

		<div class="ipshow d-none m-3">
			<form action="{{route('admin.sms.vip')}}" method="post">
				@csrf
				<table class="table table-striped">
					<thead>
						<tr>
							<td>Name</td>
							<td>Phone</td>
							<td>Description</td>
							<td>Select <input type="checkbox" onclick="toggle(this)">Check All</td>
						</tr>
					</thead>
					<tbody>
						@foreach(App\ImportantPerson::ipAll() as $ip)
						<tr>
							<td>{{$ip->ip_name}}</td>
							<td>{{$ip->ip_phone}}</td>
							<td>{{$ip->ip_description}}</td>
							<td><input type="checkbox" value="{{$ip->ip_phone}}" name="vipnumber[]" class="form-check-input"></td>
						</tr>
						@endforeach
						<tr>
							<div class="form-group">
								<label for="message">Message</label>
							<textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
							</div>
						</tr>
					</tbody>
				</table>
						<input class="btn btn-success" type="submit">
			</form>
		</div>


		<div class="opshow d-none m-3">
			<form action="{{route('admin.sms.vip')}}" method="post">
				@csrf
				<table class="table table-striped">
					<thead>
						<tr>
							<td>Name</td>
							<td>Phone</td>
							<td>Description</td>
							<td>Select <input type="checkbox" onclick="toggle(this)">Check All</td>
						</tr>
					</thead>
					<tbody>
						@foreach(App\OutsiderPerson::opAll() as $ip)
						<tr>
							<td>{{$ip->op_name}}</td>
							<td>{{$ip->op_phone}}</td>
							<td>{{$ip->op_description}}</td>
							<td><input type="checkbox" class="form-check-input" value="{{$ip->op_phone}}" name="vipnumber[]"></td>
						</tr>
						@endforeach
						<tr>
							<div class="form-group">
								<label for="message">Message</label>
							<textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
							</div>
						</tr>
					</tbody>

				</table>
				<div class="form-group">
					<input class="btn btn-success" type="submit">
				</div>
			</form>
		</div>

		<div class="teachershow d-none m-3">
			<form action="{{route('admin.sms.vip')}}" method="post">
				@csrf
				<table class="table table-striped">
					<thead>
						<tr>
							<td>Name</td>
							<td>Phone</td>
							<td>District</td>
							<td>Select <input type="checkbox" onclick="toggle(this)">Check All</td>
						</tr>
					</thead>
					<tbody>
						@foreach(App\Teacher::total() as $teacher)
						<tr>
							<td>{{$teacher->teachers_name_english}}</td>
							<td>{{$teacher->phone}}</td>
							<td>{{$teacher->teachers_district}}</td>
							<td><input type="checkbox" class="form-check-input" value="{{$teacher->phone}}" name="vipnumber[]"></td>
						</tr>
						@endforeach
						<tr>
							<div class="form-group">
								<label for="message">Message</label>
							<textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
							</div>
						</tr>
					</tbody>

				</table>
				<div class="form-group">
					<input class="btn btn-success" type="submit">
				</div>
			</form>
		</div>
</div>


@section('ajax')

<script>


$("#studentfeediv").click(function(){
	$("#studentfee").removeClass("d-none");
	$("#msgbox").removeClass("d-none");
	$("#stable").removeClass("d-none");
	$("#awarediv").addClass("d-none");
	$("#vipdiv").addClass("d-none");



	$('#month').change(function(){
		var clas = $('#studentfeeclass').val();
		var month = $("#month").val();
		$("#student-tbody").html("");
		var value = "";
		$.get("http://localhost/school_management_system/public/admin/sms/studentfee/"+clas+"/"+month, function(data){

		data.forEach(function(element){

			var url = '';
				value += '<tr><td>'+element.students_id+'</td><td>'+element.student_name_english+'</td><td>'+element.student_roll+'</td><td>'+element.father_name_english+'</td><td>'+element.father_mobile+'</td><td>'+element.fee+'</td></tr>';
			});

			$("#student-tbody").html(value);

		});


	});

	
		
	$('#month').change(function(){


		$('#allsend').click(function(){
			$('#return').removeClass('d-none');

			var clas = $('#studentfeeclass').val();
			var month = $("#month").val();
			var message = $("#message").val();
			$("#return").html("");
			$.get("http://localhost/school_management_system/public/admin/sms/sendsms/"+clas+"/"+month+"/"+message, function(data){


			$("#return").html(data);

			});

		});

	});
			
});

//Aware Section

$("#awareness").click(function(){
	$("#studentfee").addClass("d-none");
	$("#vipdiv").addClass("d-none");
	$("#awarediv").removeClass("d-none");
	$("#msgbox").removeClass("d-none");
	$("#stable").removeClass("d-none");


	$('#class').keypress(function(){
		var studentClass = $('#class').val();
		$("#student-tbody").html("");
		var value = "";
		$.get("http://localhost/school_management_system/public/admin/student/get-students/"+studentClass, function(data){

			data.forEach(function(element){
					value += '<tr><td>'+element.students_id+'</td><td>'+element.student_name_english+'</td><td>'+element.student_roll+'</td><td>'+element.father_name_english+'</td><td>'+element.father_mobile+'</td><td>'+element.fee+'</td></tr>';
			});

			$("#student-tbody").html(value);

			
			$('#allsend').click(function(){
				var message = $("#message").val();
				$('#return').removeClass('d-none');
				$("#return").html("");
				$.get("http://localhost/school_management_system/public/admin/sms/sendaware/"+studentClass+"/"+message, function(data){


				$("#return").html(data);

				});

			});
		});
	});

});

//Vip Section
$("#vipperson").click(function(){

	
	$("#studentfee").addClass("d-none");
	$("#stable").addClass("d-none");
	$("#vipdiv").removeClass("d-none");
	$("#awarediv").addClass("d-none");
	$("#msgbox").addClass("d-none");

	$("#vip").change(function(){
		var vipval = $("#vip").val();

		if (vipval == '1') {
			$(".ipshow").removeClass('d-none');
			$('.opshow').addClass('d-none');
			$('.teachershow').addClass('d-none');
		}else if(vipval == '2'){
			$('.opshow').removeClass('d-none');
			$('.ipshow').addClass('d-none');
			$('.teachershow').addClass('d-none');
		}else if(vipval == '3'){
			$('.teachershow').removeClass('d-none');
			$(".ipshow").addClass('d-none');
			$('.opshow').addClass('d-none');

		};
	});

});
		

function toggle(source) {
	  checkboxes = document.getElementsByName('vipnumber[]');
	  for(var i=0, n=checkboxes.length;i<n;i++) {
	    checkboxes[i].checked = source.checked;
	  }
	}


</script>
@endsection

@endsection('content')