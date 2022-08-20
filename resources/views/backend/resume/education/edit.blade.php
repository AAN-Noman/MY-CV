@extends('layouts.backendapp')
@section('title', 'Education info Edit |')
@section('content')
        <div class="container">
            <div class='row'>
                <div class="card-body">
                    <form action="{{ route('backend.education.update', $education->id) }}" class="row g-3" method="POST">
                        @csrf
                        @method('PUT')
                        <h2>Edit</h2>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="course" value='{{ $education->course }}'>
                                <label for="floatingName">Course</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="year" value='{{ $education->year }}'>
                                <label for="floatingName">Year</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="institude" value='{{ $education->institude }}'>
                                <label for="floatingName">Institude</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" name='description'>{{ $education->description }}</textarea>
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
