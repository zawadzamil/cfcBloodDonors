@extends('admin_layout')
@section('main_content_admin')



    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0 text-center" id="features">
        <div class="container">
            <h1>All Donor List</h1>
            <table class="table table-dark ">
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

                    <td><a class="btn btn-danger " type="button" href="{{url('delete_donor',$d ->id)}}">Delete</a>
                        <a class="btn btn-success " href="{{url('edit_donor',$d->id)}}">Edit</a>
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
