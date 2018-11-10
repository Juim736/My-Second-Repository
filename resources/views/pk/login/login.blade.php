<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Pk Friends</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <!-- //custom-theme -->
    <link href="{{asset('/pk')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/pk')}}/css/component.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/pk')}}/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/pk')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="{{asset('/pk')}}/css/font-awesome.css" rel="stylesheet">

    <link href="{{asset('/pk')}}/css/cmxform.css" rel="stylesheet">
   

</head>

<body>
    <!-- banner -->
    <div class="wthree_agile_admin_info">
        <!-- /w3_agileits_top_nav-->
        <!-- /nav-->
        <div class="w3_agileits_top_nav">
            <ul id="gn-menu" class="gn-menu-main">

                <!-- //nav_agile_w3l -->
                <li class="second logo admin">
                    <h1><a href="{{url('/pk-login')}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i>PK Friends </a></h1></li>

                <li class="second w3l_search admin_login">

                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="Search here..." required="">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>

                </li>
                <li class="second full-screen">
                    <section class="full-top">
                        <button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
                    </section>
                </li>

            </ul>
            <!-- //nav -->

        </div>
        <div class="clearfix"></div>
        <!-- //w3_agileits_top_nav-->

        <div class="col-md-12" style="background: #ffffff">
            <div class="col-md-8" style="background: #FAE0E0">
                <div class="" style="margin-top: 70px; height: 560px;">
                    <img src="{{asset('/pk/')}}/images/pk-map.jpg" class="img-cercle" alt="Image" height="90%" width="100%">

                </div>
            </div>
            <div class="col-md-4" style="margin-top: 40px; background: #F9EAEA">
                <div class="registration admin_agile">

                    <div class="signin-form">
                        <h2>Sign In</h2> @if(Session::has('suc_msg'))
                        <div class="alert alert-success">
                            {!! Session::get('suc_msg') !!}
                        </div>
                        @endif

                        <div class="login-form">
                            <form action="{{ url('/login-pk')}}" id="login_form" method="post">
                                {{csrf_field()}}
                                 @if(Session::has('err_msg'))
	                                <div class="alert alert-danger">
	                                    {{ Session::get('err_msg') }}
	                                </div>
                                @endif 
                                @if($errors->has('mobile'))
                                	<strong style="color:red">{{ $errors->first('mobile') }}</strong>
                                 @endif
                                 <strong class="" id="mobile_err" style="color: red"></strong>
                                <input type="text" name="mobile" onkeypress = "return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" maxlength="11" id="mobile" placeholder="Enter your phone number" maxlength="11" required="required"> 
                                <strong class="" id="mobile_err2" style="color: red"></strong>
                                @if($errors->has('password'))
                                	<strong style="color: red">{{ $errors->first('password') }}</strong> 
                                @endif
                                <strong class="" id="pass_err" style="color: red"></strong>
                                <input type="password" name="password" id="password" placeholder="Enter your password" maxlength="18" required>
                                <input type="submit" value="LOG IN">
                            </form>

                            <a href="{{asset('/sign-up-form')}}">
                                <input type="submit" value="Sign Up">
                            </a>

                        </div>
                        <div class="login-social-grids admin_w3">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>

                        <h6><a href="">Back To Home</a></h6>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- banner -->
    <!--copy rights start here-->
    <div class="copyrights">
        <p>© 2018 Pakundiya Pk Friends Zone <a href="">Pk Friends</a> </p>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                            <br>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!--copy rights end here-->
    <!-- js -->

    <script type="text/javascript" src="{{asset('/pk')}}/js/jquery-2.1.4.min.js"></script>
    <script src="{{asset('/pk')}}/js/modernizr.custom.js"></script>

    <script src="{{asset('/pk')}}/js/jquery.nicescroll.js"></script>
    <script src="{{asset('/pk')}}/js/scripts.js"></script>

    <script type="text/javascript" src="{{asset('/pk')}}/js/bootstrap-3.1.1.min.js"></script>
     <script type="text/javascript" src="{{ asset('pk/')}}/js/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
        	$('#mobile').on('keyup',function(){
				var mobile = $(this).val();
				var mob = mobile.substr(0,3);
				if(mob == '017' || mob == '018' || mob == '019' || mob == '016' || mob == '015' || mob == '011'){
					$('#mobile_err').html('');
				}else{
					$('#mobile_err').html('<p>Invalid Mobile Number</p>');
				}
				if(mobile.length != 11){
					$('#mobile_err2').html('<p>Mobile Number Must Be 11 chracter</p>');
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
			});
           
            $('#login_form').validate({
            	rules:{
            		mobile:{
            			required: true,
            			minlength: 11,
            			maxlength: 11
            		},
            		password: {
            			required: true,
            			minlength: 6,
            			maxlength: 18
            		}
            	},
            	messages: {
        			mobile: {
        				required : "Mobile number is required",
        				minlength : "Mobile number must be 11 chracter",
        				maxlength : "Mobile number must be 11 chracter"
        			},
        			password:{
        				required : "Password is required",
        				minlength : "Password at least 6 chracter",
        				maxlength : "Password not above 18 chracter"
        			}
            	}
            });
        });
    </script>

</body>

</html>