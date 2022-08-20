@extends('layouts.backendapp')
@section('title', 'home info make | Home')
@section('content')
    <div class="container">
        <div class='row'>
            <div class="card-body">
                <form action="{{ route('backend.home.store') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2>Add Home info <a href="{{ route('backend.home.index') }}" class="btn btn-primary btn-sm">All
                        home info</a></h2>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name='name' placeholder="Name">
                            <label for="floatingName">Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="profession" placeholder="Profession">
                            <label for="floatingName">Profession</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="link" placeholder="Facebook">
                            <label for="floatinglink">Facebook</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="link2" placeholder="Instagram">
                            <label for="floatingLink">Instagram</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="link3" placeholder="Twitter">
                            <label for="floatingLink">Twitter</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="link4" placeholder="GitHub">
                            <label for="floatingLink">GitHub</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="link5" placeholder="Linkedin">
                            <label for="floatingLink">Linkedin</label>
                        </div>
                    </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type='file' class="form-control" name="photo">
                                <label for="floatingPhoto">Profile Pic</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type='file' class="form-control" name="CoverPhoto">
                                <label for="floatingPhoto">Cover Pic</label>
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
