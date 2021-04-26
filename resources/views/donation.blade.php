@extends('layout')
@section('main_content')

    <section class="section bg-dark text-center" style="align-content: center;">


        <table class="table table-borderless" >
            <h1 class="display-1" style="margin-bottom: 20px;">All Blood Donation Posts</h1>
            @foreach($data as $d)
            <tr >
                <div class="card" style="width: 20rem; margin-left: 50%;margin-right: 50%;margin: auto; margin-bottom: 15px;">
                    <img class="card-img-top" src="public/postImages/{{$d ->photo}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{$d ->name}}</h5>
                        <h6 class="card-text">Donor No. {{$d ->serial}}</h6>
                        <h6 class="card-text">Collector  {{$d ->cname}}</h6>
                        <h6 class="card-text">Blood Group {{$d ->group}}</h6>
                        <h6 class="card-text">Address {{$d ->address}}</h6>
                        <h6 class="card-text">Date {{$d ->date}}</h6>

                    </div>
                </div>


            </tr>
                @endforeach


        </table>





    </section>

    @endsection
