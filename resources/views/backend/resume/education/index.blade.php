@extends('layouts.backendapp')
@section('title', 'Education info |')
@section('content')
    <section>
        <div class="container">
            <div class='row'>
                <div class="card-body">
                    <form action="{{ route('backend.education.store') }}" class="row g-3" method="POST">
                        @csrf
                        <h2>Make</h2>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="course" placeholder="Course">
                                <label for="floatingName">Course</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="year" placeholder="Year">
                                <label for="floatingName">Year</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="institude" placeholder="Institude Name">
                                <label for="floatingName">Institude Name</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" name='description'></textarea>
                                <label for="floatingName">Description</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>

                <h2>Education info</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Course</th>
                            <th scope="col">Year</th>
                            <th scope="col">Institude</th>
                            <th scope="col">Descriptio</th>
                            <th scope="col">status</i></th>
                            <th scope="col">Action</i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($education as $data)
                            <tr class="even pointer">
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->course }}</td>
                                <td>{{ $data->year }}</td>
                                <td>{{ $data->institude }}</td>
                                <td>{{ Str::limit($data->description, 25, "...") }}</td>
                                <td>{{ $data->status == 1 ? 'Active' : 'Deactive' }}</td>
                                <td class="last">
                                    <a href="{{ route('backend.education.edit', $data->id) }}"
                                        class="btn btn-primary btn-sm">View/Edit</a>
                                    <form class='d-inline'
                                        action="{{ route('backend.education.destroy', $data->id) }}"
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
