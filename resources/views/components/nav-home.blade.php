<div>
    <header>
        <div class="container">
            <div class="header-content d-flex flex-wrap align-items-center">
                <div class="logo">
                    <a href="/" title="">
                        <img src="https://smkn1proppo.sch.id/wp-content/uploads/2023/12/logowebsmk-copy.png"
                            alt="logo" width="60">
                    </a>
                </div>
                <ul class="contact-add d-flex flex-wrap">
                    <li>
                        <div class="contact-info">
                            <img src="{{ url('frontend/assets/img/icon1.png') }}" alt="">
                            <div class="contact-tt">
                                <h4>Call</h4>
                                <span>+2 342 5446 67</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contact-info">
                            <img src="{{ url('frontend/assets/img/icon2.png') }}" alt="">
                            <div class="contact-tt">
                                <h4>Work Time</h4>
                                <span>Mon - Fri 8 AM - 5 PM</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contact-info">
                            <img src="{{ url('frontend/assets/img/icon3.png') }}" alt="">
                            <div class="contact-tt">
                                <h4>Address</h4>
                                <span>Kec. Proppo, Kabupaten Pamekasan</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="menu-btn">
                    <a href="#">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </a>
                </div>
            </div>
            <div class="navigation-bar d-flex flex-wrap align-items-center">
                <nav>
                    <ul>
                        <li><a class="{{ request()->routeIs('landing') ? 'active' : '' }}" href="{{ route('landing') }}"
                                title="">Home</a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}"
                                title="">About</a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('blogs') ? 'active' : '' }}" href="{{ route('blogs') }}"
                                title="">Blog</a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('contacts') ? 'active' : '' }}"
                                href="{{ route('contacts') }}" title="">Contacts</a>
                        </li>
                        <li>
                            <a href="{{ route('login.index') }}" title="Login Panel">Login</a>
                        </li>
                    </ul>
                </nav>
                <ul class="social-links ml-auto">
                    <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="responsive-menu">
        <ul>
            <li><a class="{{ request()->routeIs('landing') . '/' . '#home' ? 'active' : '' }}"
                    href="{{ request()->routeIs('landing') ? '#home' : route('landing') . '/' . '#home' }}"
                    title="">Home</a></li>
            <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="#about" title="">About</a>
            </li>
            <li><a class="{{ request()->routeIs('blogs') ? 'active' : '' }}" href="#blogs" title="">Blog</a>
            </li>
            <li><a class="{{ request()->routeIs('landing') . '/' . '#contacts' ? 'active' : '' }}" href="#contacts"
                    title="">Contacts</a></li>
        </ul>
    </div>
</div>
