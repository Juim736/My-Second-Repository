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
        
        <img src="{{asset('/pk/')}}/images/medical1.jpg" alt="" style="width:100%;height: 300px;">
        <div class="carousel-caption" style="color: red;">
          <h3>Los Mimi</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        
        <img src="{{asset('/pk/')}}/images/medical2.jpg" alt="" style="width:100%; height: 300px;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        
        <img src="{{asset('/pk/')}}/images/medical3.jpg" alt="" style="width:100%;height: 300px;">
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
    <div class="panel-heading" style="background: blue;">
      <h2 class="panel-title" style="color: white">Medical Related Issue</h2>
    </div>
    <div class="panel-body">
      সংস্থার বেশিরভাগ সদস্য ও তাদের পরিবার এই প্রোগ্রামের মূল টার্গেট। এই তথ্যগুলো সদস্যদের দেয়া হয় লোন অফিসার/ লোন এসিস্ট্যান্ট/ এসিস্ট্যান্ট ব্রাঞ্চ ম্যানেজারদের মাধ্যমে। প্রতিটি প্রোগ্রামের সময়কাল ৩০-৪০ মিনিট। প্রশিক্ষণ গ্রহণরত অবস্থাতেই লোন অফিসারদের এই বিষয়গুলো সম্পর্কে সঠিক ও স্পষ্ট ধারণা তুলে ধরা হয়।   প্রোগ্রামের আগের দিন লোন অফিসারদের একটি একটি নির্দেশিকা প্রদান করা হয় যাতে তারা পূর্ব থেকে একটি প্রস্তুতি নিয়ে রাখতে পূর্ব থেকে একটি প্রস্তুতি নিয়ে রাখতে পূর্ব থেকে একটি প্রস্তুতি নিয়ে রাখতে
 
      <br>
      যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন।

      <!-- <a href="" class="btn btn-danger pull-right">আমি ও চাই রক্ত দিতে </a> -->
      <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal"><b style="color: blue"> আমার পরামর্শ প্রয়োজন </b></button>
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
          <h4 class="modal-title" style="color: blue; margin-left: 100px"><b> সবাই মিলে একসাথে সুস্থ থাকি </b></h4>
        </div>
        <div class="modal-body">
          <form action="">
             <div class="form-group col-md-10 col-md-offset-1">
              <label for="" class="col-md-6" style="color: #610D02">Blood Group (রক্তের গ্রুপ) :</label>
              <div class="col-md-4">
              <select class="">
                <option value="">Select Type of Problem</option>
                <option value="">Personal</option>
                <option value="">Public</option>
                
              </select>
              </div>
              </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="subject">Description</label>
              <input type="textarea" class="form-control">
            </div>
            <div class="">
              <button class="btn btn-success">Submit</button>
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
         <a href="{{url('/groupBlood')}}" class="btn btn-blue" style="background: blue;padding: 30px 0px; width: 100% ">Aids</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood')}}" class="btn btn-blue" style="background: blue;padding: 30px 0px; width: 100% ;color: white">Hepatytis B</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood')}}" class="btn btn-blue" style="background: blue;padding: 30px 0px; width: 100%">B+</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood')}}" class="btn btn-blue" style="background: blue;padding: 30px 0px; width: 100%; margin: 6px 0px 6px 0px;">B-</a>
      </div>
      <div class="col-md-4">
        <!--  <a href="" class="btn btn-blue rounded-circle" style="background: blue;padding: 30px 0px; width: 100%">A-</a>
         <img src="..." alt="..." class="rounded-circle"> -->
         <img src="{{asset('/pk/')}}/images/bloodLove.jpg" class="rounded-circle" alt="Image" style="margin: 6px 0px 6px 0px;">
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood')}}" class="btn btn-blue" style="background: blue;padding: 30px 5px; width: 100% ;margin: 6px 0px 6px 0px;">O+</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood')}}" class="btn btn-blue" style="background: blue;padding: 30px 5px; width: 100%">O-</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood')}}" class="btn btn-blue" style="background: blue;padding: 30px 5px; width: 100%">AB-</a>
      </div>
      <div class="col-md-4">
         <a href="{{url('/groupBlood')}}" class="btn btn-blue" style="background: blue;padding: 30px 0px; width: 100%">AB+</a>
      </div>


    </div>

  </div>
