@extends('layout')
@section('main_content')
    <section class="section padding-top-70 padding-bottom-0 text-center" id="features">
        <div class="container">
            <h1 class="display-4" style="margin-bottom: 7%;">All Donor List</h1>
            <table class="table table-info ">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Blood Group</th>
                    <th>Address</th>
                    <th>Last Donation</th>
                </tr>


                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{$d ->id}}</td>
                        <td>{{$d ->name}}</td>
                        <td>{{$d ->email}}</td>
                        <td>{{$d ->phone}}</td>
                        <td>{{$d ->group}}</td>
                        <td>{{$d ->address}}</td>
                        <td>{{$d ->date}}</td>




                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>
        </div>
    </section>
    @endsection
