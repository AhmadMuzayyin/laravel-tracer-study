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
                        <li><a class="{{ request()->routeIs('landing.index') ? 'active' : '' }}"
                                href="{{ route('landing.index') }}" title="Beranda">Home</a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('landing.about') ? 'active' : '' }}"
                                href="{{ route('landing.about') }}" title="Tentang Kami">About</a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('landing.blogs') ? 'active' : '' }}"
                                href="{{ route('landing.blogs') }}" title="Blog SMKN 1 Proppo">Blog</a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('landing.contacts') ? 'active' : '' }}"
                                href="{{ route('landing.contacts') }}" title="Hubungi Kami">Contacts</a>
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
            <li><a class="{{ request()->routeIs('landing.index') ? 'active' : '' }}"
                    href="{{ route('landing.index') }}" title="Beranda">Home</a>
            </li>
            <li>
                <a class="{{ request()->routeIs('landing.about') ? 'active' : '' }}"
                    href="{{ route('landing.about') }}" title="Tentang Kami">About</a>
            </li>
            <li>
                <a class="{{ request()->routeIs('landing.blogs') ? 'active' : '' }}"
                    href="{{ route('landing.blogs') }}" title="Blog SMKN 1 Proppo">Blog</a>
            </li>
            <li>
                <a class="{{ request()->routeIs('landing.contacts') ? 'active' : '' }}"
                    href="{{ route('landing.contacts') }}" title="Hubungi Kami">Contacts</a>
            </li>
            <li>
                <a href="{{ route('login.index') }}" title="Login Panel">Login</a>
            </li>
        </ul>
    </div>
</div>
