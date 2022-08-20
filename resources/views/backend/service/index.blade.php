@extends('layouts.backendapp')
@section('title', 'Service info |')
@section('content')
    <section>
        <div class="container">
            <div class='row'>
                <div class="card-body">
                    <form action="{{ route('backend.service.store') }}" class="row g-3" method="POST">
                        @csrf
                        <h2>Make</h2>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="icon" placeholder="briefcase checklist chart binoculars brightness-high calendar4-week">
                                <label for="floatingTitle">briefcase checklist chart binoculars brightness-high calendar4-week</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="title"  placeholder="Title">
                                <label for="floatingTitle">Title</label>
                            </div>
                        </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name='description'></textarea>
                            <label for="floatingDescription">Description</label>
                        </div>
                    </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>

                <h2>Services</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">status</i></th>
                            <th scope="col">Action</i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($service as $data)
                            <tr class="even pointer">
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->icon }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ Str::limit($data->description, 25, '...') }}</td>
                                <td>{{ $data->status == 1 ? 'Active' : 'Deactive' }}</td>
                                <td class="last">
                                    <form class='d-inline'
                                        action="{{ route('backend.service.destroy', $data->id) }}"
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
