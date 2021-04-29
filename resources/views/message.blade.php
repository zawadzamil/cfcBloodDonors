@extends('admin_layout')
@section('main_content_admin')



    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0 text-center" id="features">
        <div class="container">
            <h1 class="display-4 " style="margin-bottom: 3%;">All Massages from WEB</h1>
            <table class="table table-dark ">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Patient Name</th>
                    <th>Location</th>
                    <th>Blood Group</th>
                    <th>Message</th>

                    <th>Required Date</th>
                </tr>


                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{$d ->id}}</td>
                        <td>{{$d ->yname}}</td>
                        <td>{{$d ->phone}}</td>
                        <td>{{$d ->pname}}</td>
                        <td>{{$d ->address}}</td>
                        <td>{{$d ->group}}</td>
                        <td>{{$d ->message}}</td>
                        <td>{{$d ->date}}</td>

                        <td><a class="btn btn-danger " type="button" href="{{url('delete_message',$d ->id)}}">Delete</a>

                        </td>


                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Blog End ***** -->


@endsection
