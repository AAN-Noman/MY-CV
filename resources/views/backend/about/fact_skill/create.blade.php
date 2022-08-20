@extends('layouts.backendapp')
@section('title', 'Facts and Skills info make |')
@section('content')
    <div class="container">
        <div class='row'>
            <div class="card-body">
                <form action="{{ route('backend.fact_skill.store') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2>Add Fact and skills des info <a href="{{ route('backend.fact_skill.index') }}" class="btn btn-primary btn-sm">All
                        Fact info</a></h2>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="fact" placeholder="Happy Clients">
                            <label for="floatingTitle">Happy Clients</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="fact2" placeholder="Projects">
                            <label for="floatingTitle">Projects</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="fact3" placeholder="Hours Of Support">
                            <label for="floatingTitle">Hours Of Support</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="fact4" placeholder="Hard Workers">
                            <label for="floatingTitle">Hard Workers</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description'></textarea>
                            <label for="floatingDescription">Fact Description</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description2'></textarea>
                            <label for="floatingDescription">Skills Description</label>
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
