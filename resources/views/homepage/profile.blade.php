@extends('homepage.base')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
            <div class="card">
                <img src="{{asset('upload/'.$students->dp)}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h2>{{$students->name}}</h2></div>
                    <table class="table table-bordered">
                        <tr>
                        <th>gender
                            <td>{{$students->gender}}</td>
                        </th>
                        </tr>
                        <tr>
                        <th>contact
                            <td>{{$students->contact}}</td>
                        </th>
                        </tr>
                        <tr>
                        <th>school
                            <td>{{$students->school}}</td>
                        </th>
                        </tr>
                        <tr>
                        <th>nationality
                            <td>{{$students->nationality}}</td>
                        </th>
                        </tr>
                        <tr>
                        <th>dob
                            <td>{{$students->dob}}</td>
                        </th>
                        </tr>

                    </table>

            </div>
            </div>
            <div class="col-lg-9">
                <div class="container bg-light text-dark">
                    <h2 class="display-4">
                        welcome to portal
                    </h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos modi enim vel, earum recusandae error odit est eius! Eius laborum hic vero quod exercitationem quos dolorum voluptas debitis, praesentium nam.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
