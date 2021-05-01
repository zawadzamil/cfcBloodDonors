

@extends('admin_layout')
@section('main_content_admin')

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center"
                     data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                   <h1 style="font-size: 200px;margin-left: 50%;">{{$donors}}</h1>
                    <h3 style="margin-left: 45%;">Total Donors</h3>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                   <h1 style="font-size: 200px;margin-left: 30%;">{{$posts}}</h1>
                    <h3 style="margin-left: 25%";>Total Donations</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->



@endsection
