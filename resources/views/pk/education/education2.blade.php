@section('header_link')
	<!-- For-Navigation-CSS -->

<link href="{{asset('/pk/edu1')}}/css/nav.css" rel="stylesheet" type="text/css" media="all" /> <!-- For-Navigation-CSS -->

<link rel="stylesheet" href="{{asset('/pk/edu1')}}/css/flexslider.css" type="text/css" media="screen" />
		
<link rel="stylesheet" href="{{asset('/pk/edu1')}}/css/lightbox.css"><!-- For-gallery-CSS -->


<link href="{{asset('/pk/edu1')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />


<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->

<!-- googlefonts -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">

@endsection

@include('pk.includes.header')

		
<!-- banner -->
<div class="">
 <div class="">
	<div class="header">
		<!-- //Header -->
		<div class="">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{asset('/pk/edu1')}}/images/pkedu1.jpg" alt="Los Angeles" style="height:450px">
    </div>

    <div class="item">
      <img src="{{asset('/pk/edu1')}}/images/pkedu2.jpg" alt="Chicago" style="height: 450px">
    </div>

    <div class="item">
      <img src="{{asset('/pk/edu1')}}/images/pkedu3.jpg" alt="New York" style="height: 450px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
	</div>
</div>
</div>
<!-- //banner -->


<!-- about -->
<div class="about" id="about">
	<div class="container">
		<div class="about-head text-center" >
			<h3 style="color: red">Education of PK</h3>
		</div>	
		<div class="about-top-grids">
			<a href="">
			<div class="col-md-3 grid">
				<i class="fa fa-pencil" aria-hidden="true"></i>
				<h3>Education-key to unlock door of freedom</h3>
			</div>
			</a>
			<div class="col-md-3 grid">
				<i class="fa fa-book" aria-hidden="true"></i>
				<h3>Education is the passport to the future</h3>
			</div>
			<div class="col-md-3 grid">
				<i class="fa fa-flask" aria-hidden="true"></i>
				<h3>Education is the premise of the progress</h3>
			</div>
			<div class="col-md-3 grid">
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
				<h3>Education is the most powerful weapon</h3>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="about-bottom-grid1">
			<div class="col-md-6 bottomgridtext">
				<h3>Lorem ipsum dolor sit amet ?</h3>
				<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
				<div class="readmore-w3">
					<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="col-md-6 bottomgridimg">
				<img src="{{asset('/pk/edu1')}}/images/about1.jpg" alt="">
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="about-bottom-grid2">
			<div class="col-md-6 bottomgridimg">
				<img src="{{asset('/pk/edu1')}}/images/about2.jpg" alt="">
			</div>
			<div class="col-md-6 bottomgridtext bottomleft">
				<h3>Lorem ipsum dolor sit amet ?</h3>
				<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
				<div class="readmore-w3">
					<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about -->


<!-- services -->
<div class="services" id="services">
 <div class="banner-dott1">
	<div class="container">
		<div class="about-head text-center">
			<h3>College Of Pakundiya</h3>
		</div>	
		
		<div class="service-top-grids">
			<div class="col-md-3">
				<div class="service1">
					<div class="col-md-4 icon">
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 serviceicon">
						<h5 style="color: white">PAKUNDIA DEGREE COLLEGE</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service2">
					<div class="col-md-4 icon">
						<i class="fa fa-book" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 serviceicon">
						<h5 style="color: white">PAKUNDIA MOHILA COLLEGE</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service3">
					<div class="col-md-4 icon">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 serviceicon">
						<h5 style="color: white">HOSSAINDI ADRASHA COLLEGE</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service4">
					<div class="col-md-4 icon">
						<i class="fa fa-flask" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 serviceicon">
						<h4 style="color: white">HAZI JAFAR ALI COLLEGE</h4>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="service-bottom-grids">
			<div class="col-md-3">
				<div class="service1">
					<div class="col-md-4 icon">
						<i class="fa fa-book" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 serviceicon">
						<h5 style="color: white">JANGALIA UNION COLLEGE</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service2">
					<div class="col-md-4 icon">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 serviceicon">
						<h5 style="color: white">CHARKAWNA  KARIGORI  COLLEGE</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service3">
					<div class="col-md-4 icon">
						<i class="fa fa-flask" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 serviceicon">
						<h4>Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service4">
					<div class="col-md-4 icon">
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 serviceicon">
						<h4>Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //services -->

<!-- Team section -->
<!-- <section class="team" id="team">
	<div class="container">
		<div class="about-head text-center ">
			<h3>Meet our Professors</h3>
		</div>	
		
		<div class="team-grid-top">
			<div class="col-md-3 team1">
				<div class="inner-team1">
				<img src="{{asset('/pk/edu1')}}/images/t1.jpg" alt="" />
				<h3>Selena</h3>
				<h4>Head Master</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 team1">
				<div class="inner-team1">
				<img src="{{asset('/pk/edu1')}}/images/t3.jpg" alt="" />
				<h3>Mary louis</h3>
				<h4>Science Professor</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 team1">
				<div class="inner-team1">
				<img src="{{asset('/pk/edu1')}}/images/t2.jpg" alt="" />
				<h3>Paul kerry</h3>
				<h4>Staff</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 team1">
				<div class="inner-team1">
				<img src="{{asset('/pk/edu1')}}/images/t4.jpg" alt="" />
				<h3>john watson</h3>
				<h4>Lab Staff</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
	</div>
