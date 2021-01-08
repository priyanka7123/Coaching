@extends('homepage.base')

@section('content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <form action="{{route('applystore')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="">education</label>
                        <input type="text" name="education" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">skills</label>
                        <input type="text" name="skills" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">school</label>
                        <input type="text" name="school" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">gender</label>
                        <select name="gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">other</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="">dob</label>
                        <input type="date" class="form-control" name="dob">
                    </div>

                    <div class="mb-3">
                        <label for="">contact</label>
                        <input type="text" class="form-control" name="contact">
                    </div>
                    <div class="mb-3">
                        <label for="">nationality</label>
                        <input type="text" class="form-control" name="nationality">
                    </div>

                    <div class="mb-3">
                        <label for="">dp</label>
                        <input type="file" class="form-control" name="dp">
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-success w-100">
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
