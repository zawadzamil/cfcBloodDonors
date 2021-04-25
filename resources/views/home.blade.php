@extends('layout')
@section('main_content')


    <!--=================================
    =            Page Slider            =
    ==================================-->
    <div class="hero-slider">
        <!-- Slider Item -->
        <div class="slider-item slide1" style="background-image:url(public/images/slider/1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Slide Content Start -->
                        <div class="content style text-center">
                            <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft">CFC Blood Donation Campaign</h2>
                            <p class="tag-text mb-4" data-animation-in="slideInRight">CFC Conducted blood donation and blood group determination campaign <br>On 21 November, 2020</p>
                            <a href="{{url("about")}}" class="btn btn-main btn-white" data-animation-in="slideInLeft" data-duration-in="1.2">explore cfc</a>
                        </div>
                        <!-- Slide Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Item -->
        <div class="slider-item" style="background-image:url(public/images/slider/2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Slide Content Start-->
                        <div class="content style text-center">
                            <h2 class="text-white" data-animation-in="slideInRight">Members are having T-Shirt</h2>
                            <p class="tag-text mb-4" data-animation-in="slideInRight" data-duration-in="0.6">CFC Blood Donors are accepting their t-shirt.<br>
                                Every donor should get their own t-shirt </p>
                            <a href="{{url("become_a_donor")}}" class="btn btn-main btn-white" data-animation-in="slideInRight" data-duration-in="1.2">become donor</a>
                        </div>
                        <!-- Slide Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Item -->
        <div class="slider-item" style="background-image:url(public/images/slider/3.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Slide Content Start -->
                        <div class="content text-center style">
                            <h2 class="text-white text-bold mb-2" data-animation-in="slideInRight">Top Donor CFC</h2>
                            <p class="tag-text mb-4" data-animation-in="slideInLeft">Our blood contributors are giving blood in a customary premise. <br>Explore our whole team</p>
                            <a href="{{url("team")}}" class="btn btn-main btn-white" data-animation-in="slideInRight"  data-duration-in="1.2">Team</a>
                        </div>
                        <!-- Slide Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====  End of Page Slider  ====-->

    <section class="cta" style="background: linear-gradient(to right, #669999 0%, #9900ff 100%);" >
        <div class="container">
            <div class="cta-block row no-gutters">
                <div class="col-lg-3 col-md-6 emmergency item" style="margin-left: 40px">
                    <i class="fa fa-phone"></i>
                    <h2>Emegency Cases</h2>
                    <a href="tel:1-800-700-6200">1-800-700-6200</a>
                    <p>For Emergency Blood, Call here</p>
                </div>
                <div class="col-lg-3 col-md-6 top-doctor item" style="margin-left: 100px;">
                    <i class="fa fa-stethoscope"></i>
                    <h2>24 Hour Service</h2>
                    <p>CFC Members are available 24/7 to help you.<br> Everything they want that is just a smile on your face</p>

                </div>
                <div class="col-lg-3 col-md-12 working-time item" style="margin-left: 100px;">
                    <i class="fa fa-hourglass-o"></i>
                    <h2>Working Principle</h2>
                    <p>We do not sell blood!<br> Make sure the patent is from Magura</p>


                </div>
            </div>
        </div>
    </section>

    <!--about section-->
    <section class="feature-section section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-content">
                        <div class="section-title text-center">
                            <h3 class="text-light">Search for Blood Donors</h3>
                        </div>
                        <div class="box" style=" position: absolute;margin-top: 30px; display: inline-block;">
                            <select style="background-color: #0563af;margin-left: 150px;
  color: white;
  padding: 12px;
  width: 250px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;

  outline: none;">
                                <option value="" selected="selected" disabled="disabled">Select Blood Group</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                            <select style="background-color: #7b13af;margin-left: 50px;
  color: white;
  padding: 12px;
  width: 350px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;

  outline: none;">
                                <option value="" selected="selected" disabled="disabled">Select Location</option>
                                <option>Magura</option>
                                <option>Beroil</option>
                                <option>Vangura</option>
                                <option>Nohata</option>
                                <option>Panighata</option>
                                <option>Polita</option>
                                <option>Shingra</option>
                            </select>
                            <button class="btn btn-danger" style="margin-left: 50px;" type="submit">Search</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End about section-->

    <!--Start about us area-->
    <!--Add Leatest post section here-->
    <!--End about us area-->

    <!--Service Section-->
    <section class="service-section bg-gray section">
        <div class="container">
            <div class="section-title text-center">
                <h3>Some of Our
                    <span>Donations</span>
                </h3>
                <p>We have successfully donated blood <h3>60</h3> times. <br>Here are some of them.  </p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="items-container">
                        <div class="item">
                            <div class="inner-box">
                                <div class="img_holder">
                                    <a href="service.html">
                                        <img loading="lazy" src="public/images/gallery/donor13.jpg" alt="images" class="img-fluid">
                                    </a>
                                </div>
                                <div class="image-content text-center">
                                    <span>Donor Number 13</span>
                                    <a href="service.html">
                                        <h6>KAZI ZINNAT</h6>
                                    </a>
                                    <p>A boy who is averse to propaganda. If we need the blood of someone we know in our area, we call him first.</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="inner-box">
                                <div class="img_holder">
                                    <a href="service.html">
                                        <img loading="lazy" src="public/images/gallery/donor33.jpg" alt="images" class="img-fluid">
                                    </a>
                                </div>
                                <div class="image-content text-center">
                                    <span>Donor Number 33</span>
                                    <a href="service.html">
                                        <h6>Saddam Hossain</h6>
                                    </a>
                                    <p>A hard working person and an active donor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner-box">
                                <div class="img_holder">
                                    <a href="service.html">
                                        <img loading="lazy" src="public/images/gallery/donor43.jpg" alt="images" class="img-fluid">
                                    </a>
                                </div>
                                <div class="image-content text-center">
                                    <span>Donor Number 43</span>
                                    <a href="service.html">
                                        <h6>Nur Alam</h6>
                                    </a>
                                    <p>Always puts a smaile on his face while donating blood </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner-box">
                                <div class="img_holder">
                                    <a href="service.html">
                                        <img loading="lazy" src="public/images/gallery/donor48.jpg" alt="images" class="img-fluid">
                                    </a>
                                </div>
                                <div class="image-content text-center">
                                    <span>Donor Number 48</span>
                                    <a href="service.html">
                                        <h6>Md Shanto</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner-box">
                                <div class="img_holder">
                                    <a href="service.html">
                                        <img loading="lazy" src="public/images/gallery/donor59.jpg" alt="images" class="img-fluid">
                                    </a>
                                </div>
                                <div class="image-content text-center">
                                    <span>Donor Number 59</span>
                                    <a href="service.html">
                                        <h6>Md Obaidur</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Service Section-->

    <!--team section-->
    <section class="team-section section  " style="background: rgb(1,2,27);
