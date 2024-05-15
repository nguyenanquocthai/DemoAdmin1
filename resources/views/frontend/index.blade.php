 @extends('frontend.dashboard_user')
 @section('main')
 <!-- Banner Area Two -->
 <div class="banner-area-two">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-another">
                    <h1>Atoli Resort, That is the Latest Dimension on Luxury</h1>
                    <p>
                        The hotel and resort business is one of the best and loyal business in the global market.
                        We are the agency that helps to book you a good room in a suitable palace at a reasonable price.
                    </p>
                    <div class="banner-btn">
                        <a href="#" class="default-btn btn-bg-two border-radius-50">Book a Room</a>
                    </div>

                    <div class="banner-shape">
                        <img src="{{asset('frontend/assets/img/home-two/shape.png')}}" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="banner-img">
                    <img src="{{asset('frontend/assets/img/home-two/home-two-img.jpg')}}" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area Two End -->

<!-- About Area -->
<div class="about-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-2">
                    <img src="{{asset('frontend/assets/img/about/about-img2.png')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <h2>We Are the Best in All-time & So Please Get a Quick Booking</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ante tellus, 
                            sit amet rhoncus massa aliquam sit amet. Cras porttitor mauris quis mattis ornare.
                            In efficitur at sem quis pretium. Aenean sit amet neque ut dolor lacinia rutrum. 
                            In vulputate pellentesque turpis et porta.
                        </p>
                    </div>

                    <div class="about-form">
                        <form>
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Check in</label>
                                        <div class="input-group">
                                            <input  id="datetimepicker" type="text" class="form-control" placeholder="09/29/2020">
                                            <span class="input-group-addon"></span>
                                        </div>
                                        <i class='bx bxs-calendar'></i>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Persons</label>
                                        <select class="form-control">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>	
                                    </div>
                                </div>
    
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Check Out</label>
                                        <div class="input-group">
                                            <input id="datetimepicker-check" type="text" class="form-control" placeholder="09/29/2020">
                                            <span class="input-group-addon"></span>
                                        </div>
                                        <i class='bx bxs-calendar'></i>
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                        Check Availability
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Room Area Two -->
<div class="room-area-two pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Rooms & Rates</h2>
        </div>
        <div class="room-slider owl-carousel owl-theme pt-45">
            <div class="room-item">
                <a href="room-details.html">
                    <img src="{{asset('frontend/assets/img/room/room-img7.jpg')}}" alt="Images">
                </a>
                <div class="content">
                    <h3><a href="room-details.html">Double Room</a></h3>
                    <p>You can easily reserve a hotel room with a double bed as you want. This will give you a very good feeling.</p>
                    <ul>
                        <li>320</li>
                        <li><span>Per Night</span></li>
                    </ul>
                    <a href="book.html" class="book-btn">Book Now</a>
                </div>
            </div>

            <div class="room-item">
                <a href="room-details.html">
                    <img src="{{asset('frontend/assets/img/room/room-img2.jpg')}}" alt="Images">
                </a>
                <div class="content">
                    <h3><a href="room-details.html">Single Room</a></h3>
                    <p>You can easily reserve a hotel room with a double bed as you want. This will give you a very good feeling.</p>
                    <ul>
                        <li>300</li>
                        <li><span>Per Night</span></li>
                    </ul>
                    <a href="book.html" class="book-btn">Book Now</a>
                </div>
            </div>

            <div class="room-item">
                <a href="room-details.html">
                    <img src="{{asset('frontend/assets/img/room/room-img8.jpg')}}" alt="Images">
                </a>
                <div class="content">
                    <h3><a href="room-details.html">Deluxe Room</a></h3>
                    <p>You can easily reserve a hotel room with a double bed as you want. This will give you a very good feeling.</p>
                    <ul>
                        <li>340</li>
                        <li><span>Per Night</span></li>
                    </ul>
                    <a href="book.html" class="book-btn">Book Now</a>
                </div>
            </div>

            <div class="room-item">
                <a href="room-details.html">
                    <img src="{{asset('frontend/assets/img/room/room-img4.jpg')}}" alt="Images">
                </a>
                <div class="content">
                    <h3><a href="room-details.html">Family Room</a></h3>
                    <p>You can easily reserve a hotel room with a double bed as you want. This will give you a very good feeling.</p>
                    <ul>
                        <li>360</li>
                        <li><span>Per Night</span></li>
                    </ul>
                    <a href="book.html" class="book-btn">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Room Area End -->