</div>
<br>


<div class="container">
  <div class="row">
    <div class="col-md-9">


    <div class="col-md-12" style="background: #EDEFF6;margin: 5px;">
      <div class="col-md-3">
        <img src="{{asset('/pk/')}}/images/mariana.jpg" class="img-circle" alt="Image" style="height: 200px;width: 200px">
      </div>
      <div class="com-md-9">
        <div class="">
          <h2 style="text-align: center;">সুফলতা বুঝিয়ে সচেতন করা যায়</h2>
        </div>
        <div class="">
          <p>রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।

একজন মুমূর্ষু রোগীকে তার প্রিয়জনের মাঝে সুস্থভাবে ফিরিয়ে আনা থেকে আনন্দের আর কিছু হতে পারে না। জরুরি রক্তের প্রয়োজনে মুমূর্ষু রোগীদের পাশে থাকুন। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং।</p>
        </div>
      </div>
      
    </div>

<br>
<br>

    <div class="col-md-12" style="background: #F5F5FE;margin: 5px;">
      
      <div class="col-md-9">
        <div class="">
          <h2 style="text-align: center;"> হ্যাপি ব্লাড ডোনেটিং।</h2>
        </div>
        <div class="">
          <p>রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।

একজন মুমূর্ষু রোগীকে তার প্রিয়জনের মাঝে সুস্থভাবে ফিরিয়ে আনা থেকে আনন্দের আর কিছু হতে পারে না। জরুরি রক্তের প্রয়োজনে মুমূর্ষু রোগীদের পাশে থাকুন। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং।</p>
        </div>
      </div>
      <div class="col-md-3">
        <img src="{{asset('/pk/')}}/images/mariana1.jpg" class="img-circle" alt="Image" style="height: 200px;width: 200px">
      </div>
      
    </div>
 
<br>
<br>



    <div class="col-md-12" style="background: #EDEFF6;margin: 5px;">
      <div class="col-md-3">
        <img src="{{asset('/pk/')}}/images/a222.jpg" class="img-circle" alt="Image" style="height: 200px;width: 200px">
      </div>
      <div class="com-md-9">
        <div class="">
          <h2 style="text-align: center;">প্রয়োজনীয় রক্তের অভাবে</h2>
        </div>
        <div class="">
          <p>রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।

একজন মুমূর্ষু রোগীকে তার প্রিয়জনের মাঝে সুস্থভাবে ফিরিয়ে আনা থেকে আনন্দের আর কিছু হতে পারে না। জরুরি রক্তের প্রয়োজনে মুমূর্ষু রোগীদের পাশে থাকুন। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং।</p>
        </div>
      </div>
      
    </div>




    <div class="col-md-12" style="background: #F5F5FE;margin: 5px;">
      
      <div class="col-md-9">
        <div class="">
          <h2 style="text-align: center;">প্রতিবছর বহুসংখ্যক মানুষ মারা</h2>
        </div>
        <div class="">
          <p>রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।

একজন মুমূর্ষু রোগীকে তার প্রিয়জনের মাঝে সুস্থভাবে ফিরিয়ে আনা থেকে আনন্দের আর কিছু হতে পারে না। জরুরি রক্তের প্রয়োজনে মুমূর্ষু রোগীদের পাশে থাকুন। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং।</p>
        </div>
      </div>
      <div class="col-md-3">
        <img src="{{asset('/pk/')}}/images/priti1.jpg" class="img-circle" alt="Image" style="height: 200px;width: 200px">
      </div>
      
    </div>
    
<div class="col-md-12" style="background: #EDEFF6;margin: 5px;">
      <div class="col-md-3">
        <img src="{{asset('/pk/')}}/images/a111.jpg" class="img-circle" alt="Image" style="height: 200px;width: 200px">
      </div>
      <div class="com-md-9">
        <div class="">
          <h2 style="text-align: center;">প্রয়োজনীয় রক্তের অভাবে</h2>
        </div>
        <div class="">
          <p>রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।

