@extends('admin.adminbase')


@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="{{route('students')}}" class="list-group-item list-group-item-action">Students</a>
                    <form action="{{route('logout')}}" method="POST">
                        <input type="submit" class="list-group-item list-group-item-action bg-danger text-white" value="Logout">
                    @csrf
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h3>Total Students</h3>
                                <h6>{{$students}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
