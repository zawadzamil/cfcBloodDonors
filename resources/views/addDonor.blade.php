@extends('admin_layout')
@section('main_content_admin')

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features" style="text-align: center;">
        <div class="container">

            <div class="row">
                <h2 class="display-3 text-dark"
                    style="margin-left: 50%;margin-right: 50%;margin: auto;margin-bottom: 5%;">Add New Donor Data</h2>
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
                                <input name="address" type="text" class="form-control main" placeholder="Address"
                                       required>
                            </div>
                            <!-- LAst Donated -->
                            <div class="col-lg-12" style="margin-top: 5px;">
                                <div class="container">
                                    <h6 style="text-align: left;">Last Donated Blood</h6>
                                    <br/>
                                    <input name="date" type="date" id="datepicker" class="form-control" width="270"/>
                                    <p style="text-align: right;"> Click Above Date Icon to Pick Up a Date</p>
                                </div>
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
<!-- ***** Features Big Item End ***** -->




@endsection
