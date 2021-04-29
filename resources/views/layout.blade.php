
<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>CFC | Charity For Change</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Medical HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Medical HTML Template v1.0">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="public/plugins/bootstrap/bootstrap.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="public/plugins/slick/slick.css">
    <link rel="stylesheet" href="public/plugins/slick/slick-theme.css">
    <!-- FancyBox -->
    <link rel="stylesheet" href="public/plugins/fancybox/jquery.fancybox.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="public/plugins/fontawesome/css/all.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="public/plugins/animation/animate.min.css">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="public/plugins/jquery-ui/jquery-ui.css">
    <!-- timePicker -->
    <link rel="stylesheet" href="public/plugins/timePicker/timePicker.css">

    <!-- Stylesheets -->
    <link href="public/css/style.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" href="public/images/favicon2.png" type="image/x-icon">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
<div class="page-wrapper">





    <!--Header Upper-->
    <section class="header-uper bg-dark bg-image" style="background-image: url(public/images/bg.jpg    );">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-3">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img loading="lazy" class="img-fluid" src="public/images/logogog.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9">
                    <div class="right-side">
                        <div class="container">
                            <h1 class="neon" style="color: #fff;
                            margin-left: 50px;
                            text-align: center;
  text-shadow:
    0 0 5px #fff,
    0 0 10px #fff,
    0 0 20px #fff,
    0 0 40px #ff4a1e,
    0 0 80px #ff1b10,
    0 0 90px #ff070f,
    0 0 100px #ff1322,
    0 0 150px #ff162a;">“Donating Money Is Great<br> But Donating Blood Is Even Better.”</h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Header Upper-->


    <!--Main Header-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger  ">
        <div class="container  ">
            <button class="navbar-toggler" type="button" data-toggle="collapse " data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  " id="navbarLinks" >
                <ul class="navbar-nav">
                    <li class="nav-item @@home ">
                        <a class="nav-link "  href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item @@about">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item @@service">
                        <a class="nav-link" href="{{ url('donation') }}">Blood Donations</a>
                    </li>
                    <li class="nav-item @@gallery">
                        <a class="nav-link" href="{{ url('become_a_donor') }}">Become a Donor</a>
                    </li>
                    <li class="nav-item @@team">
                        <a class="nav-link" href="{{ url('team') }}">Donors</a>
                    </li>


                    <li class="nav-item @@contact">
                        <a class="nav-link" href="{{ url('contact') }}">Request for Blood</a>
                    </li>
                    <li class="nav-item @@admin">
                        <a class="nav-link" href="{{ url('admin') }}">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Main Header -->
    <!--////////////////////Header Ends////////////////////////////////////-->

    @yield('main_content')



    <!-- End Contact Section -->
    <!--/////////////////////////// Footer///////////////////////// -->

    <!--footer-main-->
    <footer class="footer-main">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="about-widget">
                            <div class="footer-logo">
                                <figure>
                                    <a href="{{url("/")}}">
                                        <img loading="lazy" class="img-fluid" src="public/images/logogog.png" alt="medic">
                                    </a>
                                </figure>
                            </div>
                            <h6>It is a completely apolitical organization.
                                The activities of the organization are conducted on a voluntary basis.
                                Members of the Charity for Change organization work to increase social awareness</h6>
                            <ul class="location-link">
                                <li class="item">
                                    <i class="fas fa-directions"></i>
                                    <p>Beroil Polita,   7600 Maggura Sadar, Magura</p>
                                </li>
                                <li class="item">
                                    <i class="far fa-envelope" aria-hidden="true"></i>
                                    <a href="mailto:support@medic.com">
                                        <p>support@cfc.com</p>
                                    </a>
                                </li>
                                <li class="item">
                                    <i class="fas fa-phone" aria-hidden="true"></i>
                                    <p>(88017) +123 4567</p>
                                </li>
                            </ul>
                            <ul class="list-inline social-icons">
                                <li class="list-inline-item"><a href="https://www.facebook.com/groups/3789291607782359"  target="_blank" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com" target="_blank"  aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://instagram.com" target="_blank" aria-label="instagram"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <!--Srevices-->
                    <div class="col-lg-3 col-md-5 mb-3 mb-md-0" style="margin-top: 20px;">
                        <h2>Services</h2>
                        <ul class="menu-link">
                            <li>
                                <a href="service.html">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
                            </li>
                        </ul>
                    </div>
                    <!--Recent POsts-->
                    <div class="col-lg-4 col-md-7"  style="margin-top: 20px;">
                        <div class="social-links">
                            <h2>Recent Posts</h2>
                            <ul>
                                <li class="item">
                                    <div class="media">
                                        <div class="media-left mr-3">
                                            <a href="blog-details.html">
                                                <img loading="lazy" src="public/images/blog/post-thumb-small.jpg" alt="post-thumb">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="blog-details.html">A lesson adip isicing</a></h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="media">
                                        <div class="media-left mr-3">
                                            <a href="blog-details.html">
                                                <img loading="lazy" src="public/images/blog/post-thumb-small.jpg" alt="post-thumb">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="blog-details.html">How to make an event</a></h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom-->
        <div class="footer-bottom">
            <div class="container clearfix">
                <div class="copyright-text">
                    <p>&copy; Copyright 2021. Designed &amp; Developed  with &hearts; by Zawad Zamil [App Version Beta 1.1.0]</p>
                </div>
                <ul class="footer-bottom-link">
                    <li>
                        <a href="{{ url("/") }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url("about") }}">About</a>
                    </li>
                    <li>
                        <a href="{{ url("contact") }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!--End footer-main-->

    <!-- scroll-to-top -->
    <div id="back-to-top" class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!--/////////////////////////// Footer Ends///////////////////////// -->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
</div>
<!-- jQuery -->



<!-- jquery -->
<script src="public/plugins/jquery.min.js"></script>
<!-- bootstrap -->
<script src="public/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Slick Slider -->
<script src="public/plugins/slick/slick.min.js"></script>
<script src="public/plugins/slick/slick-animation.min.js"></script>
<!-- FancyBox -->
<script src="public/plugins/fancybox/jquery.fancybox.min.js" defer></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="public/plugins/google-map/gmap.js" defer></script>

<!-- jquery-ui -->
<script src="public/plugins/jquery-ui/jquery-ui.js" defer></script>
<!-- timePicker -->
<script src="public/plugins/timePicker/timePicker.js" defer></script>

<!-- script js -->
<script src="public/js/script.js"></script>
</body>

</html>


