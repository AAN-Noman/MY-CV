@extends('layouts.backendapp')
@section('title', 'Edit |')
@section('content')
    <div class="container">
        <div class='row'>
            <div class="card-body">
                <form action="{{ route('backend.about.update', $about->id) }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h2>Edit <a href="{{ route('backend.about.index') }}" class="btn btn-primary btn-sm">Back</a></h2>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="title" value='{{ $about->title }}'>
                            <label for="floatingTitle">Title</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="date" class="form-control" name="Birthday" value='{{ $about->Birthday }}'>
                            <label for="floatingBirthday">Birthday</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="Age" value='{{ $about->Age }}'>
                            <label for="floatingAge">Age</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="Website" value='{{ $about->Website }}'>
                            <label for="floatingWebsite">Website</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="Degree" value='{{ $about->Degree }}'>
                            <label for="floatingDegree">Degree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="Phone" value='{{ $about->Phone }}'>
                            <label for="floatingPhone">Phone</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" name="Email" value='{{ $about->Email }}'>
                            <label for="floatingEmail">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="OldCity" value='{{ $about->OldCity }}'>
                            <label for="floatingCity">OldCity</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="City" value='{{ $about->City }}'>
                            <label for="floatingCity">City</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="Freelance" value='{{ $about->Freelance }}'>
                            <label for="floatingFreelance">Freelance</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description'>{{ $about->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description2'>{{ $about->description2 }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description3'>{{ $about->description3 }}</textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
