@extends('layouts.home')
@section('content')
    <section class="about-us-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Selamat Datang di <span>SMKN 1 PROPPO</span></h2>
                <p>SMKN 1 Proppo membuka pelayanan pendidikan yang sesuai dengan kebutuhan dunia kerja, diantaranya</p>
            </div><!--section-title end-->
            <div class="about-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms">
                                <img src="{{ url('frontend/assets/img/icon5.png') }}" alt="">
                                <h3>Rekayasa Perangkat Lunak</h3>
                                <p>Pemrograman Komputer, Desain Grafis, Hardware dan Software.</p>
                            </div><!--abt-col end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                                <img src="{{ url('frontend/assets/img/icon7.png') }}" alt="">
                                <h3>Teknik Audio</h3>
                                <p>A world of thought-provoking articles, Case studies that celebrate architecture,
                                    Exclusive access to design insights.</p>
                            </div><!--abt-col end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                                <img src="{{ url('frontend/assets/img/icon8.png') }}" alt="">
                                <h3>Teknik Video</h3>
                                <p>A world of thought-provoking articles, Case studies that celebrate architecture,
                                    Exclusive access to design insights.</p>
                            </div><!--abt-col end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <img src="{{ url('frontend/assets/img/icon9.png') }}" alt="">
                                <h3>Tata Busana</h3>
                                <p>Collaborate with fellow architects, Showcase your projects,Experience the world of
                                    architecture</p>
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
    </section>
    <section class="blog-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Recent Posts</h2>
                <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit
                    amet. Nulla sagittis faucibus lacusMorbi lorem sem, aliquet</p>
            </div><!--section-title end-->
            <div class="blog-posts">
                <div class="row">
                    @foreach ($recent_posts as $recent)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumbnail">
                                    <img src="{{ $recent->trixAttachments->count() == 0 ? "https://source.unsplash.com/random/2172x1448/?{$recent->category->name}" : $recent->trixAttachments->attachment }}"
                                        alt="" class="w-100">
                                    <span class="category">{{ $recent->category->name }}</span>
                                </div>
                                <div class="blog-info">
                                    <ul class="meta">
                                        <li><a href="#"
                                                title="">{{ $recent->created_at->diffForHumans() }}</a></li>
                                        <li><a href="#" title="">by {{ $recent->user->name }}</a></li>
                                    </ul>
                                    <h3><a href="{{ route('landing.single_post', $recent->slug) }}"
                                            title="">{{ $recent->title }}</a></h3>
                                    <p>
                                        {{ $recent->excerpt() }}
                                    </p>
                                    <a href="{{ route('landing.single_post', $recent->slug) }}" title=""
                                        class="read-more">Read <i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div><!--blog-post end-->
                        </div>
                    @endforeach
                </div>
            </div><!--blog-posts end-->
        </div>
    </section>
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
    </section>
@endsection
