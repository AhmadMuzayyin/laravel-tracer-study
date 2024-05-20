<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SMKN 1 Proppo Tracer Study - Website" />
    <meta name="author" content="Ahmad Muzayyin">
    <meta name="keywords" content="Tracer Study SMKN 1 PROPPO" />
    <x-header-home />
    @stack('css')
    @trixassets
</head>


<body>

    <div class="wrapper">
        <div class="wrapper">
            <div class="main-section">
                <x-nav-home />
                @if (request()->routeIs('landing.index'))
                    <section class="main-banner">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="banner-text wow fadeInLeft" data-wow-duration="1000ms">
                                        <h2>Mempersiapkan Generasi yang <span>berkarakter positif kompeten dan
                                                Berahklak</span></h2>
                                        <p>Selamat datang di website SMKN 1 Propppo, kami Memberikan pelayanan
                                            Pendidikan yang kompetitif dibidang Kejuruan dengan mencetak lulusan yang
                                            dapat bersaing di dunia kerja</p>
                                        <form class="search-form">
                                            <input type="text" name="search" placeholder="Search Class">
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="banner-img wow zoomIn" data-wow-duration="1000ms">
                                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/radarmadura/2018/05/smkn-1-proppo-toreh-prestasi-tingkat-provinsi_m_70203.jpeg"
                                            width="497" height="586" alt="">
                                    </div><!--banner-img end-->
                                    <div class="elements-bg wow zoomIn" data-wow-duration="1000ms"></div>
                                </div>
                            </div>
                        </div>
                    </section><!--main-banner end-->
                    <h2 class="main-title">SMKN 1</h2>
                @endif
            </div><!--main-section end-->
            @yield('content')
            <x-footer-home />

        </div>
    </div>



    <script src="{{ url('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ url('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/isotope.js') }}"></script>
    <script src="{{ url('frontend/assets/js/html5lightbox.js') }}"></script>
    <script src="{{ url('frontend/assets/js/slick.min.js') }}"></script>
    {{-- <script src="{{ url('frontend/assets/js/tweenMax.js') }}"></script> --}}
    <script src="{{ url('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/scripts.js') }}"></script>
    @stack('js')

</body>

</html>
