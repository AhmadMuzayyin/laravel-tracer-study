@extends('layouts.home')
@section('content')
    <section class="about-us-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Welcome to <span>Shelly</span></h2>
                <p>Nunc consectetur ex nunc, id porttitor leo semper eget. Vivamus interdum, mauris quis cursus
                    sodales, urn</p>
            </div><!--section-title end-->
            <div class="about-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms">
                                <img src="{{ url('frontend/assets/img/icon5.png') }}" alt="">
                                <h3>Awesome Teachers</h3>
                                <p>Vivamus interdum, mauris interdum quis curdum sodales</p>
                            </div><!--abt-col end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                                <img src="{{ url('frontend/assets/img/icon7.png') }}" alt="">
                                <h3>Global Certificate</h3>
                                <p>Pelleneget tespharetra que fringilla egugue id eget pharetra</p>
                            </div><!--abt-col end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                                <img src="{{ url('frontend/assets/img/icon8.png') }}" alt="">
                                <h3>Best Programm</h3>
                                <p>Etiam risus neque, volutpat vel laoreet a, finibus volutpat non</p>
                            </div><!--abt-col end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <img src="{{ url('frontend/assets/img/icon9.png') }}" alt="">
                                <h3>Student Support Service</h3>
                                <p>Mauris nec mi fequis ugiat, cursus tortor nec, pharetra tellus</p>
                            </div><!--abt-col end-->
                        </div>
                    </div>
                </div>
            </div><!--about-rw end-->
            <div class="abt-img">
                <ul class="masonary">
                    <li class="width1 wow zoomIn" data-wow-duration="1000ms"><a
                            href="https://source.unsplash.com/random/1414x943/?students" data-group="set1" title=""
                            class="html5lightbox"><img src="https://source.unsplash.com/random/1414x943/?students"
                                alt=""></a>
                    </li>
                    <li class="width2 wow zoomIn" data-wow-duration="1000ms"><a
                            href="https://source.unsplash.com/random/1440x661/?students" data-group="set1" title=""
                            class="html5lightbox"><img src="https://source.unsplash.com/random/1440x661/?students"
                                alt=""></a>
                    </li>
                    <li class="width3 wow zoomIn" data-wow-duration="1000ms"><a
                            href="https://source.unsplash.com/random/2064x1376/?students" data-group="set1" title=""
                            class="html5lightbox"><img src="https://source.unsplash.com/random/2064x1376/?students"
                                alt=""></a>
                    </li>
                    <li class="width4 wow zoomIn" data-wow-duration="1000ms"><a
                            href="https://source.unsplash.com/random/1504x1004/?students" data-group="set1" title=""
                            class="html5lightbox"><img src="https://source.unsplash.com/random/1504x1004/?students"
                                alt=""></a>
                    </li>
                    <li class="width5 wow zoomIn" data-wow-duration="1000ms"><a
                            href="https://source.unsplash.com/random/1440x960/?students" data-group="set1" title=""
                            class="html5lightbox"><img src="https://source.unsplash.com/random/1440x960/?students"
                                alt=""></a>
                    </li>
                    <li class="width6 wow zoomIn" data-wow-duration="1000ms"><a
                            href="https://source.unsplash.com/random/1393x929/?students" data-group="set1" title=""
                            class="html5lightbox"><img src="https://source.unsplash.com/random/1393x929/?students"
                                alt=""></a>
                    </li>
                    <li class="width7 wow zoomIn" data-wow-duration="1000ms"><a
                            href="https://source.unsplash.com/random/1840x1228/?students" data-group="set1" title=""
                            class="html5lightbox"><img src="https://source.unsplash.com/random/1840x1228/?students"
                                alt=""></a></li>
                    <li class="width8 wow zoomIn" data-wow-duration="1000ms"><a
                            href="https://source.unsplash.com/random/1404x906/?students" data-group="set1" title=""
                            class="html5lightbox"><img src="https://source.unsplash.com/random/1404x906/?students"
                                alt=""></a>
                    </li>
                    <li class="width9 wow zoomIn" data-wow-duration="1000ms"><a
                            href="https://source.unsplash.com/random/750x502/?students" data-group="set1" title=""
                            class="html5lightbox"><img src="https://source.unsplash.com/random/750x502/?students"
                                alt=""></a>
                    </li>
                    <li class="width10 wow zoomIn" data-wow-duration="1000ms"><a
                            href="https://source.unsplash.com/random/1500x100/?students" data-group="set1" title=""
                            class="html5lightbox"><img src="https://source.unsplash.com/random/1500x100/?students"
                                alt=""></a></li>
                </ul>
            </div><!-- abt-img end-->
        </div>
    </section><!--about-us-section end-->
    <section class="course-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="find-course">
                        <div class="sec-title">
                            <h2>Post Categories</h2>
                            <p>ullam fringilla ipsum sed enim scelerisque, ac porttitor libero egestas. Donec
                                iaculis nisi eget bibendum efficitur. Lorem ipsum dolor sit</p>
                            <h3><img src="{{ url('frontend/assets/img/icon11.png') }}" alt="">Call: <strong>+2 342
                                    5446
                                    67</strong></h3>
                        </div><!--sec-title end-->
                        <div class="course-img">
                            <img src="https://via.placeholder.com/476x526" alt="">
                        </div><!--course-img end-->
                    </div><!--find-course end-->
                </div>
                <div class="col-lg-6">
                    <div class="courses-list">
                        <div class="course-card wow fadeInLeft" data-wow-duration="1000ms">
                            <div class="d-flex flex-wrap align-items-center">
                                <ul class="course-meta">
                                    <li>
                                        <img src="{{ url('frontend/assets/img/icon12.png') }}" alt="">
                                        29/07/2020
                                    </li>
                                    <li>
                                        11AM to 15PM
                                    </li>
                                </ul>
                                <span>FREE</span>
                            </div>
                            <h3><a href="event-single.html" title="">Digital Transformation
                                    Conference</a>
                            </h3>
                            <div class="d-flex flex-wrap">
                                <div class="posted-by">
                                    <img src="https://via.placeholder.com/26x26" alt="">
                                    <a href="#" title="">Amanda Kern</a>
                                </div>
                                <span class="locat"><img src="{{ url('frontend/assets/img/loct.png') }}"
                                        alt="" />43
                                    castle
                                    road 517 district</span>
                            </div>
                        </div><!--course-card end-->
                        <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
                            <div class="d-flex flex-wrap align-items-center">
                                <ul class="course-meta">
                                    <li>
                                        <img src="{{ url('frontend/assets/img/icon12.png') }}" alt="">
                                        29/07/2020
                                    </li>
                                    <li>
                                        11AM to 15PM
                                    </li>
                                </ul>
                                <span>$16</span>
                            </div>
                            <h3><a href="event-single.html" title="">Environment conference</a></h3>
                            <div class="d-flex flex-wrap">
                                <div class="posted-by">
                                    <img src="https://via.placeholder.com/26x26" alt="">
                                    <a href="#" title="">Cvita Doleschall</a>
                                </div>
                                <span class="locat"><img src="{{ url('frontend/assets/img/loct.png') }}"
                                        alt="" />43
                                    castle
                                    road 517 district</span>
                            </div>
                        </div><!--course-card end-->
                        <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="d-flex flex-wrap align-items-center">
                                <ul class="course-meta">
                                    <li>
                                        <img src="{{ url('frontend/assets/img/icon12.png') }}" alt="">
                                        29/07/2020
                                    </li>
                                    <li>
                                        11AM to 15PM
                                    </li>
                                </ul>
                                <span>$8</span>
                            </div>
                            <h3><a href="event-single.html" title="">Campus clean workshop</a></h3>
                            <div class="d-flex flex-wrap">
                                <div class="posted-by">
                                    <img src="https://via.placeholder.com/26x26" alt="">
                                    <a href="#" title="">Helena Brauer</a>
                                </div>
                                <span class="locat"><img src="{{ url('frontend/assets/img/loct.png') }}"
                                        alt="" />43
                                    castle
                                    road 517 district</span>
                            </div>
                        </div><!--course-card end-->
                    </div><!--courses-list end-->
                    <a href="events.html" title="" class="all-btn">All Events <i
                            class="fa fa-long-arrow-alt-right"></i></a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section><!--course-section end-->

    <section class="blog-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Recent Posts</h2>
                <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit
                    amet. Nulla sagittis faucibus lacusMorbi lorem sem, aliquet</p>
            </div><!--section-title end-->
            <div class="blog-posts">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-thumbnail">
                                <img src="https://via.placeholder.com/1680x1120" alt="" class="w-100">
                                <span class="category">English</span>
                            </div>
                            <div class="blog-info">
                                <ul class="meta">
                                    <li><a href="#" title="">17/09/2020</a></li>
                                    <li><a href="#" title="">by Admin</a></li>
                                    <li><img src="{{ url('frontend/assets/img/icon13.png') }}" alt="" /><a
                                            href="#" title="">Teachers,</a><a href="#" title="">
                                            School</a></li>
                                </ul>
                                <h3><a href="post.html" title="">Campus clean workshop</a></h3>
                                <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet
                                    erat
                                    ornare sit amet</p>
                                <a href="post.html" title="" class="read-more">Read <i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div><!--blog-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-thumbnail">
                                <img src="https://via.placeholder.com/1440x960" alt="" class="w-100">
                                <span class="category">English</span>
                            </div>
                            <div class="blog-info">
                                <ul class="meta">
                                    <li><a href="#" title="">17/09/2020</a></li>
                                    <li><a href="#" title="">by Admin</a></li>
                                    <li><img src="{{ url('frontend/assets/img/icon13.png') }}" alt="" /><a
                                            href="#" title="">Teachers,</a><a href="#" title="">
                                            School</a></li>
                                </ul>
                                <h3><a href="post.html" title="">Campus clean workshop</a></h3>
                                <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet
                                    erat
                                    ornare sit amet</p>
                                <a href="post.html" title="" class="read-more">Read <i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div><!--blog-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-thumbnail">
                                <img src="https://via.placeholder.com/1680x1120" alt="" class="w-100">
                                <span class="category">English</span>
                            </div>
                            <div class="blog-info">
                                <ul class="meta">
                                    <li><a href="#" title="">17/09/2020</a></li>
                                    <li><a href="#" title="">by Admin</a></li>
                                    <li><img src="{{ url('frontend/assets/img/icon13.png') }}" alt="" /><a
                                            href="#" title="">Teachers,</a><a href="#" title="">
                                            School</a></li>
                                </ul>
                                <h3><a href="post.html" title="">Campus clean workshop</a></h3>
                                <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet
                                    erat
                                    ornare sit amet</p>
                                <a href="post.html" title="" class="read-more">Read <i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div><!--blog-post end-->
                    </div>
                </div>
            </div><!--blog-posts end-->
        </div>
    </section><!--blog-section end-->

    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-sec">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="newsz-ltr-text">
                            <h2>Join us <br /> and stay tuned!</h2>
                            <a href="{{ route('login.index') }}" title="" class="btn-default">Join Us <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!--newsz-ltr-text end-->
                    </div>
                    <div class="col-lg-8">
                        <form class="newsletter-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name">
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email">
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div><!--form-group end-->
                                </div>
                            </div>
                        </form><!--newsletter-form end-->
                    </div>
                </div>
            </div><!--newsletter-sec end-->
        </div>
    </section><!--newsletter-sec end-->
@endsection