background: linear-gradient(90deg, rgba(1,2,27,1) 0%, rgba(64,16,96,1) 49%, rgba(74,1,7,1) 100%);">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="text-light">Our Iconic Members
                    <span class="text-light"><br>NB:We Evaluate Every Member Equally.</span>
                </h3>

            </div>
            <div class="row justify-content-center" >
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <img loading="lazy" src="public/images/team/palas.jpg" alt="doctor" class="img-fluid">
                        <div class="contents text-center">
                            <h4>Tariqul Palash</h4>
                            <p><h6>Admin</h6>Teacher<br>Studied at Govt Titumir College, Dhaka</p>
                            <a href="https://www.facebook.com/tariqul.palash.92" target="_blank" class="btn btn-main">Find on Facebook</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <img loading="lazy" src="public/images/team/yubi.jpg" alt="doctor" class="img-fluid">
                        <div class="contents text-center">
                            <h4>Kazi Yubayer</h4>
                            <p><h6>Admin</h6>Senior Officer at Bangladesh Krishi Bank <br>Studied Marketing at Rajshahi University</p>
                            <a href="https://www.facebook.com/yubayer" target="_blank" class="btn btn-main">Find on Facebook</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <img loading="lazy" src="public/images/team/zinnat.jpg" alt="doctor" class="img-fluid">
                        <div class="contents text-center">
                            <h4>KAzi Zinnat</h4>
                            <p><h6>Active Member</h6>Studies at Nazir Ahmed Degree College<br>Went to Beroil AkAw High School</p>
                            <a href="https://www.facebook.com/kaji.a.54" target="_blank" class="btn btn-main">Find on Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End team section-->

    <!--testimonial-section-->
    <section class="testimonial-section" style="background: url(public/images/testimonials/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>What Our
                            <span>Leaders Says</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-carousel">
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box text-center">
                                <div class="image-box">
                                    <figure>
                                        <img loading="lazy" src="public/images/team/palas.jpg" alt="">
                                    </figure>
                                </div>
                                <h6>Tariqul Palash</h6>
                                <p class="mb-0">"Only collectors know what a difficult situation it is to collect blood from time to time"</p>
                            </div>
                        </div>
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box text-center">
                                <div class="image-box">
                                    <figure>
                                        <img loading="lazy" src="public/images/team/saad.jpg" alt="">
                                    </figure>
                                </div>
                                <h6>Nazmus Saad</h6>
                                <p class="mb-0">We have built a family of harmony through blood.Many thanks to every member of this family for their hard work.</p>
                            </div>
                        </div>
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box text-center">
                                <div class="image-box">
                                    <figure>
                                        <img loading="lazy" src="public/images/testimonials/3.png" alt="">
                                    </figure>
                                </div>
                                <h6>Masum Billah</h6>
                                <p class="mb-0">Avoiding the blood post ?
                                    When you need the blood of your loved ones or people close to you, you will understand the value of blood!</p>
                            </div>
                        </div>
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box text-center">
                                <div class="image-box">
                                    <figure>
                                        <img loading="lazy" src="public/images/team/yubi.jpg" alt="">
                                    </figure>
                                </div>
                                <h6>Kazi Yubayer</h6>
                                <p class="mb-0">"The best way to motivate another person to do something is to do it by yourself."</p>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End testimonial-section-->

    <!-- Contact Section -->
    <section class="appoinment-section section bg-dark" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-10">
                    <div class="accordion-section">
                        <div class="section-title text-center">
                            <h3 class="text-light">FAQ'S</h3>
                        </div>
                        <div class="accordion-holder">
                            <div class="accordion" id="accordionGroup" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h4 class="card-title">
                                            <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                HOW MUCH BLOOD IS NEEDED TO SAVE A LIFE?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionGroup">
                                        <div class="card-body">
                                            It depends on the situation. According to the American Red Cross,
                                            the average red blood cell transfusion is roughly 3 pints,
                                            but a single car accident victim could need up to 100 pints.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h4 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo"
                                               aria-expanded="false" aria-controls="collapseTwo">
                                                WHO ISN'T ELIGIBLE TO DONATE?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionGroup">
                                        <div class="card-body">
                                            Some states allow 16-year-olds to donate with parental consent,
                                            but most require blood givers to be at least 17.
                                            You also have to weigh a minimum of 110 pounds and be in good general health.
                                            (If you have a cold, flu, or fever, you will be turned away.)
                                            Being a world traveler could also be an issue.
                                            Those who have recently visited countries where
                                            diseases such as malaria or the Zika virus are common are required
                                            to wait a set amount of time before offering up a vein. Piercings
                                            and tattoos can also temporarily prevent you from donating dependi
                                            ng on how long ago you acquired them.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h4 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree"
                                               aria-expanded="false" aria-controls="collapseThree">
                                                HOW DOES MY BODY REPLACE THE BLOOD LOST?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionGroup">
                                        <div class="card-body">
                                            The average adult has between 10 and 12 pints of blood in their body.
                                            Since your bone marrow churns out a constant supply of red cells, plasma,
                                            and platelets, the plasma you give is replaced within the first 24 hours.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h4 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseFour"
                                               aria-expanded="false" aria-controls="collapseThree">
                                                DO I NEED TO DO ANYTHING SPECIAL AFTER DONATING?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionGroup">
                                        <div class="card-body">
                                            The American Red Cross suggests replacing the lost iron
                                            with foods such as spinach, beans, and red meat as well
                                            as drinking an extra 4 to 8 ounces of non-alcoholic liquid.
                                            They also advise against doing heavy lifting and recommend
                                            keeping your bandage on for at least five hours. (Bonus: that
                                            makes it easier to brag to your friends about your largesse!)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
