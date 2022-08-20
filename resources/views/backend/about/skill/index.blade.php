@extends('layouts.backendapp')
@section('title', 'skill info |')
@section('content')
    <section>
        <div class="container">
            <div class='row'>
                <div class="card-body">
                    <form action="{{ route('backend.skill.store') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2>Make</h2>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="skill" placeholder="Skill Name">
                                <label for="floatingTitle">Skill Name</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="skill_p" placeholder="Skill Percentage">
                                <label for="floatingTitle">Skill Percentage</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>

                <h2>All skill info</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Skill Name</th>
                            <th scope="col">Skill Percentage</th>
                            <th scope="col">status</i></th>
                            <th scope="col">Action</i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($skill as $data)
                            <tr class="even pointer">
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->skill }}</td>
                                <td>{{ $data->skill_p }}</td>
                                <td>{{ $data->status == 1 ? 'Active' : 'Deactive' }}</td>
                                <td class="last">
                                    <form class='d-inline'
                                        action="{{ route('backend.skill.destroy', $data->id) }}"
                                        method='POST'>
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger btn-sm">Delete </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
