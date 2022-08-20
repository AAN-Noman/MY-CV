@extends('layouts.backendapp')
@section('title', 'Sumary info Edit |')
@section('content')
    <section>
        <div class="container">
            <div class='row'>
                <div class="card-body">
                    <form action="{{ route('backend.sumary.update', $sumary->id) }}" class="row g-3" method="POST">
                        @csrf
                        @method('PUT')
                        <h2>Edit</h2>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" value='{{ $sumary->name }}'>
                                <label for="floatingName">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="address" value='{{ $sumary->address }}'>
                                <label for="floatingName">Address</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="phone" value='{{ $sumary->phone }}'>
                                <label for="floatingName">Phone</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" value='{{ $sumary->email }}'>
                                <label for="floatingName">Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" name='description'>{{ $sumary->description }}</textarea>
                                <label for="floatingName">Description</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
