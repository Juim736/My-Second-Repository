<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pk-Friends</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ----------> -->

@include('pk.includes.header')
<br>
<style>
    /* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(5px);
    -moz-filter: blur(5px);
    -o-filter: blur(5px);
    -ms-filter: blur(5px);
    filter: blur(5px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}


</style>
</head>
<body>

    <div class="container">
        <div class="row">
            
<div class="col-lg-12 col-sm-12 col-md-12">
    <div class="card hovercard">
        <div class="card-background">
            <!-- <img class="card-bkimg" alt="" src=""> -->
            <!-- http://lorempixel.com/850/280/people/9/ -->
            <img src="{{asset('/pk/')}}/images/pk-bg.jpg" class="img-cercle" alt="Image">
        </div>
        <div class="useravatar">
            <img src="{{Sentinel::getUser()->image}}" class="img-cercle" alt="Image">

        </div>
        <div class="card-info"> <span class="card-title">{{ucfirst(Sentinel::getUser()->first_name) }} - {{  ucfirst(Sentinel::getUser()->last_name) }}</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Stars</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Favorites</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Following</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
            <div class="tab-pane active" id="home">
                <hr>
                                       <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" value="{{Sentinel::getUser()->first_name}}" readonly="true">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" value="{{Sentinel::getUser()->last_name}}" readonly="true">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter phone" value="+880{{Sentinel::getUser()->mobile}}" title="enter your phone number if any." readonly="true">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Blood</h4></label>
                              <input type="text" class="form-control" name="blood" id="blood" placeholder="enter mobile number" value="{{Sentinel::getUser()->blood}}" title="enter your mobile number if any." readonly="true">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="Please update your email" value="{{Sentinel::getUser()->email}}" title="enter your email." readonly="true">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="lacation"><h4>Location</h4></label>
                              <input type="lacation" class="form-control" id="location" placeholder="Please add your location" value="{{Sentinel::getUser()->current_zone}}" title="enter a location" readonly="true">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="union"><h4>Union</h4></label>
                              <input type="union" class="form-control" id="union" placeholder="Please add your location" value="{{Sentinel::getUser()->union}}" title="enter a location" readonly="true">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="Occupation"><h4>Occupation</h4></label>
                              <input type="occupation" class="form-control" id="occupation" placeholder="Please add your occupation" value="{{Sentinel::getUser()->occupation}}" title="enter a occupation" readonly="true">
                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="gender"><h4>Gender</h4></label>
                              <input type="gender" class="form-control" id="gender" placeholder="Please add your gender" value="{{Sentinel::getUser()->gender}}" title="enter a gender" readonly="true">
                          </div>
                      </div>

                      
                        <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="dob"><h4>Date of birth</h4></label>
                              <input type="dob" class="form-control" id="dob" placeholder="Please add your dob" value="{{Sentinel::getUser()->dob}}" title="enter a dob" readonly="true">
                          </div>
                      </div>
                      
                        <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="marital_status"><h4>Marital Status</h4></label>
                              <input type="marital_status" class="form-control" id="marital_status" placeholder="Please add your marital_status" value="{{Sentinel::getUser()->marital_status}}" title="enter a marital_status" readonly="true">
                          </div>
                      </div>

                      
                        <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="designation"><h4>Designation</h4></label>
                              <input type="designation" class="form-control" id="designation" placeholder="Please add your designation" value="{{Sentinel::getUser()->designation}}" title="enter a designation" readonly="true">
                          </div>
                      </div>


                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type=""><i class="glyphicon glyphicon-ok-sign"></i> Edit</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
               
              
              <hr>
              <hr>
              
             </div>
        </div>
        <div class="text-center"><h3></h3>Please update your profile</div>
    </div>
        <div class="tab-pane fade in" id="tab2">
          <!-- <h3>This is tab 2</h3> -->
        </div>
        <div class="tab-pane fade in" id="tab3">
          <!-- <h3>This is tab 3</h3> -->
        </div>
      </div>
    </div>
    
    </div>

        </div>
    </div>


    <script>
        $(document).ready(function() {
        $(".btn-pref .btn").click(function () {
            $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
            // $(".tab").addClass("active"); // instead of this do the below 
            $(this).removeClass("btn-default").addClass("btn-primary");   
        });
        });
    </script>        
    
@include('pk.includes.footer')    
<!-- </body>
</html>
 -->