<!-- Services Area Two -->
<div class="services-area-two pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Resort Services and All Other Details</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-sm-6">
                <div class="services-card">
                    <i class="flaticon-wifi-signal-1"></i>
                    <h3><a href="service-details.html">Wifi Coverage</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ante tellus, sit amet rhoncus massa .</p>
                    <a href="service-details.html" class="get-btn">Get Service </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="services-card">
                    <i class="flaticon-sauna"></i>
                    <h3><a href="service-details.html">Pool & Spa</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ante tellus, sit amet rhoncus massa .</p>
                    <a href="service-details.html" class="get-btn">Get Service </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="services-card">
                    <i class="flaticon-tea-cup-with-muffin-and-cookies"></i>
                    <h3><a href="service-details.html">Buffet Breakfast</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ante tellus, sit amet rhoncus massa .</p>
                    <a href="service-details.html" class="get-btn">Get Service </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="services-card">
                    <i class="flaticon-champagne-glass"></i>
                    <h3><a href="service-details.html">Luxury Bars</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ante tellus, sit amet rhoncus massa .</p>
                    <a href="service-details.html" class="get-btn">Get Service </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="services-card">
                    <i class="flaticon-vacuum"></i>
                    <h3><a href="service-details.html">Cleaning Everyday</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ante tellus, sit amet rhoncus massa .</p>
                    <a href="service-details.html" class="get-btn">Get Service </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="services-card">
                    <i class="flaticon-beach-vacation"></i>
                    <h3><a href="service-details.html">Sea View Balcony</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ante tellus, sit amet rhoncus massa .</p>
                    <a href="service-details.html" class="get-btn">Get Service </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area Two End -->

<!-- Ability Area -->
<div class="ability-area section-bg-2 pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="ability-content">
                    <div class="section-title">
                        <h2>Our Ability to the Global and International Market</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ante tellus, 
                            sit amet rhoncus massa aliquam sit amet. Cras porttitor mauris quis mattis ornare.
                            In efficitur at sem quis pretium. Aenean sit amet neque ut dolor lacinia rutrum. 
                            In vulputate pellentesque turpis et porta.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="ability-counter">
                                <h3>14K</h3>
                                <p>5 Star Retting Reviews</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="ability-counter">
                                <h3>225K</h3>
                                <p>Items Served Breakfast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ability-img">
                    <img src="{{asset('frontend/assets/img/ability-img.jpg')}}" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ability Area  End -->

<!-- Team Area Two -->
<div class="team-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Special Team Member and Their Details at a Glance</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <a href="team.html">
                        <img src="{{asset('frontend/assets/img/team/team-img1.jpg')}}" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="team.html">Tom Shumate</a></h3>
                        <span>Manager</span>
                    </div>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                        </li> 
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <a href="team.html">
                        <img src="{{asset('frontend/assets/img/team/team-img2.jpg')}}" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="team.html">Carrie Horton</a></h3>
                        <span>Chief Reception Officer</span>
                    </div>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                        </li> 
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="team-card">
                    <a href="team.html">
                        <img src="{{asset('frontend/assets/img/team/team-img3.jpg')}}" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="team.html">Brian Orlando</a></h3>
                        <span>Housekeeping</span>
                    </div>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Area Two End -->

