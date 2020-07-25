<style>
    .section_padding {
        padding-top: 1px;
        padding-right: 0px;
        padding-bottom: 1px;
        padding-left: 0px;
    }
</style>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kasus Covid 19 Di Indonesia</title>
    <link rel="icon" href="winter/img/icon-256x256.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="winter/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="winter/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="winter/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="winter/css/all.css">
    <link rel="stylesheet" href="winter/css/nice-select.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="winter/css/flaticon.css">
    <link rel="stylesheet" href="winter/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="winter/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="winter/css/slick.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="winter/css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="winter/css/style.css">
</head>

<body class="bg-white">
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('index') }}"> <img src="winter/img/logo baru 200.png" width="60%" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('positif') }}"><h4>Data Positif</h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sembuh') }}"><h4>Data Sembuh</h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('meninggal') }}"><h4>Data Meninggal</h4></a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <div class="dropdown cart">
                            
                                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> -->
                            </div>
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    
    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <b><p>API by <a href="https://kawalcorona.com/" target="_blank">kawalcorona.com</a></p></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding">
        <div class="container">
            <h1>Sebaran Pasien <b>Meninggal</b> Covid 19 Di Indonesia Per Provinsi</h1>

            {!! $chart->container() !!}


            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
            {!! $chart->script() !!}
        </div>
    </section>
    <!--================login_part end =================-->

    <!-- subscribe_area part start-->
    <section class="instagram_photo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_photo_iner">
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_1.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_2.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_3.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_4.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_5.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Category</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Male</a></li>
                            <li><a href="#">Female</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Company</h4>
                        <ul class="list-unstyled">
                            <li><a href="">About</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Address</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">200, Green block, NewYork</a></li>
                            <li><a href="#">+10 456 267 1678</a></li>
                            <li><span>contact89@winter.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                        <div class="social_icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="winter/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="winter/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="winter/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="winter/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="winter/js/swiper.min.js"></script>
    <!-- swiper js -->
    
    <!-- particles js -->
    <script src="winter/js/owl.carousel.min.js"></script>
    <script src="winter/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="winter/js/slick.min.js"></script>
    <script src="winter/js/jquery.counterup.min.js"></script>
    <script src="winter/js/waypoints.min.js"></script>
    <script src="winter/js/contact.js"></script>
    <script src="winter/js/jquery.ajaxchimp.min.js"></script>
    <script src="winter/js/jquery.form.js"></script>
    <script src="winter/js/jquery.validate.min.js"></script>
    <script src="winter/js/mail-script.js"></script>
    <script src="winter/js/stellar.js"></script>
    <script src="winter/js/price_rangs.js"></script>
    <!-- custom js -->
    <script src="winter/js/custom.js"></script>
</body>

</html>