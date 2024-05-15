@extends('layouts.home')
@section('content')
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>About Us</h2>
                <ul>
                    <li><a href="#" title="">Home</a></li>
                    <li><span>About</span></li>
                </ul>
            </div><!--pager-content end-->
            <h2 class="page-titlee">Shelly</h2>
        </div>
    </section><!--pager-section end-->
    <section class="about-page-content">
        <div class="container">
            <div class="abt-page-row">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title">
                            <h2>Welcome to <br /> <span>Shelly</span> School</h2>
                            <p class="mw-100">Morbi vel augue et metus pellentesque lacinia eu non odio. Sed id purus urna.
                                Maecenas ultrices ligula a nisi dictum tristique. Suspendisse potenti. Curabitur egestas
                                ultrices sem, eu vestibulum leo sagittis et.</p>
                            <a href="classes.html" title="" class="btn-default">Classes <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!--section-title end-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="avt-img">
                            <img src="https://via.placeholder.com/601x645" alt="">
                        </div><!--avt-img end-->
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="avt-img">
                            <img src="https://via.placeholder.com/575x592" alt="">
                        </div><!--avt-img end-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="act-inffo">
                            <span>ABOUT US</span>
                            <h2>Our Mission</h2>
                            <p>Praesent rhoncus justo erat, sed sollicitudin arcu malesuada vel. Etiam scelerisque justo ut
                                purus luctus ullamcorper. Vivamus vitae elit ligula. Fusce eu rutrum nisl.</p>
                            <ul>
                                <li>Etiam ante nisl, maximus vitae sem non, dignissim</li>
                                <li>Donec blandit, sapien eu porttitor blandit</li>
                                <li>Sed at urna at massa viverra feugiat non </li>
                            </ul>
                        </div><!--act-inffo end-->
                    </div>
                </div>
            </div><!--abt-page-row end-->
        </div>
    </section><!--about-page-content end-->

    <section class="benifit-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Our Benefits</h2>
                        <p>Praesent rhoncus justo erat, sed sollicitudin arcu malesuada vel. Etiam scelerisque justo ut
                            purus luctus ullamcorper. Vivamus vitae elit ligula. Fusce eu rutrum nisl. Vestibulum ut
                            sagittis neque</p>
                        <a href="contacts.html" title="" class="btn-default">Contacts <i
                                class="fa fa-long-arrow-alt-right"></i></a>
                    </div><!--section-title end-->
                </div>
                <div class="col-lg-6">
                    <div class="about-us-section p-0">
                        <div class="about-sec">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col">
                                        <img src="assets/img/icon5.png" alt="">
                                        <h3>Awesome Teachers</h3>
                                        <p>Vivamus interdum, mauris interdum quis curdum sodales</p>
                                    </div><!--abt-col end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col">
                                        <img src="assets/img/icon7.png" alt="">
                                        <h3>Global Certificate</h3>
                                        <p>Pelleneget tespharetra que fringilla egugue id eget pharetra</p>
                                    </div><!--abt-col end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col">
                                        <img src="assets/img/icon9.png" alt="">
                                        <h3>Student Support Service</h3>
                                        <p>Mauris nec mi fequis ugiat, cursus tortor nec, pharetra tellus</p>
                                    </div><!--abt-col end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col">
                                        <img src="assets/img/icon8.png" alt="">
                                        <h3>Best Programm</h3>
                                        <p>Etiam risus neque, volutpat vel laoreet a, finibus volutpat non ligula</p>
                                    </div><!--abt-col end-->
                                </div>
                            </div>
                        </div><!--about-rw end-->
                    </div>
                </div>
            </div>
        </div>
    </section><!--benifit-section end-->
@endsection
