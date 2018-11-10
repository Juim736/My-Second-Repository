<div class="container">

    <div class="social_media_w3ls">
     <div class="row">
        <div class="col-md-3 socail_grid_agile facebook">
                                     <ul class="icon_w3_info">
                                       <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li>Facebook</li>
                                     </ul>
                                      <ul class="icon_w3_social">
                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
                                     <div class="clearfix"></div>
                                      <div class="bottom_info_social">
                                     <div class="col-md-4 agile_w3l_social_media_text_img">
                                        <img src="{{asset('/pk/')}}/images/a3.jpg" alt="">
                                     </div>
                                      <div class="col-md-8 agile_w3l_social_media_text">
                                        <h4>Shovon</h4>
                                        <p>Graphics Designer & Textile Engineer</p>
                                     </div>
                                    
                                     <div class="clearfix"></div>
                                     </div>
                              </div>
                              <div class="col-md-3 socail_grid_agile twitter">
                                         <ul class="icon_w3_info">
                                       <li><a href="#" class="wthree_facebook"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li>Twitter</li>
                                     </ul>
                                      <ul class="icon_w3_social">
                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
                                     <div class="clearfix"></div>
                                      <div class="bottom_info_social">
                                     <div class="col-md-4 agile_w3l_social_media_text_img">
                                        <img src="{{asset('/pk/')}}/images/a1.jpg" alt="">
                                     </div>
                                      <div class="col-md-8 agile_w3l_social_media_text">
                                        <h4>Priti</h4>
                                        <p>Garudayal College (chemist)</p>
                                     </div>
                                    
                                     <div class="clearfix"></div>
                                     </div>
                              </div>
                              <div class="col-md-3 socail_grid_agile gmail">
                                     <ul class="icon_w3_info">
                                       <li><a href="#" class="wthree_facebook"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                       <li>Google+</li>
                                     </ul>
                                      <ul class="icon_w3_social">
                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
                                     <div class="clearfix"></div>
                                      <div class="bottom_info_social">
                                     <div class="col-md-4 agile_w3l_social_media_text_img">
                                        <img src="{{asset('/pk/')}}/images/a2.jpg" alt="">
                                     </div>
                                      <div class="col-md-8 agile_w3l_social_media_text">
                                        <h4>Sagor</h4>
                                        <p>Daffodil University(Software Engineer)</p>
                                     </div>
                                    
                                     <div class="clearfix"></div>
                                     </div>
                              </div>
                              <div class="col-md-3 socail_grid_agile dribble">
                              
                                 <ul class="icon_w3_info">
                                      <li><a href="#" class="wthree_facebook"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                       <li>Dribbble</li>
                                     </ul>
                                      <ul class="icon_w3_social">
                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
                                     <div class="clearfix"></div>
                                      <div class="bottom_info_social">
                                     <div class="col-md-4 agile_w3l_social_media_text_img">
                                        <img src="{{asset('/pk/')}}/images/a4.jpg" alt="">
                                     </div>
                                      <div class="col-md-8 agile_w3l_social_media_text">
                                        <h4>Mariana</h4>
                                        <p>Dhaka University (psychologist)</p>
                                        
                                     </div>
                                    
                                     <div class="clearfix"></div>
                                     </div>

                              </div>
                              <div class="clearfix"></div>
                            </div>
                            </div>

</div>
<br>
						
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 Pk-friends Team | Develop by  <a href="{{url('/pk-friends')}}" target="_blank">Pk-friends</a>| Please join with us <a href="">Sign Up</a> </p>
</div>	
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="{{ asset('pk/')}}/js/jquery-2.1.4.min.js"></script>

	<!-- /amcharts -->
				<script src="{{ asset('pk/')}}/js/amcharts.js"></script>
		       <script src="{{ asset('pk/')}}/js/serial.js"></script>
				<script src="{{ asset('pk/')}}/js/export.js"></script>	
				<script src="{{ asset('pk/')}}/js/light.js"></script>
				<!-- Chart code -->
	 <script>
