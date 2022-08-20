@extends('layouts.backendapp')
@section('title', 'Sumary info |')
@section('content')
    <section>
        <div class="container">
            <div class='row'>
                <div class="card-body">
                    <form action="{{ route('backend.sumary.store') }}" class="row g-3" method="POST">
                        @csrf
                        <h2>Make</h2>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                                <label for="floatingName">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                                <label for="floatingName">Address</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="phone" placeholder="Phone">
                                <label for="floatingName">Phone</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                                <label for="floatingName">Email</label>
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

                <h2>Sumary info</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">status</i></th>
                            <th scope="col">Action</i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sumary as $data)
                            <tr class="even pointer">
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ Str::limit($data->description, 25, "...") }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->status == 1 ? 'Active' : 'Deactive' }}</td>
                                <td class="last">
                                    <a href="{{ route('backend.sumury.edit', $data->id) }}"
                                        class="btn btn-primary btn-sm">View/Edit</a>
                                    <form class='d-inline'
                                        action="{{ route('backend.sumary.destroy', $data->id) }}"
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
