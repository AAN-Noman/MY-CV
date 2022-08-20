@extends('layouts.backendapp')
@section('title', 'Facts and Skills info Edit |')
@section('content')
    <div class="container">
        <div class='row'>
            <div class="card-body">
                <form action="{{ route('backend.fact_skill.update', $factSkill->id) }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h2>Edit  <a href="{{ route('backend.fact_skill.index') }}" class="btn btn-primary btn-sm">back</a></h2>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="fact" value='{{ $factSkill->fact }}'>
                            <label for="floatingTitle">Happy Clients</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="fact2" value='{{ $factSkill->fact2 }}'>
                            <label for="floatingTitle">Projects</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="fact3" value='{{ $factSkill->fact3 }}'>
                            <label for="floatingTitle">Hours Of Support</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="fact4" value='{{ $factSkill->fact4 }}'>
                            <label for="floatingTitle">Hard Workers</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description'>{{ $factSkill->description }}</textarea>
                            <label for="floatingDescription">Fact Description</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description2'>{{ $factSkill->description2 }}</textarea>
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
