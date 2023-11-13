<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/animate.min.css')}}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/fonts/flaticon.csss')}}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/boxicons.min.csss')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.csss')}}">
        <!-- Owl Carousel Min CSS --> 
        <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.csss')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.min.csss')}}">
        <!-- Nice Select Min CSS --> 
        <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.min.csss')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/meanmenu.csss')}}">
        <!-- Jquery Ui CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/jquery-ui.csss')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/style.csss')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/responsive.csss')}}">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/theme-dark.csss')}}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('front/assets/img/favicon.pngs')}}">

        <title>Atoli - Hotel & Resorts HTML Template</title>
    </head>
    <body>

        <!-- PreLoader Start -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="sk-cube-area">
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PreLoader End -->

        <!-- Top Header Start -->
        <header class="top-header top-header-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2 pr-0">
                        <div class="language-list">
                            <select class="language-list-item">
                                <option>English</option>
                                <option>العربيّة</option>
                                <option>Deutsch</option>
                                <option>Português</option>
                                <option>简体中文</option>
                            </select>	
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-10">
                        <div class="header-right">
                            <ul>
                                <li>
                                    <i class='bx bx-home-alt'></i>
                                    <a href="#">123 Virgil A Stanton, Virginia, USA</a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:+1-(123)-456-7890">+1 (123) 456 7890</a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <a href="mailto:hello@atoli.com">hello@atoli.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{asset('front/assets/img/logos/logo-1.pngs')}}" class="logo-one" alt="Logo">
                    <img src="{{asset('front/assets/img/logos/footer-logo1.pngs')}}" class="logo-two" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('front/assets/img/logos/logo-1.pngs')}}" class="logo-one" alt="Logo">
                            <img src="{{asset('front/assets/img/logos/footer-logo1.pngs')}}" class="logo-two" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Home 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">
                                                Home One  
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">
                                                Home Two
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">
                                                Home Three
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="book.html" class="nav-link">
                                                Booking
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">
                                                Team
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">
                                                FAQ
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="restaurant.html" class="nav-link">
                                                Restaurant
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="reservation.html" class="nav-link">
                                                Reservation
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="gallery.html" class="nav-link">
                                                Gallery
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">
                                                Testimonials
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="checkout.html" class="nav-link">
                                                Check out
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="sign-in.html" class="nav-link">
                                                Sign In
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="sign-up.html" class="nav-link">
                                                Sign Up
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="terms-condition.html" class="nav-link">
                                                Terms & Conditions
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">
                                                Privacy Policy
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">
                                                404 page
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">
                                                Coming Soon
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Services 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services-1.html" class="nav-link">
                                                Services Style One 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-2.html" class="nav-link">
                                                Services Style Two 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.html" class="nav-link">
                                                Service Details 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-1.html" class="nav-link">
                                                Blog Style One 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">
                                                Blog Style Two 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">
                                                Blog Details 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Rooms
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="room.html" class="nav-link">
                                                Rooms 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-details.html" class="nav-link">
                                                Room Details 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact
                                    </a>
                                </li>

                                <li class="nav-item-btn">
                                    <a href="#" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                                </li>
                            </ul>

                            <div class="nav-btn">
                                <a href="#" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Banner Area -->
        <div class="banner-area" style="height: 480px;">
            <div class="container">
                <div class="banner-content">
                    <h1>Discover a Hotel & Resort to Book a Suitable Room</h1>
                    
                     
                </div>
            </div>
        </div>
        <!-- Banner Area End -->

        <!-- Banner Form Area -->
        <div class="banner-form-area">
            <div class="container">
                <div class="banner-form">
                    <form>
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3">
                                <div class="form-group">
                                    <label>CHECK IN TIME</label>
                                    <div class="input-group">
                                        <input id="datetimepicker" type="text" class="form-control" placeholder="11/02/2020">
                                        <span class="input-group-addon"></span>
                                    </div>
                                    <i class='bx bxs-chevron-down'></i>	
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <div class="form-group">
                                    <label>CHECK OUT TIME</label>
                                    <div class="input-group">
                                        <input id="datetimepicker-check" type="text" class="form-control" placeholder="11/02/2020">
                                        <span class="input-group-addon"></span>
                                    </div>
                                    <i class='bx bxs-chevron-down'></i>	
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-group">
                                    <label>GUESTS</label>
                                    <select class="form-control">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                    </select>	
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <button type="submit" class="default-btn btn-bg-one border-radius-5">
                                    Check Arability
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Banner Form Area End -->

        <!-- Room Area -->
        <div class="room-area pt-100 pb-70 section-bg" style="background-color:#ffffff">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color">ROOMS</span>
                    <h2>Our Rooms & Rates</h2>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="room-details.html">
                                            <img src="{{asset('front/assets/img/room/room-style-img1.jpgs')}}" alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                         <h3>
                                             <a href="room-details.html">Luxury Room</a>
                                        </h3>
                                        <span>320 / Per Night </span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                        <ul>
                                            <li><i class='bx bx-user'></i> 4 Person</li>
                                            <li><i class='bx bx-expand'></i> 35m2 / 376ft2</li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                            <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                        </ul>
                                        
                                        <a href="room-details.html" class="book-more-btn">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="room-details.html">
                                            <img src="{{asset('front/assets/img/room/room-style-img2.jpgs')}}" alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                         <h3>
                                             <a href="room-details.html">Single Room</a>
                                        </h3>
                                        <span>300 / Per Night </span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                        <ul>
                                            <li><i class='bx bx-user'></i> 1 Person</li>
                                            <li><i class='bx bx-expand'></i> 25m2 / 276ft2</li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                            <li><i class='bx bxs-hotel'></i> Smallsize / Twin</li>
                                        </ul>
                                        
                                        <a href="room-details.html" class="book-more-btn">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="room-details.html">
                                            <img src="{{asset('front/assets/img/room/room-style-img3.jpgs')}}" alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                         <h3>
                                             <a href="room-details.html">Family Room</a>
                                        </h3>
                                        <span>400 / Per Night </span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                        <ul>
                                            <li><i class='bx bx-user'></i> 6 Person</li>
                                            <li><i class='bx bx-expand'></i> 55m2 / 476ft2</li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                            <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                        </ul>
                                        
                                        <a href="room-details.html" class="book-more-btn">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="room-details.html">
                                            <img src="{{asset('front/assets/img/room/room-style-img4.jpgs')}}" alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                         <h3>
                                             <a href="room-details.html">Deluxe Room</a>
                                        </h3>
                                        <span>340 / Per Night </span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                        <ul>
                                            <li><i class='bx bx-user'></i> 4 Person</li>
                                            <li><i class='bx bx-expand'></i> 45m2 / 376ft2</li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                            <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                        </ul>
                                        
                                        <a href="room-details.html" class="book-more-btn">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room Area End -->

        <!-- Book Area Two-->
        <div class="book-area-two pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="book-content-two">
                            <div class="section-title">
                                <span class="sp-color">MAKE A QUICK BOOKING</span>
                                <h2>We Are the Best in All-time & So Please Get a Quick Booking</h2>
                                <p>
                                    Atoli is one of the best resorts in the global market and that's why you will get a luxury life period on the global market. We always
                                    provide you a special support for all of our guests and that's will  be the main reason to be the most popular.
                                </p>
                            </div>
                            <a href="#" class="default-btn btn-bg-three">Quick Booking</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="book-img-2">
                            <img src="{{asset('front/assets/img/book-img2.jpgs')}}" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Area Two End -->

        <!-- Services Area Three -->
        <div class="services-area-three pt-100 pb-70 section-bg">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color">Our Services</span>
                    <h2>Our Services on the Global Market for Our Client's Reservation</h2>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-6 col-md-6">
                        <div class="service-item-two">
                            <i class="flaticon-hotel"></i>
                            <div class="content">
                                <h3><a href="service-details.html">Hotel Room Reservation into the Desire Places</a></h3>
                                <p>
                                    You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                                    This will be really effective for us and all & all of the customers & clients.
                                </p>
                                <a href="service-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="service-item-two">
                            <i class="flaticon-resort"></i>
                            <div class="content">
                                <h3><a href="service-details.html">Resort Reservation Into the Good and Suitable Place</a></h3>
                                <p>
                                    You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                                    This will be really effective for us and all & all of the customers & clients.
                                </p>
                                <a href="service-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="service-item-two">
                            <i class="flaticon-buildings"></i>
                            <div class="content">
                                <h3><a href="service-details.html">Weeding Hall Reservation in the Suitable and Good Place</a></h3>
                                <p>
                                    You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                                    This will be really effective for us and all & all of the customers & clients.
                                </p>
                                <a href="service-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="service-item-two">
                            <i class="flaticon-businessmen"></i>
                            <div class="content">
                                <h3><a href="service-details.html">Conference Room Reservation in the Suitable and Good Place</a></h3>
                                <p>
                                    You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                                    This will be really effective for us and all & all of the customers & clients.
                                </p>
                                <a href="service-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area Three End -->

        <!-- Team Area Three -->
        <div class="team-area-three pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color">TEAM</span>
                    <h2>Let's Meet Up With Our Special Team Members</h2>
                </div>
                <div class="team-slider-two owl-carousel owl-theme pt-45">
                    <div class="team-item">
                        <a href="team.html">
                            <img src="{{asset('front/assets/img/team/team-img1.jpgs')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="team.html">Tom Shumate</a></h3>
                            <span>Manager</span>
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

                    <div class="team-item">
                        <a href="team.html">
                            <img src="{{asset('front/assets/img/team/team-img2.jpgs')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="team.html">Carrie Horton</a></h3>
                            <span>Chief Reception Officer</span>
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

                    <div class="team-item">
                        <a href="team.html">
                            <img src="{{asset('front/assets/img/team/team-img5.jpgs')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="team.html">Brian Orlando</a></h3>
                            <span>Housekeeping</span>
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

                    <div class="team-item">
                        <a href="team.html">
                            <img src="{{asset('front/assets/img/team/team-img4.jpgs')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="team.html">Michael Evens</a></h3>
                            <span>Housekeeping</span>
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
        <!-- Team Area Three End -->

        <!-- Testimonials Area Three -->
        <div class="testimonials-area-three pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color">TESTIMONIAL</span>
                    <h2>Our Latest Testimonials and What Our Client Says</h2>
                </div>
                <div class="row align-items-center pt-45">
                    <div class="col-lg-6 col-md-6">
                        <div class="testimonials-img-two">
                            <img src="{{asset('front/assets/img/testimonials/testimonials-img5.jpgs')}}" alt="Images">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="testimonials-slider-area owl-carousel owl-theme">
                            <div class="testimonials-slider-content">
                                <i class="flaticon-left-quote"></i>
                                <p>
                                    You can easily make a good and easily the best service on 
                                    this agency. This is one of the best and crucial service into
                                    the global world. We will start to make a communications
                                    with this agency and saw that, this has made our all of the
                                    problems in an easiest way.
                                </p>
                                <ul>
                                    <li>
                                        <img src="{{asset('front/assets/img/testimonials/testimonials-img1.jpgs')}}" alt="Images">
                                        <h3>Mary Marden</h3>
                                        <span>New York City</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="testimonials-slider-content">
                                <i class="flaticon-left-quote"></i>
                                <p>
                                    You can easily make a good and easily the best service on 
                                    this agency. This is one of the best and crucial service into
                                    the global world. We will start to make a communications
                                    with this agency and saw that, this has made our all of the
                                    problems in an easiest way.
                                </p>
                                <ul>
                                    <li>
                                        <img src="{{asset('front/assets/img/testimonials/testimonials-img2.jpgs')}}" alt="Images">
                                        <h3>Harriet Johnson</h3>
                                        <span>London City</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Area Three End -->

        <!-- FAQ Area -->
        <div class="faq-area pt-100 pb-70 section-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-content faq-content-bg2">
                            <div class="section-title">
                                <span class="sp-color">FEEL FREE TO ASK QUESTION</span>
                                <h2>Let's Start a Free of Questions and Get a Quick Support</h2>
                                <p>We are the agency who always gives you a priority on the free of question and you can easily make a question on the bunch.</p>
                            </div>

                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
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
                                            <i class='bx bx-plus'></i>
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
                                            <i class='bx bx-plus'></i>
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
                                            <i class='bx bx-plus'></i>
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
                        <div class="faq-img-3">
                            <img src="{{asset('front/assets/img/faq/faq-img3.jpgs')}}" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Area End -->

        <!-- Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color">BLOGS</span>
                    <h2>Our Latest Blogs to the Intranational Journal at a Glance</h2>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{asset('front/assets/img/blog/blog-item-img1.jpgs')}}" alt="Images">
                            </a>
                            <div class="content">
                                <ul>
                                    <li>October 01, 2020</li>
                                    <li><i class='bx bx-user'></i>29K</li>
                                    <li><i class='bx bx-message-alt-dots'></i>15K</li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">Hotel Management is the Best Policy</a>
                                </h3>
                                <p>This is one of the best & quality full hotels in the world that will help you to make an excellent study market.</p>
                                <a href="blog-details.html" class="read-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{asset('front/assets/img/blog/blog-item-img2.jpgs')}}" alt="Images">
                            </a>
                            <div class="content">
                                <ul>
                                    <li>October 07, 2020</li>
                                    <li><i class='bx bx-user'></i>22K</li>
                                    <li><i class='bx bx-message-alt-dots'></i>24K</li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">3d Hotel Models Have an Important Model</a>
                                </h3>
                                <p>This is one of the best & quality full hotels in the world that will help you to make an excellent study market.</p>
                                <a href="blog-details.html" class="read-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{asset('front/assets/img/blog/blog-item-img3.jpgs')}}" alt="Images">
                            </a>
                            <div class="content">
                                <ul>
                                    <li>October 17, 2020</li>
                                    <li><i class='bx bx-user'></i>27K</li>
                                    <li><i class='bx bx-message-alt-dots'></i>39K</li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">Hotel Management Has a Good Future Era</a>
                                </h3>
                                <p>This is one of the best & quality full hotels in the world that will help you to make an excellent study market.</p>
                                <a href="blog-details.html" class="read-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        <!-- Footer Area -->
        <footer class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top pt-100 pb-70">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="{{asset('front/assets/img/logos/footer-logo1.pngs')}}" alt="Images">
                                    </a>
                                </div>
                                <p>
                                    Aenean finibus convallis nisl sit amet hendrerit. Etiam blandit velit non lorem mattis, non ultrices eros bibendum .
                                </p>
                                <ul class="footer-list-contact">
                                    <li>
                                        <i class='bx bx-home-alt'></i>
                                        <a href="#">123 Stanton, Virginia, USA</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-phone-call'></i>
                                        <a href="tel:+1-(123)-456-7890">+1 (123) 456 7890</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-envelope'></i>
                                        <a href="mailto:hello@atoli.com">hello@atoli.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget pl-5">
                                <h3>Links</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="about.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            About Us
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="services-1.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Services
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="team.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Team
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="gallery.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Gallery
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="terms-condition.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Terms 
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="privacy-policy.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Privacy Policy
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <h3>Useful Links</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="index.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Home
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="blog-1.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Blog
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="faq.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            FAQ
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="testimonials.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Testimonials
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="gallery.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Gallery
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="contact.html" target="_blank">
                                            <i class='bx bx-caret-right'></i>
                                            Contact Us
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <h3>Newsletter</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Nullam tempor eget ante fringilla rutrum aenean sed venenatis .
                                </p>
                                <div class="footer-form">
                                    <form class="newsletter-form" data-toggle="validator" method="POST">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Your Email*" name="EMAIL" required autocomplete="off">
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn btn-bg-one">
                                                    Subscribe Now
                                                </button>
                                                <div id="validator-newsletter" class="form-result"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copy-right-area">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="copy-right-text text-align1">
                                <p>
                                    Copyright @<script>document.write(new Date().getFullYear())</script> Atoli. All Rights Reserved by 
                                    <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a> 
                                </p>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-4">
                            <div class="social-icon text-align2">
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
                                    <li>
                                        <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


        <!-- Jquery Min JS -->
        <script src="{{asset('front/assets/js/jquery.min.jss')}}"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{asset('front/assets/js/bootstrap.bundle.min.jss')}}"></script>
        <!-- Magnific Popup Min JS -->
        <script src="{{asset('front/assets/js/jquery.magnific-popup.min.jss')}}"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{asset('front/assets/js/owl.carousel.min.jss')}}"></script>
        <!-- Nice Select Min JS -->
        <script src="{{asset('front/assets/js/jquery.nice-select.min.jss')}}"></script>
        <!-- Wow Min JS -->
        <script src="{{asset('front/assets/js/wow.min.jss')}}"></script>
        <!-- Jquery Ui JS -->
        <script src="{{asset('front/assets/js/jquery-ui.jss')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('front/assets/js/meanmenu.jss')}}"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="{{asset('front/assets/js/jquery.ajaxchimp.min.jss')}}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{asset('front/assets/js/form-validator.min.jss')}}"></script>
        <!-- Contact Form JS -->
        <script src="{{asset('front/assets/js/contact-form-script.jss')}}"></script>
        <!-- Custom JS -->
        <script src="{{asset('front/assets/js/custom.jss')}}"></script>
        
    </body>
</html>