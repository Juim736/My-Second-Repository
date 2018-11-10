<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PK Friends</title>
	<link href="{{asset('/pk')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('/pk')}}/css/font-awesome.css" rel="stylesheet"> 
	<link href="{{asset('/pk')}}/css/cmxform.css" rel="stylesheet"> 
	<script type="text/javascript" src="{{ asset('pk/')}}/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="{{ asset('pk/')}}/js/jquery.validate.min.js"></script>
</head>
<body>
	<div class="">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
			 	<form  action="{{url('/sign-up-post')}}" method="post" id="sign_up_form" enctype="multipart/form-data">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">Sign Up</h4>
						</div>
						<div class="panel-body">
							@if(Session::has('err_msg'))
							<div class="alert alert-danger">
								{!! Session::get('err_msg') !!}
							</div>
							@endif
							@if(Session::has('suc_msg'))
							<div class="alert alert-success">
								{!! Session::get('suc_msg') !!}
							</div>
							@endif
								{{csrf_field()}}
								@if ($errors->has('first_name'))
                                    <span class="invalid-feedback" style="color: red">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" class="form-control" name="first_name" placeholder="Your First Name" minlength="2" id="first_name" required="required">
									</div>
								</div>
								@if ($errors->has('last_name'))
                                    <span class="invalid-feedback" style="color: red">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" class="form-control" name="last_name" placeholder="Your Last Name" minlength="2" id="last_name" required="required">
									</div>
								</div>
								@if ($errors->has('mobile'))
                                    <span class="invalid-feedback" style="color: red">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
								<div class="" id="mobile_err" style="color: red"></div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
										<input type="text" class="form-control" name="mobile" id="mobile" placeholder="01***********" onkeypress = "return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" maxlength="11" required="required">
									</div>
								</div>
								<div class="" id="mobile_err2" style="color: red"></div>
								@if ($errors->has('password'))
                                    <span class="invalid-feedback" style="color: red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
								<div class="" id="pass_err" style="color: red"></div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" class="form-control" placeholder="Type your password" name="password"  id="password" maxlength="18" required="required">
									</div>
								</div>
								<div class="" id="con_pass_err" style="color: red"></div>
								@if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" style="color: red">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" class="form-control" placeholder="Re-Type your password" name="password_confirmation" id="password_confirmation"  maxlength="18" required="required">
									</div>
								</div>
								@if ($errors->has('union'))
                                    <span class="invalid-feedback" style="color: red">
                                        <strong>{{ $errors->first('union') }}</strong>
                                    </span>
                                @endif
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-bank"> Your Union</i>
										</span>
										<select name="union" id="union" class="form-control" required="required">
											<option value="">Select One</option>
											<option value="Pakundiya">Pakundiya</option>
											<option value="Hosendi">Hosendi</option>
											<option value="Narandi">Narandi</option>
											<option value="Patuyavannga">Patuyavannga</option>
											<option value="Chondipasha">Chondipasha</option>
											<option value="Sukhiya">Sukhiya</option>
											<option value="Janngaliya">Janngaliya</option>
											<option value="Chorporadi">Chorporadi</option>
											<option value="Egarosindur">Egarosindur</option>
											<option value="Burudiya">Burudiya</option>
										</select>
									</div>
								</div>
								@if ($errors->has('blood'))
                                    <span class="invalid-feedback" style="color: red">
                                        <strong>{{ $errors->first('blood') }}</strong>
                                    </span>
                                @endif
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-heart"> Blood Group</i>
										</span>
										<select name="blood" id="blood" class="form-control" required="required">
											<option value="">Select One</option>
											<option value="A+">A+ Positive</option>
											<option value="A-">A- Negetive</option>
											<option value="B+">B+ Positive</option>
											<option value="B-">B- Negetive</option>
											<option value="O+">O+ Positive</option>
											<option value="O-">O- Negetive</option>
											<option value="AB+">AB+ Positive</option>
											<option value="AB-">AB- Negetive</option>
										</select>
									</div>
								</div>
						</div>
						<div class="panel-footer">
							<div class="text-center">
								<button type="submit" id="btn_submit" class="btn btn-primary btn-xs btn-sm">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#mobile').on('keyup',function(){
				var mobile = $(this).val();
				var mob = mobile.substr(0,3);
				if(mob == '017' || mob == '018' || mob == '019' || mob == '016' || mob == '015' || mob == '011'){
					$('#mobile_err').html('');
				}else{
					$('#mobile_err').html('<p>Invalid Mobile Number</p>');
				}
				if(mobile.length != 11){
					$('#mobile_err2').html('<p>Mobile Number Be 11 chracter</p>');
				}else{
					$('#mobile_err2').html('');
				}
			});
			$('#password').on('keyup',function(){
				var password = $(this).val();
				if(password.length < 18 && password.length > 5){
					$('#pass_err').html('');
				}else{
					$('#pass_err').html('<p>Password should be 6 to 18 chracter</p>');
				}
				var con_pass = $('#password_confirmation').val();
				if(con_pass != ''){
					if(password === con_pass){
						$('#con_pass_err').html('');
					}else{
						$('#con_pass_err').html("<p>Password Does't Match</p>");
					}
				}
			});
			$('#password_confirmation').on('keyup',function(){
				var con_pass = $(this).val();
				var pass     = $('#password').val();
				if(pass === con_pass){
					$('#con_pass_err').html('');
				}else{
					$('#con_pass_err').html("<p>Password Does't Match</p>");
				}
			})
			$('#sign_up_form').validate({
				rules: {
					first_name: {
						required: true,
						minlength: 2,
					},
					last_name: {
						required: true,
						minlength: 2,
					},
					mobile : {
						required: true,
						number: true,
						minlength: 11, 
						maxlength: 11, 
					},
					password: {
						required: true,
						minlength: 6,
						maxlength: 18,
					},
					password_confirmation: {
						required: true,
						minlength: 6,
						maxlength: 18,
						equalTo : '#password'
					},
					union: {
						required: true,
					},
					blood: {
						required: true,
					}
				},
				messages: {
					first_name: {
						required : "First Name is required",
						minlength : "First Name at least 2 Chracter",
					},
					last_name: {
						required : "Last Name is required",
						minlength : "Last Name at least 2 Chracter",
					},
					mobile: {
						required: "Mobile Number is required",
						number: "Mobile Would be number not chracter",
						minlength: "Mobile Must be 11 chracter",
					},
					password : {
						required : "Password is required",
						minlength : "Password at least 6 Chracter",
						maxlength : "Password at not above 18 Chracter",
					},
					password_confirmation : {
						required : "Confirm Password is required",
						minlength : "Confirm Password at least 6 Chracter",
						maxlength : "Confirm Password at not above 18 Chracter",
						equalTo : "Password Doen't match ,Please enter the same password as above",
					},
					union : {
						required :  "Union is required",
					},
					blood : {
						required :  "Blood Group is required, Please enter your currect blood Group",
					},

				}
			});
		});
	</script>
</body>
</html>