একজন মুমূর্ষু রোগীকে তার প্রিয়জনের মাঝে সুস্থভাবে ফিরিয়ে আনা থেকে আনন্দের আর কিছু হতে পারে না। জরুরি রক্তের প্রয়োজনে মুমূর্ষু রোগীদের পাশে থাকুন। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং।</p>
        </div>
      </div>
      
    </div>




    <div class="col-md-12" style="background: #F5F5FE;margin: 5px;">
      
      <div class="col-md-9">
        <div class="">
          <h2 style="text-align: center;">প্রতিবছর বহুসংখ্যক মানুষ মারা</h2>
        </div>
        <div class="">
          <p>রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।

একজন মুমূর্ষু রোগীকে তার প্রিয়জনের মাঝে সুস্থভাবে ফিরিয়ে আনা থেকে আনন্দের আর কিছু হতে পারে না। জরুরি রক্তের প্রয়োজনে মুমূর্ষু রোগীদের পাশে থাকুন। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং।</p>
        </div>
      </div>
      <div class="col-md-3">
        <img src="{{asset('/pk/')}}/images/a333.jpg" class="img-circle" alt="Image" style="height: 200px;width: 200px">
      </div>
      
    </div>






</div>
<div class="col-md-3">
  <div class="text-center alert alert-info"><h3><b>Doctors of PK</b></h3></div>

  <div class="panel panel-info">
    <div class="panel-heading" style="background: #1F1FF9;">
      <h4 class="panel-title text-center" style="color: white"><b>Tanvir Rahman</b></h4>
    </div>
    <div class="panel-body" style="background: #6868F9">
      <div class="text-center">
        <img src="{{asset('/pk/')}}/images/tanvir.jpg" class="img-circle" alt="" style="height: 90px; width: 90px;">
      </div>
      <h4 class="text-center" style="color: white">Medical College </h4>
      <h5 class="text-center" style="color: white">Specalist</h5>
      <p class="text-center" style="color: white">This is tanvir rahman</p>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" style="background: #1F1FF9;">
      <h4 class="panel-title text-center" style="color: white"><b>Safrana Joty</b></h4>
    </div>
    <div class="panel-body" style="background: #6868F9">
      <div class="text-center">
        <img src="{{asset('/pk/')}}/images/joty.jpg" class="img-circle" alt="" style="height: 90px; width: 90px;">
      </div>
      <h4 class="text-center" style="color: white">Medical College </h4>
      <h5 class="text-center" style="color: white">Specalist</h5>
      <p class="text-center" style="color: white">This is Safrana joty</p>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" style="background: #1F1FF9;">
      <h4 class="panel-title text-center" style="color: white"><b>Jahid Hasan Shovo</b></h4>
    </div>
    <div class="panel-body" style="background: #6868F9">
      <div class="text-center">
        <img src="{{asset('/pk/')}}/images/shovo.jpg" class="img-circle" alt="" style="height: 90px; width: 90px;">
      </div>
      <h4 class="text-center" style="color: white">Medical College </h4>
      <h5 class="text-center" style="color: white">Specalist</h5>
      <p class="text-center" style="color: white">This is Jahid Hasan Shovo</p>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" style="background: #1F1FF9;">
      <h4 class="panel-title text-center" style="color: white"><b>Bodrul Alom Kolin</b></h4>
    </div>
    <div class="panel-body" style="background: #6868F9">
      <div class="text-center">
        <img src="{{asset('/pk/')}}/images/a7.jpg" class="img-circle" alt="" style="height: 90px; width: 90px;">
      </div>
      <h4 class="text-center" style="color: white">Medical College </h4>
      <h5 class="text-center" style="color: white">Specalist</h5>
      <p class="text-center" style="color: white">This is Bodrul Alom Kolin</p>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" style="background: #1F1FF9;">
      <h4 class="panel-title text-center" style="color: white"><b>Sadikur Rahman Nishad</b></h4>
    </div>
    <div class="panel-body" style="background: #6868F9">
      <div class="text-center">
        <img src="{{asset('/pk/')}}/images/pkd1.jpg" class="img-circle" alt="" style="height: 90px; width: 90px;">
      </div>
      <h4 class="text-center" style="color: white">Medical College </h4>
      <h5 class="text-center" style="color: white">Specalist</h5>
      <p class="text-center" style="color: white">This is Sadikur Rahman Nishad</p>
    </div>
  </div>





  
</div>
  </div>
</div>
        
       

         
                  
   
         
     

<br>
@include('pk.includes.footer')

@section('footer_script')
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection