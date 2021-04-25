@extends('layout')
@section('main_content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image:url(public/images/background/becomeDonorbg.jpg);">
        <div class="container">
            <div class="title-text">
                <h1>Become a  Donor</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="{{url("/")}}">home &nbsp;/</a>
                    </li>
                    <li>Become a  Donor</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="section contact">
        <!-- container start -->

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
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 ">
                    <!-- address start -->
                    <div class="address-block">
                        <!-- Location -->
                        <div class="media">
                            <i class="far fa-map"></i>
                            <div class="media-body">
                                <h3>Location</h3>
                                <p>7600, Beroil Polita,<br> Magura Sadar, Magura</p>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="media">
                            <i class="fas fa-phone"></i>
                            <div class="media-body">
                                <h3>Phone</h3>
                                <p>
                                    (+48) 564-334-21-22-34
                                    <br>(+48) 564-334-21-22-38
                                </p>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="media">
                            <i class="far fa-envelope"></i>
                            <div class="media-body">
                                <h3>Email</h3>
                                <p>
                                    cfc@templatepath.com
                                    <br>cfc@cleanxer.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- address end -->
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form">
                        <!-- contact form start -->
                        <form method="POST" id="contact-form" action="{{url('addNewDonor')}}" class="row">
                        @csrf
                        <!-- name -->
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control main" placeholder="Name" required>
                            </div>
                            <!-- email -->
                            <div class="col-lg-6">
                                <input type="email" name="email" class="form-control main" placeholder="Email" required>
                            </div>
                            <!-- phone -->
                            <div class="col-lg-12">
                                <input name ="phone" type="text" class="form-control main" placeholder="Phone" required>
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

  outline: none;">
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
                                <input name="address" type="text" class="form-control main" placeholder="Address" required>
                            </div>
                            <!-- LAst Donated -->
                            <div class="col-lg-12" style="margin-top: 5px;">
                                <div class="container">
                                    <h6>Last Donated Blood</h6>
                                    <br/>
                                    <input name="date" type="date" id="datepicker" class="form-control" width="270" />
                                    <p style="text-align: right;"> Click Above Date Icon to Pick Up a Date</p>
                                </div>
                            </div>

                            <!-- submit button -->
                            <div class="col-md-12 text-right">
                                <button class="btn btn-style-one" type="submit">Save</button>
                            </div>
                        </form>
                        <!-- contact form end -->

                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
@endsection