var chart = AmCharts.makeChart("chartdiv", {
    "theme": "light",
    "type": "serial",
    "startDuration": 2,
    "dataProvider": [{
        "country": "Pakundiya",
        "visits": 2026,
        "color": "#FF0F00"
    }, {
        "country": "Hosendi",
        "visits": 1882,
        "color": "#FF6600"
    }, {
        "country": "Narandi",
        "visits": 1809,
        "color": "#FF9E01"
    }, {
        "country": "Patuabhanga",
        "visits": 1322,
        "color": "#FCD202"
    }, {
        "country": "Sukhia ",
        "visits": 1122,
        "color": "#F8FF01"
    }, {
        "country": "Egarasindur ",
        "visits": 1114,
        "color": "#B0DE09"
    }, {
        "country": "Chandi Pasha",
        "visits": 1384,
        "color": "#04D215"
    }, {
        "country": "Char Faradi",
        "visits": 711,
        "color": "#0D8ECF"
    }, {
        "country": "Jangalia ",
        "visits": 1465,
        "color": "#0D52D1"
    }, {
        "country": "Barudia ",
        "visits": 580,
        "color": "#2A0CD0"
    }],
    "valueAxes": [{
        "position": "left",
        "axisAlpha":0,
        "gridAlpha":0
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "colorField": "color",
        "fillAlphas": 0.85,
        "lineAlpha": 0.1,
        "type": "column",
        "topRadius":1,
        "valueField": "visits"
    }],
    "depth3D": 40,
	"angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "country",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha":0,
        "gridAlpha":0

    },
    "export": {
    	"enabled": true
     }

}, 0);
</script>
<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chartdiv1", {
    "type": "serial",
	"theme": "light",
    "legend": {
        "horizontalGap": 10,
        "maxColumns": 1,
        "position": "right",
		"useGraphSettings": true,
		"markerSize": 10
    },
    "dataProvider": [{
        "year": 2017,
        "europe": 2.5,
        "namerica": 2.5,
        "asia": 2.1,
        "lamerica": 0.3,
        "meast": 0.2,
        "africa": 0.1
    }, {
        "year": 2016,
        "europe": 2.6,
        "namerica": 2.7,
        "asia": 2.2,
        "lamerica": 0.3,
        "meast": 0.3,
        "africa": 0.1
    }, {
        "year": 2015,
        "europe": 2.8,
        "namerica": 2.9,
        "asia": 2.4,
        "lamerica": 0.3,
        "meast": 0.3,
        "africa": 0.1
    }],
    "valueAxes": [{
        "stackType": "regular",
        "axisAlpha": 0.5,
        "gridAlpha": 0
    }],
    "graphs": [{
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Europe",
        "type": "column",
		"color": "#000000",
        "valueField": "europe"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "North America",
        "type": "column",
		"color": "#000000",
        "valueField": "namerica"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Asia-Pacific",
        "type": "column",
		"color": "#000000",
        "valueField": "asia"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Latin America",
        "type": "column",
		"color": "#000000",
        "valueField": "lamerica"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Middle-East",
        "type": "column",
		"color": "#000000",
        "valueField": "meast"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Africa",
        "type": "column",
		"color": "#000000",
        "valueField": "africa"
    }],
    "rotate": true,
    "categoryField": "year",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "gridAlpha": 0,
        "position": "left"
    },
    "export": {
    	"enabled": true
     }
});
</script>



	<!-- //amcharts -->
		<!-- <script src="{{ asset('pk/')}}/js/chart.js"></script> -->
				<script src="{{ asset('pk/')}}/js/Chart.min.js"></script>
		<script src="{{ asset('pk/')}}/js/modernizr.custom.js"></script>
		
		<script src="{{ asset('pk/')}}/js/classie.js"></script>
		<script src="{{ asset('pk/')}}/js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->

<!-- /circle-->
	 <script type="text/javascript" src="{{ asset('pk/')}}/js/circles.js"></script>
					         <script>
								var colors = [
										['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
									];
								for (var i = 1; i <= 4; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 30 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
	<!-- //circle -->
	<!--skycons-icons-->
<script src="{{ asset('pk/')}}/js/skycons.js"></script>
<script>
									 var icons = new Skycons({"color": "#fcb216"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
								<script>
									 var icons = new Skycons({"color": "#fff"}),
										  list  = [
											"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
<!--//skycons-icons-->
<!-- //js -->
<script src="{{ asset('pk/')}}/js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		<script src="{{ asset('pk/')}}/js/flipclock.js"></script>
    <script src="{{asset('/pk/edu1')}}/js/SmoothScroll.min.js"></script>
	
	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			
			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter'
		    });
		});
	</script>

<script src="{{ asset('pk/')}}/js/bars.js"></script>
<script src="{{ asset('pk/')}}/js/jquery.nicescroll.js"></script>
<script src="{{ asset('pk/')}}/js/scripts.js"></script>
@section('footer_script')
@show

<script type="text/javascript" src="{{ asset('pk/')}}/js/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript" src="{{ asset('pk/')}}/js/jquery.validate.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#').validate();
  })
</script>
</body>
</html>