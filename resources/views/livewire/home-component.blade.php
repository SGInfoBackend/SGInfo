<div>
    <section id="hero">
        <!--slider-->
        <div class="hero_container  ">
       <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
         <div class="carousel-inner">
           <div class="carousel-item active ">
             <img  src="{{asset('assets/images/header_bg_img.jpg')}}" class="d-block w-100 slider" alt="...">
           </div>
           <div class="carousel-item ">
             <img  src="{{asset('assets/images/room.jpg')}}" class="d-block w-100 slider" alt="...">
           </div>
           <div class="carousel-item ">
             <img  src="{{asset('assets/images/rooms.jpg')}}" class="d-block w-100 slider" alt="...">
           </div>
           <div class="carousel-item ">
             <img  src="{{asset('assets/images/job.jpg')}}" class="d-block w-100 slider" alt="...">
           </div>
         </div>
       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
       </button>
       </div>
     </div>
       <div class="carousel_text">
           <h1>Let's Go SINGAPORE</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing.<br> Consequatur vitae pariatur, quisquam natus praesentium aut et inventore? <br>Temporibus voluptates repudiandae consequuntur odit repellat exercitationem<br> fugit minus pariatur.</p>
           <div class="banner-btn">
               <a href="#"><span></span>Rooms</a>
               <a href="#"><span></span>Jobs</a>
           </div>
       </div>
   </section>
<!-- for home-room -->
<section id="home-room">
    <h2>Rooms for Rent</h2>
    <a href="#" class="room-detail">View all rooms</a>
    <div id="home-room-container">
        @foreach ($rentHouses as $rentHouse )
            <div class="home-room-sample">
                <a href="{{route('roomdetails',['Rent_House_ID' => $rentHouse->Rent_House_ID ])}}"><img src="{{asset('assets/images/room_images/room6.jpg')}}" alt="room6"></a>
                <button class="avail-btn">Avail</button>
                <div class="home-room-des">
                    <h6>{{$rentHouse->PROJECT_NAME}}</h6>
                    <p>${{$rentHouse->PRICE_MAX}} <span>/ month</span></p>
                    <p class="p1">{{$rentHouse->ADDRESS}}</p>
                    <hr>
                    <div class="home-room-info">
                        <div class="home-room-info-single">
                            <i></i>
                            <span>Downtown</span>
                        </div>
                        <div class="home-room-info-single">
                            <i></i>
                            <span>3 mins</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- End of home-room -->

<!-- home-gen-info -->
<section id="home-gen-info">
    <h2>General Information</h2>
    <div class="home-gen-info-container">
        <img src="{{asset('assets/images/general_images/visa.jpg')}}" alt="visa">
    </div>
    <div class="home-gen-info-det">
        <h4>What do we need to go to Singapore?</h4>
        <ol class="home-gen-list">
            <a href=""><li>Passport</li></a>
            <a href=""><li>Airticket</li></a>
            <a href=""><li>Covid 19 Vacinaiton Certificate</li></a>
            <a href=""><li>Filling Arrival Card</li></a>
        </ol>
        <button class="home-gen-btn">See More</button>
    </div>
</section>
<!-- End of home-gen-info -->
<!-- ======================== Travel Guide ============================= -->

<section  class="swiper-container mySwiper">
    <div class="travel_guide">
    <h1>Travel Guides</h1>
    </div>
    <div class="swiper-wrapper">
    <div class="swiper-slide" >
        <img src="{{asset('assets/images/general_images/travel-02.jpg')}}" alt="">
        <div class="overlay">
        <p>French</p>
        </div>
    </div>
    <div class="swiper-slide">
        <img src="{{asset('assets/images/general_images/travel-03.jpg')}}" alt="">
        <div class="overlay">
        <p>Myanmar</p>
        </div>
    </div>
    <div class="swiper-slide">
        <img src="{{asset('assets/images/general_images/travel-04.jpg')}}" alt="">
        <div class="overlay">
        <p>America</p>
        </div>
    </div>
    <div class="swiper-slide" >
        <img src="{{asset('assets/images/general_images/travel-12.jpg')}}" alt="">
        <div class="overlay">
        <p>Japan</p>
        </div>
    </div>
    <div class="swiper-slide">
        <img src="{{asset('assets/images/general_images/travel-03.jpg')}}" alt="">
        <div class="overlay">
        <p>Korea</p>
        </div>
    </div>
    <div class="swiper-slide" >
        <img src="{{asset('assets/images/general_images/travel-13.jpg')}}" alt="">
        <div class="overlay">
        <p>China</p>
        </div>
    </div>
    <div class="swiper-slide" >
        <img src="{{asset('assets/images/general_images/travel-02.jpg')}}" alt="">
        <div class="overlay">
        <p>Singapore</p>
        </div>
    </div>
    <div class="swiper-slide" >
        <img src="{{asset('assets/images/general_images/travel-12.jpg')}}" alt="">
        <div class="overlay">
        <p>Malisia</p>
        </div>
    </div>
    </div>
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    <div class="swiper-pagination"></div>
</section>

