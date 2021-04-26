<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>CFC Admin Panel</title>
    <!--
    SOFTY PINKO
    https://templatemo.com/tm-535-softy-pinko
    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="public/admin_pannel/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="public/admin_pannel/css/font-awesome.css">

    <link rel="stylesheet" href="public/admin_pannel/css/templatemo-softy-pinko.css">

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
                    <h1 class="text-light display-1">CFC <strong>Admin</strong><br>Pannel </h1>


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
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12"
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
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12"
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
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12"
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->

<!-- ***** Features Big Item Start ***** -->
<section class="section padding-top-70 padding-bottom-0 bg-dark" id="features">
    <div class="container">
        <h1 class="text-light " style="text-align: center;margin-bottom: 20px;">Add Donor Post</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-10 col-md-8">
                    <div class="contact-form">
                        <!-- Confirmation Or Failure Message -->
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif
                        @if (\Session::has('failed'))
                            <div class="alert alert-danger">
                                <ul>
                                    <li>{!! \Session::get('failed') !!}</li>
                                </ul>
                            </div>
                    @endif
                    <!-- Confirmation Or Failure Message -->
                        <!-- contact form start -->
                        <form method="POST" id="contact-form" action="{{url('addPost')}}" enctype="multipart/form-data" class="row">
                        @csrf
                        <!-- name -->
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control main" placeholder="Name" required>
                            </div>
                            <!-- email -->
                            <div class="col-lg-4">
                                <input type="number" name="serial" class="form-control main" placeholder="Donor Number" required>
                            </div>
                            <!-- phone -->
                            <div class="col-lg-12">
                                <input type="text" name="cname" class="form-control main" placeholder="Collector Name" required>
                            </div>

                            <!-- Blood Group -->
                            <div class=" col-lg-6 " >
                                <select class="form-control main" id="" name="group" style="background-color: #af080b;margin-left: 150px;
  color: white;
  padding: 12px;
  width: 250px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;

  outline: none;" required>
                                    <option value="" selected="selected" disabled="disabled">Select Blood Group</option>
                                    <option value="O+">O+</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="O-">O-</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                </select>
                                <!-- Location -->
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px;">
                                <input name="address" type="text" class="form-control main" placeholder="Location" required>
                            </div>
                            <!-- LAst Donated -->
                            <div class="col-lg-12" style="margin-top: 5px;">
                                <div class="container">
                                    <h6 class="text-light">Date</h6>
                                    <br/>
                                    <input name="date" type="date" id="datepicker" class="form-control" width="270" required />
                                    <p style="text-align: right;" class="text-light"> Click Above Date Icon to Pick Up a Date</p>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="text-light">Image</label>
                                <input type="file" class="form-control" name="photo">
                            </div>

                            <!-- submit button -->
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success btn-group-lg" type="submit">Save</button>
                            </div>
                        </form>
                        <!-- contact form end -->

                    </div>
                </div>
                <div class="hr"></div>
            </div>
        </div>


    </div>
</section>


<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
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
