@extends('layouts.backendapp')
@section('title', 'home info Edit | Home')
@section('content')
    <div class="container">
        <div class='row'>
            <div class="card-body">
                <form action="{{ route('backend.home.update', $home->id) }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h2>Edit <a href="{{ route('backend.home.index') }}" class="btn btn-primary btn-sm">Back</a></h2>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name='name' value='{{ $home->name}}'>
                            <label for="floatingName">Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="profession" value='{{ $home->profession }}'>
                            <label for="floatingName">Profession</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="link" value="{{ $home->link }}">
                            <label for="floatinglink">Facebook</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="link2" value="{{ $home->link2 }}">
                            <label for="floatingLink">Instagram</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="link3" value="{{ $home->link3 }}">
                            <label for="floatingLink">Twitter</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="link4" value="{{ $home->link4 }}">
                            <label for="floatingLink">GitHub</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="link5" value="{{ $home->link5 }}">
                            <label for="floatingLink">Linkedin</label>
                        </div>
                    </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type='file' class="form-control" name="photo">
                                <img width="100" class='mt-3' src="{{ asset('storage/home/profile/' . $home->photo) }}" alt="{{ $home->name }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type='file' class="form-control" name="CoverPhoto">
                                <img width="100" class='mt-3' src="{{ asset('storage/home/coverPic/' . $home->CoverPhoto) }}" alt="">
                            </div>
                        </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End floating Labels Form -->
            </div>
        </div>
    @endsection
