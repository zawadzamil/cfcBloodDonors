@extends('layout')
@section('main_content')
    <section class="section padding-top-70 padding-bottom-0 bg-dark" id="features">
        <div class="container">
            <h1 class="text-light " style="text-align: center;margin-bottom: 20px;">Request for Blood</h1>
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
                            <form method="POST" id="contact-form" action="{{url('addMessage')}}" enctype="multipart/form-data" class="row">
                            @csrf
                            <!-- name -->
                                <div class="col-lg-6" style="margin-top: 5%;">
                                    <input type="text" name="yname" class="form-control main" placeholder="Your Name" required>
                                </div>
                                <!-- email -->
                                <div class="col-lg-6" style="margin-top: 5%;">
                                    <input type="text" name="phone" class="form-control main" placeholder="Your Phone Number" required>
                                </div>
                                <!-- phone -->
                                <div class="col-lg-6" style="margin-top: 5%;">
                                    <input type="text" name="pname" class="form-control main" placeholder="Patient Name" required>
                                </div>
                                <div class="col-lg-6" style="margin-top: 5%;">
                                    <input type="text" name="address" class="form-control main" placeholder="Location (Receiving)" required>
                                </div>

                                <!-- Blood Group -->
                                <div class=" col-lg-6 " style="margin-top: 3%;">
                                    <select class="form-control main" id="" name="group" style="background-color: #af080b;margin-left: 150px;
  color: white;
  padding: 12px;
  width: 250px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;

  outline: none;" required>
                                        <option value="" selected="selected" disabled="disabled">Select  Requirred Blood Group</option>
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
                                <br>
                                <!--  Massage  -->
                                <label for="w3review" class="text-light col-lg-12" style="margin-left: 2%; margin-top: 2%;">Send Your Massage (Optional)</label>

                                <textarea id="w3review" name="message" rows="3" cols="60" style="margin-top: 1%; margin-left: 1%; ">

                                </textarea>
                                <!-- LAst Donated -->
                                <div class="col-lg-12" style="margin-top: 5px;">
                                    <div class="container">
                                        <h6 class="text-light" style="margin-top: 3%;">Date</h6>
                                        <br/>
                                        <input name="date" type="date" id="datepicker" class="form-control" width="270" required />
                                        <p style="text-align: right;" class="text-light"> Click Above Date Icon to Pick Up a Date</p>
                                    </div>
                                </div>




                                <!-- submit button -->
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-info btn-lg" type="submit">Save</button>
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
    @endsection
