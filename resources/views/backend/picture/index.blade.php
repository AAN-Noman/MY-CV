@extends('layouts.backendapp')
@section('title', 'Picture |')
@section('content')
    <section>
        <div class="container">
            <div class='row'>
                <div class="card-body">
                    <form action="{{ route('backend.picture.store') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2>Make</h2>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" placeholder="Pic Name">
                                <label for="floatingTitle">Pic Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="app"  placeholder="app card web">
                                <label for="floatingTitle">app card web</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type='file' class="form-control" name="photo" placeholder="Picture">
                                <label for="floatingPhoto">Picture</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>

                <h2>Picture</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Pic Name</th>
                            <th scope="col">App</th>
                            <th scope="col">Picture</th>
                            <th scope="col">status</i></th>
                            <th scope="col">Action</i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($picture as $data)
                            <tr class="even pointer">
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->app }}</td>
                                <td>
                                    <img width="100" src="{{ asset('storage/picture/' . $data->photo) }}"
                                        alt="">
                                </td>
                                <td>{{ $data->status == 1 ? 'Active' : 'Deactive' }}</td>
                                <td class="last">
                                    <form class='d-inline'
                                        action="{{ route('backend.picture.destroy', $data->id) }}"
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
