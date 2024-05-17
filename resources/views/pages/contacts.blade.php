@extends('layouts.home')
@section('content')
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>Contacts</h2>
                <ul>
                    <li><a href="#" title="">Home</a></li>
                    <li><span>Contacts</span></li>
                </ul>
            </div><!--pager-content end-->
            <h2 class="page-titlee">SMKN 1</h2>
        </div>
    </section><!--pager-section end-->

    <section class="page-content">
        <div class="container">
            <div class="mdp-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.938427703072!2d113.4219269112844!3d-7.133118969934419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9d50adaadbd05%3A0xd59fa3908cbe6ca8!2sSMK%20NEGERI%201%20PROPPO!5e0!3m2!1sid!2sid!4v1715789063001!5m2!1sid!2sid"
                    width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!--mdp-map end-->
            <div class="mdp-contact">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="comment-area">
                            <h3>Add Comment</h3>
                            <form id="contact-form" method="post" action="#">
                                <div class="response"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="name" placeholder="Name" required>
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="email" placeholder="Email"
                                                required>
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-submit">
                                            <button type="button" id="submit" class="btn-default">Send Now <i
                                                    class="fa fa-long-arrow-alt-right"></i></button>
                                        </div><!--form-submit end-->
                                    </div>
                                </div>
                            </form>
                        </div><!--comment-area end-->
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="mdp-our-contacts">
                            <h3>Our Contacts</h3>
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap">
                                        <div class="icon-v">
                                            <img src="assets/img/icon15.png" alt="">
                                        </div>
                                        <div class="dd-cont">
                                            <h4>Call</h4>
                                            <span>+2 342 5446 67</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex flex-wrap">
                                        <div class="icon-v">
                                            <img src="assets/img/icon16.png" alt="">
                                        </div>
                                        <div class="dd-cont">
                                            <h4>Work Time</h4>
                                            <span>Mon - Fri 8 AM - 5 PM</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex flex-wrap">
                                        <div class="icon-v">
                                            <img src="assets/img/icon17.png" alt="">
                                        </div>
                                        <div class="dd-cont">
                                            <h4>Address</h4>
                                            <span>Franklin St, Greenpoint Ave</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!--mdp-our-contacts end-->
                    </div>
                </div>
            </div><!--mdp-contact end-->
        </div>
    </section><!--page-content end-->
@endsection