<!-- ============================= End of Travel Guide Slider ========================================== -->

<!-- ============================= Globel News ========================================== -->

<section id="globel_news_container">
<div class="globel_news_box">
 <div class="background_color">
  <p class="news_type news_type1" >Travel</p>
  <h4 class="news_title news_title1">Where is The Best Present In Singapore</h4>
  <caption class="journalist">Mrs Christ  - June 3, 2020</caption>
 </div>
</div>
<div id="globel_news_container2">
<div class="globel_news_box2" >
  <div class="background_color">
    <p class="news_type">Health</p>
    <h4 class="news_title">Work Out as Much as Possible During Your All  Vacations</h4>

  </div>
</div>
<div class="globel_news_box2 globel_news_box3">
<div class="background_color">
  <p class="news_type">Restaurant</p>
  <h4 class="news_title">The Health Foods & The Delicious Foods Are Ready Now!</h4>
</div>
</div>
<div class="globel_news_box2 globel_news_box4">
<div class="background_color">
  <p class="news_type">Restaurant</p>
  <h4 class="news_title">The Health Foods & The Delicious Foods Are Ready Now!</h4>
</div>
</div>
<div class="globel_news_box2 globel_news_box5">
<div class="background_color">
<p class="news_type">Travel</p>
<h4 class="news_title">This Place is Very Instering . We Should Go There</h4>
</div>
</div>
</div>
</section>

<!-- ============================= End of Globel News ========================================== -->
<!-- Start HOME_JOBS -->
<div class="jobs_header" wire:ignore>

    <div class="search_icon">
        <i class="uil uil-search"></i>
        <input id="search_jobs" type="text" placeholder="Job title, keyword or company" wire:model="job_title">
    </div>
    <div class="search_icon">
        <i class="uil uil-map-marker"></i>
        <input id="location" type="text" placeholder="Area, city or town" wire:model="location">
    </div>

    <div class="search_icon">
        <i class="uil uil-right-indent-alt"></i>
        <select id="jobs_categories">
            <option class="jobs_option">All Job Specializations</option>
            @foreach ($allJobs as $allJob )
                <option value="{{$allJob->Category_job}}">{{$allJob->Category_job}}</option>
            @endforeach

        </select>
    </div>

    <button class="search btn-primary"><a href="#">Search</a></button>
</div>

<section id="jobs_container">
    <div id="jobs_types">
        <h3 id="h2"><i class="uil uil-favorite"></i>&nbsp;TOP JOBS&nbsp;<i class="uil uil-favorite"></i></h3>
        @foreach ($jobs as $job )
            <div id="jobs_type">
                <div class="jobbackground_color"><a href="#">{{$job->Job_title}}</a></div>
                <div class="jobbackground_color">${{$job->SALARY}}</div>
                <div class="jobbackground_color">{{$job->Company_URL}}</div>
                <div class="jobbackground_color"><i class="uil uil-map-marker"></i> &nbsp;{{$job->Job_location}}</div>
            </div>
        @endforeach
        <div class="browse_btn">
            <button class="browse"><a href="#">Browse All Jobs</a></button>
        </div>

    </div>


</section>

<!-- END OF HOME-JOBS  -->
<!-- start of footer -->

<section class="btn-section">
    <h3 class="job">Latest JOBs</h3>
    @foreach ($allJobs as $allJob)
    @endforeach
    <div class="job-btn">
        @for ($i = 0; $i <= 3; $i++)
            <button class="jobbutton" ><a href="#">{{$allJob->Job_title}}</a></button>
        @endfor
    </div>
    <div class="job-btn1">
        @for ($i = 2; $i >= 0; $i--)
            <button class="jobbutton" ><a href="#">{{$allJob->Job_title}}</a></button>
        @endfor
    </div>
    <div class="job-btn2">
        @for ($i = 1; $i >= 0; $i--)
            <button class="jobbutton" ><a href="#">{{$allJob->Job_title}}</a></button>
        @endfor
    </div>
    </section>


<section class="newsletter">
    <div class=" newstext">

        <div><h4>NEWSLETTER SIGN UP</h4>
        <P>Lorem ipsum, or lipsum as it is sometimes known</P>
    </div>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email adderss.....">
        <button class="normal">Subscribe</button>
    </div>
</section>

</div>
