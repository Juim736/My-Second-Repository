@include('pk.includes.header')
<br>
      <br>
      <br>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      
      <br>
      

<!--   <h2>Carousel Example</h2> -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >

      <div class="item active">
        
        <img src="{{asset('/pk/')}}/images/blood1.jpg" alt="" style="width:100%;height: 300px;">
        <div class="carousel-caption" style="color: red;">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        
        <img src="{{asset('/pk/')}}/images/blood2.jpg" alt="" style="width:100%; height: 300px;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        
        <img src="{{asset('/pk/')}}/images/blood3.jpg" alt="" style="width:100%;height: 300px;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
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
<br>
<div class="col-md-4">
  <div class="panel panel-danger">
    <div class="panel-heading" style="background: red;">
      <h2 class="panel-title" style="color: white">Blood Related Issue</h2>
    </div>
    <div class="panel-body">
      রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।
      <br>
      যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন।

      <!-- <a href="" class="btn btn-danger pull-right">আমি ও চাই রক্ত দিতে </a> -->
      <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal"><b> আমি ও চাই রক্ত দিতে </b></button>
    </div>
  </div>
</div>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: red; margin-left: 100px"><b> স্বেচ্ছায় করি রক্ত দান 
হাসবে রুগী বাঁচবে প্রাণ </b></h4>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="row">
              <div class="col-md-12">
            <div class="form-group col-md-10 col-md-offset-1">
              <label for="" class="col-md-6" style="color: #610D02">Blood Group (রক্তের গ্রুপ) :</label>
              <div class="col-md-4">
              <select class="">
                <option value="">Select Blood Group</option>
                <option value="">A+</option>
                <option value="">A-</option>
                <option value="">B+</option>
                <option value="">B-</option>
                <option value="">O+</option>
                <option value="">O-</option>
                <option value="">AB+</option>
                <option value="">AB-</option>
              </select>
              </div>
              </div>
              <div class="form-group col-md-10 col-md-offset-1">
              <label for="" class="col-md-5" style="color: #610D02">Last Blood Giving Date :</label>
              <div class="col-md-5 pull-right" style="margin-right: 35px;">
                <input type="date" name="" class="form-control">
              </div>
              <br>
              <br/>

              <label for="" class="col-md-5" style="color: #610D02">Present Zone or Area :</label>
              <div class="col-md-5 pull-right" style="margin-right: 35px;">
                <input type="text" name="" class="form-control">
              </div>

              <br>
              <br>
               <button class="btn btn-success" style="margin:10px 0 0 260px; padding: 8px 40px" type="submit">Submit</button>
              </div>


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
  
</div>



<!-- <div class="container">
  <div class="row">
    <div class="col-md-8" style="margin: 3px">
      <ul class="nav nav-pills">
        <li>
          <a href="" class="btn btn-danger" style="background: red;">A+</a>
        </li>
        <li>
          <a href="" class="btn btn-danger" style="background: red;">A-</a>
        </li>
        <li>
          <a href="" class="btn btn-danger" style="background: red;">B+</a>
        </li>
        <li>
          <a href="" class="btn btn-danger" style="background: red;">B-</a>
        </li>
        <li>
          <a href="" class="btn btn-danger" style="background: red;">O+</a>
        </li>
        <li>
          <a href="" class="btn btn-danger" style="background: red;">O-</a>
        </li>
        
        <li>
          <a href="" class="btn btn-danger" style="background: red;">AB+</a>
        </li>
        <li>
          <a href="" class="btn btn-danger" style="background: red;">AB-</a>
        </li>
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle btn btn-danger" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="">Pakundiya</a>
        <a href="">Narandi</a>
        <a href="">Hosendi</a>
        <a href="">Patuyavanga</a>
        <a href="">Burudiya</a>
        <a href="">Chandipasha</a>
        <a href="">Sukiya</a>
        <a href="">Janggaliya</a>
        <a href="">Egarosindur</a>
        <a href="">Chorporadi</a>
      </li>
    </ul>
  </li>
 
</ul>
    </div>
  </div>
</div>
 </div>
  </div> -->
<!-- 
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <table class="table table-hover table-bordered">
          <thead style="width: 100%">
            <tr>
              <th>
                <a href="" class="btn btn-danger" style="background: red; width: 20%">A+</a>
              </th>
              <th>
                <a href="" class="btn btn-danger" style="background: red; width: 20%">A+</a>
              </th>
              <th>
                <a href="" class="btn btn-danger" style="background: red;">A+</a>
              </th>

            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <img src="..." alt="..." class="rounded">
      <img src="..." alt="..." class="rounded-top">
      <img src="..." alt="..." class="rounded-right">
      <img src="..." alt="..." class="rounded-bottom">
      <img src="..." alt="..." class="rounded-left">
      <img src="..." alt="..." class="rounded-circle">
      <img src="..." alt="..." class="rounded-0">
      <span class="border border-primary"></span>
<span class="border border-secondary"></span>
<span class="border border-success"></span>
<span class="border border-danger"></span>
<span class="border border-warning"></span>
<span class="border border-info"></span>
<span class="border border-light"></span>
<span class="border border-dark"></span>
<span class="border border-white"></span>
    </div>
  </div>
</div> -->
<br>

<div class="container">
  <div class="row">
     <div class="col-md-8" style="background: #B6ECE6">
      <h2 style="color: red; text-align: center; font-weight: bold">আপনি জানেন কি?</h2>
      <p>রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।

একজন মুমূর্ষু রোগীকে তার প্রিয়জনের মাঝে সুস্থভাবে ফিরিয়ে আনা থেকে আনন্দের আর কিছু হতে পারে না। জরুরি রক্তের প্রয়োজনে মুমূর্ষু রোগীদের পাশে থাকুন। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং।
</p>
      <h4 style="color: red; text-align: center">…”রক্তদান ঐচ্ছিক বিষয় নয়, এটি দায়িত্বের চেয়েও বেশি কিছু”…</h4>
    </div>
    <div class="col-md-4">
      <div class="col-md-4">
         <a href="{{url('/groupBlood/A+')}}" class="btn btn-danger" style="background: red;padding: 30px 0px; width: 100%">A+</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood/A-')}}" class="btn btn-danger" style="background: red;padding: 30px 0px; width: 100%">A-</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood/B+')}}" class="btn btn-danger" style="background: red;padding: 30px 0px; width: 100%">B+</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood/B-')}}" class="btn btn-danger" style="background: red;padding: 30px 0px; width: 100%; margin: 6px 0px 6px 0px;">B-</a>
      </div>
      <div class="col-md-4">
        <!--  <a href="" class="btn btn-danger rounded-circle" style="background: red;padding: 30px 0px; width: 100%">A-</a>
         <img src="..." alt="..." class="rounded-circle"> -->
         <img src="{{asset('/pk/')}}/images/bloodLove.jpg" class="rounded-circle" alt="Image" style="margin: 6px 0px 6px 0px;">
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood/O+')}}" class="btn btn-danger" style="background: red;padding: 30px 5px; width: 100% ;margin: 6px 0px 6px 0px;">O+</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood/O-')}}" class="btn btn-danger" style="background: red;padding: 30px 5px; width: 100%">O-</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood/AB-')}}" class="btn btn-danger" style="background: red;padding: 30px 5px; width: 100%">AB-</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood/AB+')}}" class="btn btn-danger" style="background: red;padding: 30px 0px; width: 100%">AB+</a>
      </div>


    </div>

  </div>
</div>
<br>



        
          <!-- //breadcrumbs -->

         
                  
   <div class="container">
     <div class="row">
       <div class="col-md-12">
           <div class="agile-tables">
                    <div class="w3l-table-info agile_info_shadow">
                     <h3 class="w3_inner_tittle two">Available Donar</h3>
                      <table id="table">
                      <thead>
                        <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Height</th>
                        <th>Province</th>
                        <th>Sport</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <td>Jill Smith</td>
                        <td>25</td>
                        <td>Female</td>
                        <td>5'4</td>
                        <td>British Columbia</td>
                        <td>Volleyball</td>
                        </tr>
                        <tr>
                        <td>John Stone</td>
                        <td>30</td>
                        <td>Male</td>
                        <td>5'9</td>
                        <td>Ontario</td>
                        <td>Badminton</td>
                        </tr>
                        <tr>
                        <td>Jane Strip</td>
                        <td>29</td>
                        <td>Female</td>
                        <td>5'6</td>
                        <td>Manitoba</td>
                        <td>Hockey</td>
                        </tr>
                        <tr>
                        <td>Gary Mountain</td>
                        <td>21</td>
                        <td>Male</td>
                        <td>5'8</td>
                        <td>Alberta</td>
                        <td>Curling</td>
                        </tr>
                        <tr>
                        <td>James Camera</td>
                        <td>31</td>
                        <td>Male</td>
                        <td>6'1</td>
                        <td>British Columbia</td>
                        <td>Hiking</td>
                        </tr>
                      </tbody>
                      </table>
                  
                    <!-- <code class="js">
                    $('#table').basictable();
                    </code> -->
                </div>
                <div class="w3l-table-info agile_info_shadow">
                    <h3 class="w3_inner_tittle two">Upcoming Available Donar</h3>
                    <table id="table-breakpoint">
                    <thead>
                      <tr>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Height</th>
                      <th>Province</th>
                      <th>Sport</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>Jill Smith</td>
                      <td>25</td>
                      <td>Female</td>
                      <td>5'4</td>
                      <td>British Columbia</td>
                      <td>Volleyball</td>
                      </tr>
                      <tr>
                      <td>John Stone</td>
                      <td>30</td>
                      <td>Male</td>
                      <td>5'9</td>
                      <td>Ontario</td>
                      <td>Badminton</td>
                      </tr>
                      <tr>
                      <td>Jane Strip</td>
                      <td>29</td>
                      <td>Female</td>
                      <td>5'6</td>
                      <td>Manitoba</td>
                      <td>Hockey</td>
                      </tr>
                      <tr>
                      <td>Gary Mountain</td>
                      <td>21</td>
                      <td>Male</td>
                      <td>5'8</td>
                      <td>Alberta</td>
                      <td>Curling</td>
                      </tr>
                      <tr>
                      <td>James Camera</td>
                      <td>31</td>
                      <td>Male</td>
                      <td>6'1</td>
                      <td>British Columbia</td>
                      <td>Hiking</td>
                      </tr>
                    </tbody>
                    </table>

                    <!-- <code class="js">
                    $('#table-breakpoint').basictable({<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;breakpoint: 768,<br>
                    });
                    </code> -->
                    </div>
                    <div class="w3l-table-info agile_info_shadow">
                     <h3 class="w3_inner_tittle two">More Blood Giving List</h3>

                   
                    <table id="table-force-off">
                    <thead>
                      <tr>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Height</th>
                      <th>Province</th>
                      <th>Sport</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>Jill Smith</td>
                      <td>25</td>
                      <td>Female</td>
                      <td>5'4</td>
                      <td>British Columbia</td>
                      <td>Volleyball</td>
                      </tr>
                      <tr>
                      <td>John Stone</td>
                      <td>30</td>
                      <td>Male</td>
                      <td>5'9</td>
                      <td>Ontario</td>
                      <td>Badminton</td>
                      </tr>
                      <tr>
                      <td>Jane Strip</td>
                      <td>29</td>
                      <td>Female</td>
                      <td>5'6</td>
                      <td>Manitoba</td>
                      <td>Hockey</td>
                      </tr>
                      <tr>
                      <td>Gary Mountain</td>
                      <td>21</td>
                      <td>Male</td>
                      <td>5'8</td>
                      <td>Alberta</td>
                      <td>Curling</td>
                      </tr>
                      <tr>
                      <td>James Camera</td>
                      <td>31</td>
                      <td>Male</td>
                      <td>6'1</td>
                      <td>British Columbia</td>
                      <td>Hiking</td>
                      </tr>
                    </tbody>
                    </table>

                   <!--  <code class="js">
                    $('#table-force-off').basictable({<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;forceResponsive: false,<br>
                    });
                    </code> -->

                    </div>
                    <div class="w3l-table-info agile_info_shadow">
                     <h3 class="w3_inner_tittle two">Max Height</h3>
                   <table id="table-max-height" class="max-height">
                    <thead>
                      <tr>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Height</th>
                      <th>Province</th>
                      <th>Sport</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>Jill Smith</td>
                      <td>25</td>
                      <td>Female</td>
                      <td>5'4</td>
                      <td>British Columbia</td>
                      <td>Volleyball</td>
                      </tr>
                      <tr>
                      <td>John Stone</td>
                      <td>30</td>
                      <td>Male</td>
                      <td>5'9</td>
                      <td>Ontario</td>
                      <td>Badminton</td>
                      </tr>
                      <tr>
                      <td>Jane Strip</td>
                      <td>29</td>
                      <td>Female</td>
                      <td>5'6</td>
                      <td>Manitoba</td>
                      <td>Hockey</td>
                      </tr>
                      <tr>
                      <td>Gary Mountain</td>
                      <td>21</td>
                      <td>Male</td>
                      <td>5'8</td>
                      <td>Alberta</td>
                      <td>Curling</td>
                      </tr>
                      <tr>
                      <td>James Camera</td>
                      <td>31</td>
                      <td>Male</td>
                      <td>6'1</td>
                      <td>British Columbia</td>
                      <td>Hiking</td>
                      </tr>
                    </tbody>
                    </table>

                    <!-- <code class="js">
                    $('#table-max-height').basictable({<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;tableWrapper: true<br>
                    });
                    </code> -->
                </div>
                <div class="w3l-table-info agile_info_shadow">
                    <h3 class="w3_inner_tittle two">Use Media Query Over JS Resize</h3>
                   
                    <table id="table-no-resize">
                    <thead>
                      <tr>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Height</th>
                      <th>Province</th>
                      <th>Sport</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>Jill Smith</td>
                      <td>25</td>
                      <td>Female</td>
                      <td>5'4</td>
                      <td>British Columbia</td>
                      <td>Volleyball</td>
                      </tr>
                      <tr>
                      <td>John Stone</td>
                      <td>30</td>
                      <td>Male</td>
                      <td>5'9</td>
                      <td>Ontario</td>
                      <td>Badminton</td>
                      </tr>
                      <tr>
                      <td>Jane Strip</td>
                      <td>29</td>
                      <td>Female</td>
                      <td>5'6</td>
                      <td>Manitoba</td>
                      <td>Hockey</td>
                      </tr>
                      <tr>
                      <td>Gary Mountain</td>
                      <td>21</td>
                      <td>Male</td>
                      <td>5'8</td>
                      <td>Alberta</td>
                      <td>Curling</td>
                      </tr>
                      <tr>
                      <td>James Camera</td>
                      <td>31</td>
                      <td>Male</td>
                      <td>6'1</td>
                      <td>British Columbia</td>
                      <td>Hiking</td>
                      </tr>
                    </tbody>
                    </table>

                    <!-- <code class="css">
                    @media only screen and (max-width: 568px) {<br>
                    &nbsp;&nbsp;#table-no-resize thead {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: none;<br>
                    &nbsp;&nbsp;}<br><br>

                    &nbsp;&nbsp;#table-no-resize tbody td {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: none !important;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: block;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vertical-align: top;<br>
                    &nbsp;&nbsp;}<br><br>

                    &nbsp;&nbsp;#table-no-resize tbody td:before {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;content: attr(data-th) ": ";<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: inline-block;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-weight: bold;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 6.5em;<br>
                    &nbsp;&nbsp;}<br><br>

                    &nbsp;&nbsp;#table-no-resize tbody td.bt-hide {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: none;<br>
                    &nbsp;&nbsp;}<br>
                    }
                    </code>

                    <code class="js">
                    $('#table-no-resize').basictable({<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;noResize: true,<br>
                    });
                    </code> -->
                  </div>
                  <div class="w3l-table-info agile_info_shadow">
                    <h3>Two Axis Styling</h3>
                    <table id="table-two-axis" class="two-axis">
                    <thead>
                      <tr>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Height</th>
                      <th>Province</th>
                      <th>Sport</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>Jill Smith</td>
                      <td>25</td>
                      <td>Female</td>
                      <td>5'4</td>
                      <td>British Columbia</td>
                      <td>Volleyball</td>
                      </tr>
                      <tr>
                      <td>John Stone</td>
                      <td>30</td>
                      <td>Male</td>
                      <td>5'9</td>
                      <td>Ontario</td>
                      <td>Badminton</td>
                      </tr>
                      <tr>
                      <td>Jane Strip</td>
                      <td>29</td>
                      <td>Female</td>
                      <td>5'6</td>
                      <td>Manitoba</td>
                      <td>Hockey</td>
                      </tr>
                      <tr>
                      <td>Gary Mountain</td>
                      <td>21</td>
                      <td>Male</td>
                      <td>5'8</td>
                      <td>Alberta</td>
                      <td>Curling</td>
                      </tr>
                      <tr>
                      <td>James Camera</td>
                      <td>31</td>
                      <td>Male</td>
                      <td>6'1</td>
                      <td>British Columbia</td>
                      <td>Hiking</td>
                      </tr>
                    </tbody>
                    </table>

                    <!-- <code class="css w3agile-css">
                    table.two-axis tr td:first-of-type {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;background: #dff1f7;<br>
                    }<br><br>

                    @media only screen and (max-width: 568px) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr td:first-of-type,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr:nth-of-type(2n+2) td:first-of-type,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr td:first-of-type:before
                     {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background: #dff1f7;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: #ffffff;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr td:first-of-type {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-bottom: 1px solid #e4ebeb;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    }
                    </code> -->

                  </div>
            </div>
       </div>
     </div>
   </div>
         
     


@include('pk.includes.footer')

@section('footer_script')
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection