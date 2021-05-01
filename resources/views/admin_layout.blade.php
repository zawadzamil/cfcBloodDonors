<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>CFC Admin Panel</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="public/admin_pannel/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="public/admin_pannel/css/font-awesome.css">

    <link rel="stylesheet" href="public/admin_pannel/css/templatemo-softy-pinko.css">
    <link rel="icon" href="public/images/favicon2.png" type="image/x-icon">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome" style="background-image: url(public/admin_pannel/images/admin_Pannlbg.jpg)">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <h1 class="text-light display-1">CFC Admin Panel </h1>


                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Small Start ***** -->
<section class="section home-feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6"
                         data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="public/admin_pannel/images/featured-item-01.png" alt=""></i>
                            </div>
                            <h5 class="features-title">All Donors</h5>
                            <button type="button " onclick="document.location='{{url('allDonor')}}'"
                                    class="btn btn-danger">View
                            </button>

                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6"
                         data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="public/admin_pannel/images/featured-item-01.png" alt=""></i>
                            </div>
                            <h5 class="features-title">Add Donor</h5>
                            <button type="button " onclick="document.location='{{url('addDonor')}}'"
                                    class="btn btn-success">Add
                            </button>


                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6"
                         data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="public/admin_pannel/images/featured-item-01.png" alt=""></i>
                            </div>
                            <h5 class="features-title">Create A Donation Post</h5>
                            <button type="button " onclick="document.location='{{url('bloodpost')}}'"
                                    class="btn btn-info">Create
                            </button>

                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6"
                         data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="public/admin_pannel/images/featured-item-01.png" alt=""></i>
                            </div>
                            <h5 class="features-title">Messages</h5>
                            <button type="button " onclick="document.location='{{url('message')}}'"
                                    class="btn btn-info">View
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@yield('main_content_admin')






<!-- ***** Footer Start ***** -->
<footer>
    <div class="container" >
        <nav class="navbar navbar-light  bg-transparent" >
            <form class="form-inline"  style="margin-left: 45%; margin-right: 50%;margin: auto;">
                <button class="btn bg-transparent"  type="button" onclick="document.location='{{url('/')}}'">Home</button>
                <button class="btn bg-transparent"  type="button" onclick="document.location='{{url('adminPannel')}}'">Admin Panel Home</button>
                <button class="btn bg-transparent" type="button" onclick="document.location='{{url('logout')}}'">Logout</button>

            </form>
        </nav>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Copyright &copy; 2020 Softy Pinko Company - Design: TemplateMo</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="public/admin_pannel/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="public/admin_pannel/js/popper.js"></script>
<script src="public/admin_pannel/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="public/admin_pannel/js/scrollreveal.min.js"></script>
<script src="public/admin_pannel/js/waypoints.min.js"></script>
<script src="public/admin_pannel/js/jquery.counterup.min.js"></script>
<script src="public/admin_pannel/js/imgfix.min.js"></script>

<!-- Global Init -->
<script src="public/admin_pannel/js/custom.js"></script>

</body>
</html>
