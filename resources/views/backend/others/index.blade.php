@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-info text-white text-center mb-2">Other's Section</h2>
		@include('partials.message')
	</div>
	<div class="card-body">
		 
		<div class="row">
			<div class="col-6">
				<div class="add-important-person">
					<a href="{{route('admin.others.list.important')}}" class="btn btn-success d-block mb-1 p-3">Important Person List</a>
					<div class="card-header bg-dark text-white">
						<h2>Add Important Person</h2>
					</div>
					<div class="card-body">
						<form action="{{route('admin.others.add.important')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="ip_name">Name</label>
								<input type="text" id="ip_name" name="ip_name" class="form-control" placeholder="Enter Name Here"> 
							</div>
							<div class="form-group">
								<label for="ip_phone">Phone Number</label>
								<input type="number" id="ip_phone" name="ip_phone" class="form-control">
							</div>
							<div class="form-group">
								<label for="ip_address">Address</label>
								<textarea name="ip_address" id="ip_address" class="form-control" cols="30" rows="10"></textarea>
							</div>
							<div class="form-group">
								<label for="ip_position">Position</label>
								<input type="text" id="ip_position" name="ip_position" class="form-control" placeholder="Enter Position Here">
							</div>
							<div class="form-group">
								<label for="ip_description">Description</label>
								<input type="text" id="ip_description" class="form-control" name="ip_description" placeholder="Enter Description Here">
							</div>
							<input type="submit" class="btn btn-success" value="Insert">
						</form>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="add-outsider-person">
					<a href="{{route('admin.others.list.outsider')}}" class="btn btn-success d-block mb-1 p-3">Outsider Person List</a>
					<div class="card-header bg-dark text-white">
						<h2>Add Outsider Person</h2>
					</div>
					<div class="card-body">
						<form action="{{route('admin.others.add.outsider')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="op_name">Name</label>
								<input type="text" id="op_name" name="op_name" class="form-control" placeholder="Enter Name Here"> 
							</div>
							<div class="form-group">
								<label for="op_phone">Phone Number</label>
								<input type="number" id="op_phone" name="op_phone" class="form-control">
							</div>
							<div class="form-group">
								<label for="op_address">Address</label>
								<textarea name="op_address" id="op_address" class="form-control" cols="30" rows="10"></textarea>
							</div>
							<div class="form-group">
								<label for="op_description">Description</label>
								<input type="text" id="op_description" class="form-control" name="op_description" placeholder="Enter Description Here">
							</div>
							<input type="submit" class="btn btn-success" value="Insert">
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>










@section('ajax')

<script>


$("#studentfeediv").click(function(){
	$("#studentfee").removeClass("d-none");
	$("#awarediv").addClass("d-none");



	$('#month').change(function(){
		var clas = $('#studentfeeclass').val();
		var month = $("#month").val();
		$("#student-tbody").html("");
		var value = "";
		$.get("http://localhost/school_management_system/public/admin/sms/studentfee/"+clas+"/"+month, function(data){

		data.forEach(function(element){

			var url = '';
				value += '<tr><td>'+element.students_id+'</td><td>'+element.student_name_english+'</td><td>'+element.student_roll+'</td><td>'+element.father_name_english+'</td><td>'+element.father_mobile+'</td></tr>';
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



$("#awareness").click(function(){
	$("#studentfee").addClass("d-none");

	$("#awarediv").removeClass("d-none");


	$('#class').keypress(function(){
		var studentClass = $('#class').val();
		$("#student-tbody").html("");
		var value = "";
		$.get("http://localhost/school_management_system/public/admin/student/get-students/"+studentClass, function(data){

			data.forEach(function(element){
					value += '<tr><td><a href="{{route('admin.student', "'+element.student_id+'")}}">'+element.student_name_english+'</a></td></tr>';
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





})
		
			











</script>
@endsection

@endsection('content')