<!-- Testimonials Area Two  -->
<div class="testimonials-area-two pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Latest Testimonials and What Our Client Says</h2>
        </div>
        <div class="testimonials-slider-two owl-carousel owl-theme pt-45">
            <div class="testimonials-style">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="testimonials-img">
                            <img src="{{asset('frontend/assets/img/testimonials/testimonials-style1.jpg')}}" alt="Images">
                            <div class="content">
                                <h3>Mary Marden</h3>
                                <span>New York City</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="testimonials-content">
                            <i class="flaticon-left-quote"></i>
                            <p>
                                You can easily make a good and easily the best service on 
                                this agency. This is one of the best and crucial service into
                                the global world. We will start to make a communications
                                with this agency and saw that, this has made our all of the
                                problems in an easiest way.
                            </p>
                            <span>- New York City</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonials-style">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="testimonials-img">
                            <img src="{{asset('frontend/assets/img/testimonials/testimonials-style2.jpg')}}" alt="Images">
                            <div class="content">
                                <h3>Harriet Johnson</h3>
                                <span>London City</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="testimonials-content">
                            <i class="flaticon-left-quote"></i>
                            <p>
                                You can easily make a good and easily the best service on 
                                this agency. This is one of the best and crucial service into
                                the global world. We will start to make a communications
                                with this agency and saw that, this has made our all of the
                                problems in an easiest way.
                            </p>
                            <span>- London City</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Area Two End -->

<!-- FAQ Area -->
<div class="faq-area pt-100 pb-70 section-bg-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-content faq-content-bg">
                    <div class="section-title">
                        <h2>Let's Start a Free of Questions and Get a Quick Support</h2>
                    </div>

                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    How I Will Book a Room or Resort?
                                </a>

                                <div class="accordion-content">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                        dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                        vel ultricies eu, vulputate at felis.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    How I Will Be Able to Add on the Admin Portal? 
                                </a>

                                <div class="accordion-content">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                        dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                        vel ultricies eu, vulputate at felis.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    What are the Benefits of These Agencies?
                                </a>

                                <div class="accordion-content">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                        dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                        vel ultricies eu, vulputate at felis.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    How I Will Make Payment for Room Book?
                                </a>

                                <div class="accordion-content show">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                        dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                        vel ultricies eu, vulputate at felis.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="faq-img-2">
                    <img src="{{asset('frontend/assets/img/faq/faq-img2.jpg')}}" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Area End -->

<!-- Book Area -->
<div class="book-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xxl-7">
                <div class="book-img">
                    <img src="{{asset('frontend/assets/img/book-img.jpg')}}" alt="Images">
                    <div class="book-shape">
                        <img src="{{asset('frontend/assets/img/shape/shape1.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xxl-5">
                <div class="book-content">
                    <div class="section-title">
                        <h2>Don't Wait and Waste Time Just Knock & Book Now!</h2>
                        <p>
                            We have one of the best resorts and you can easily be able to book any
                            of the rooms or resort anytime. This is the best offer to you to make any &
                            resort booking of rooms booking in the easiest way. Don't worry we are
                            always ready to give you a quick booking.
                        </p>
                    </div>
                    <a href="book.html" class="default-btn btn-bg-two border-radius-50">Quick Booking</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Book Area End -->

<!-- Blog Area -->
<div class="blog-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Latest Blogs to the Intranational Journal at a Glance</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="blog-card">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="{{asset('frontend/assets/img/blog/blog-img1.jpg')}}" alt="Images">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 p-0">
                             <div class="blog-content blog-color">
                                 <span>October 08, 2020</span>
                                 <h3>
                                     <a href="blog-details.html">Hotel Management is the Best Policy</a>
                                 </h3>
                                 <p>This is one of the best & quality full hotels in the world that will help you to make a good market.</p>
                                 <a href="blog-details.html" class="read-btn">
                                     Read More
                                 </a>
                             </div>
                         </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="blog-card">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="{{asset('frontend/assets/img/blog/blog-img2.jpg')}}" alt="Images">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 p-0">
                             <div class="blog-content blog-color">
                                 <span>October 11, 2020</span>
                                 <h3>
                                     <a href="blog-details.html">3d Hotel Models Have a Royal Model</a>
                                 </h3>
                                 <p>Hotel has made a revolutionary into the global market by making a 3D model on the hotel.</p>
                                 <a href="blog-details.html" class="read-btn">
                                     Read More
                                 </a>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
@endsection