</section> -->
<!-- //Team section -->

<!--gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
		<div class="about-head text-center ">
			<h3>Gallery</h3>
		</div>	
			<div class="gallery-info">
				<div class="col-md-3 gallery-grids">
					<a href="images/p1.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p1.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p2.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p2.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p3.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p3.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p4.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p4.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p5.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p5.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p6.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p6.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p7.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p7.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p8.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p8.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p9.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p9.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p10.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p10.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p11.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p11.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p12.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('/pk/edu1')}}/images/p12.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<script src="{{asset('/pk/edu1')}}/js/lightbox-plus-jquery.min.js"></script>
		</div>
</div>
<!--//gallery-->

<!--count-->
<!-- <div class="count-agileits" id="stats">
				<div id="particles-js"></div>
		<div class="about-head text-center ">
			<h3>stats</h3>
		</div>	
					<div class="count-grids">
					<div class="count-bgcolor-w3ls">
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1052' data-delay='.5' data-increment="5">1052</div>
									<span></span>
									<h5>Services available</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2372' data-delay='.5' data-increment="5">2372</div>
									<span></span>
									<h5>Clients</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3272' data-delay='.5' data-increment="5">3272</div>
									<span></span>
									<h5>our projects</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1509' data-delay='.5' data-increment="5">1509</div>
									<span></span>
									<h5>Viewers</h5>
								</div>
						</div>
						<div class="clearfix"></div>
						</div>
					</div>
					<div class="statsimg">
						<div class="quote">
							<span></span>
							<h3>Education doesn't give life instead knowledge gives</h3>
							<span></span>
						</div>
					</div>
</div>
 -->
<!--count-->

<!-- contact -->
<!-- <div id="contact" class="contact">
	<div class="container">
		<div class="about-head text-center ">
			<h3>Contact</h3>
		</div>	
		<div class="gal-btm">
			<div class="map-home">
				<div class="col-md-4 drop-pad sign-gd-two">
					<h3>Contact Us</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> Aichi Central, Island, <span>Japan.</span></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> +015 289 3441</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					</ul>
					<h3 class="connect">Get Connected</h3>
					<ul class="top-links">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-md-8 contact-w3ls">
					<form action="#" method="post">
					<div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">
					
						<div class="form-control"> 
							<label class="header">Full Name <span>:</span></label>
							<input type="text" name="First Name" placeholder="Name" required="">
						</div>
						
						<div class="form-control"> 
							<label class="header">Email <span>:</span></label>
							<input type="email" class="email" name="Email" placeholder="Email" required="">
						</div>
						
						<div class="form-control">
							<label class="header">Mobile Number <span>:</span></label>
							<input type="text" name="Number" placeholder="Mobile Number" required="">
						</div>	
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					<!-- </div> 
					<div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
						<div class="form-control">
							<label class="header">Message <span>:</span></label>
							<textarea name="Message" placeholder="Message" required=""></textarea>
						</div>	
					</div>
					<div class="clearfix"> </div> 
						<input type="submit" value="Send">
				</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div> --> -->
<!-- //contact -->

<!-- map -->
	<div class="frame">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d836676.1030555099!2d136.69469057858754!3d35.00004521362227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004bad5499332e7%3A0xeb5fa65d181541a7!2sAichi+Prefecture%2C+Japan!5e0!3m2!1sen!2sin!4v1493895815273"></iframe>
	</div>
<!-- //map -->
	


<!-- modal popup -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
	<!-- Modal1 -->
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Inspiring</h4>
				<img src="{{asset('/pk/edu1')}}/images/banner.jpg" alt=" " class="img-responsive">
				<h5>Lorem Ipsum</h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->
<!-- //modal popup -->

<!-- main -->
<!-- search-scripts -->
	<script src="{{asset('/pk/edu1')}}/js/classie.js"></script>
	<script src="{{asset('/pk/edu1')}}/js/uisearch.js"></script>
	<script>
	new UISearch( document.getElementById( 'sb-search' ) );
	</script>
<!-- //search-scripts -->









@include('pk.includes.footer')








@section('footer_script')

	<script src="{{asset('/pk/edu1')}}/js/classie.js"></script>
	<script src="{{asset('/pk/edu1')}}/js/uisearch.js"></script>
	<script>
	new UISearch( document.getElementById( 'sb-search' ) );
	</script>
<!-- //search-scripts -->

<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="{{asset('/pk/edu1')}}/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
<!-- //js -->

<!-- Baneer-js -->
<!--FlexSlider-->
	<script defer src="js/jquery.flexslider.js"></script>
<!--Start-slider-script-->
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->
<!-- //Baneer-js -->

<script type="text/javascript" src="js/numscroller-1.0.js"></script><!-- numscroller js file -->

<!-- js for navigation -->
	<script src="{{asset('/pk/edu1/')}}/js/nav.js"></script>
<!-- //js for navigation -->

<!-- //here starts scrolling icon -->

	<script type="text/javascript" src="{{asset('/pk/edu1/')}}/js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
@endsection