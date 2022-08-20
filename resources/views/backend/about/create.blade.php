@extends('layouts.backendapp')
@section('title', 'About info make |')
@section('content')
    <div class="container">
        <div class='row'>
            <div class="card-body">
                <form action="{{ route('backend.about.store') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2>Add About info <a href="{{ route('backend.about.index') }}" class="btn btn-primary btn-sm">All
                        About info</a></h2>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                            <label for="floatingTitle">Title</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="date" class="form-control" name="Birthday" placeholder="Birthday">
                            <label for="floatingBirthday">Birthday</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="Age" placeholder="Age">
                            <label for="floatingAge">Age</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="Website" placeholder="Website">
                            <label for="floatingWebsite">Website</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="Degree" placeholder="Degree">
                            <label for="floatingDegree">Degree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="Phone" placeholder="Phone">
                            <label for="floatingPhone">Phone</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" name="Email" placeholder="Email">
                            <label for="floatingEmail">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="OldCity" placeholder="OldCity">
                            <label for="floatingCity">OldCity</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="City" placeholder="City">
                            <label for="floatingCity">City</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="Freelance" placeholder="Freelance">
                            <label for="floatingFreelance">Freelance</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description'></textarea>
                            <label for="floatingDescription">Description</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description2'></textarea>
                            <label for="floatingDescription">Description2</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description3'></textarea>
                            <label for="floatingDescription">Description3</label>
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
