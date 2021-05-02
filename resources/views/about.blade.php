@extends('layout')
@section('main_content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image:url(public/images/background/bgAbout1.jpg);">
        <div class="container">
            <div class="title-text">
                <h1>about us</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="{{ url("/") }}">home &nbsp;/</a>
                    </li>
                    <li>about us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Our Story -->
    <section class="story bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img loading="lazy" src="public/images/about/ourStory.jpg" class="responsive" alt="story">
                </div>
                <div class="col-lg-6">
                    <div class="story-content">
                        <h2 class="text-light">Our Story</h2>
                        <h6 class="tagline ">"Charity for Chang was established on September 11, 2020.
                            It is a completely apolitical organization that  works
                            to raise social awareness on various issues in and around
                            Beroil Polita Union."</h6>
                        <p class="text-light">Blood donation program is the important activities
                            of this organization.To ensure Education,Environment
                            Development, organization members work tirelessly</p>
                        <h6 class="text-light">Mission</h6>
                        <p class="text-light">To stand by the people of the area in danger and to participate in all developmental work.</p>
                        <h6 class="text-light">Vision</h6>
                        <p class="text-light">To build Magura's  largest voluntary organization by 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Video -->
    <section class="promo-video" style="background-image: url(public/images/about/download.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block text-center">
                        <h6></h6>
                        <h2 class="display-4 text-light" >The activities of the organization <br>
                            are conducted on a voluntary basis
                        </h2>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery bg-gray" style="background: rgb(1,2,27);
background: linear-gradient(90deg, rgba(1,2,27,1) 0%, rgba(83,82,84,1) 49%, rgba(57,0,44,1) 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="text-light">Meet our Founding Members

                        </h3>
                        <p class="text-info" style="font-size: large;">Every member is nothing but volunteer here.<br> But these are the members that founded CFC together.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img loading="lazy" src="public/images/team/anwarhossain.jpg" class="img-fluid" alt="gallery-image">
                        <a data-fancybox="images" href="public/images/team/anwarhossain.jpg"></a>
                        <h3>Anwar Hossain</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img loading="lazy" src="public/images/team/meshkat.jpg" class="img-fluid" alt="gallery-image">
                        <a data-fancybox="images" href="public/images/team/meshkat.jpg"></a>
                        <h3>Meshkat Khondoker Marsh</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img loading="lazy" src="public/images/team/shadhinBAppy.jpg" class="img-fluid" alt="gallery-image">
                        <a data-fancybox="images" href="public/images/team/shadhinBAppy.jpg"></a>
                        <h3>Shadhin Bappy</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img loading="lazy" src="public/images/team/mdMasudulIslamSAHishir.jpg" class="img-fluid" alt="gallery-image">
                        <a data-fancybox="images" href="public/images/team/mdMasudulIslamSAHishir.jpg"></a>
                        <h3>Md Masudul Islam Shishir</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img loading="lazy" src="public/images/team/palas.jpg" class="img-fluid" alt="gallery-image">
                        <a data-fancybox="images" href="public/images/team/palas.jpg"></a>
                        <h3>Tariqul Palash</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img loading="lazy" src="public/images/gallery/gallery-06.jpg" class="img-fluid" alt="gallery-image">
                        <a data-fancybox="images" href="public/images/gallery/gallery-06.jpg"></a>
                        <h3>Masum Billah</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img loading="lazy" src="public/images/team/yubi2.jpg" class="img-fluid" alt="gallery-image">
                        <a data-fancybox="images" href="public/images/team/yubi2.jpg"></a>
                        <h3>Kazi Yubayer</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img loading="lazy" src="public/images/team/saad.jpg" class="img-fluid" alt="gallery-image">
                        <a data-fancybox="images" href="public/images/team/saad.jpg"></a>
                        <h3>Nazmus Saad</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img loading="lazy" src="public/images/team/zinnat.jpg" class="img-fluid" alt="gallery-image">
                        <a data-fancybox="images" href="public/images/team/zinnat.jpg"></a>
                        <h3>Kazi Zinnat</h3>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->

    <!-- End Contact Section -->
@endsection
