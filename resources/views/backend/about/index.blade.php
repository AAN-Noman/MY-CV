@extends('layouts.backendapp')
@section('title', 'About |')
@section('content')
    <section>
        <div class="container">
            <div class='row'>
                <div class="col-md-12 col-sm-12">
                    <h2>All about info <a href="{{ route('backend.about.create') }}" class="btn btn-primary btn-sm">Make</a>
                    </h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Age</th>
                                <th scope="col">Website</th>
                                <th scope="col">Degree</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</i></th>
                                <th scope="col">OldCity</i></th>
                                <th scope="col">City</i></th>
                                <th scope="col">Freelance</i></th>
                                <th scope="col">Description</th>
                                <th scope="col">Description2</th>
                                <th scope="col">Description3</th>
                                <th scope="col">status</i></th>
                                <th scope="col">Action</i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($abouts as $data)
                                <tr class="even pointer">
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->Birthday }}</td>
                                    <td>{{ $data->Age }}</td>
                                    <td>{{ $data->Website }}</td>
                                    <td>{{ $data->Degree }}</td>
                                    <td>{{ $data->Phone }}</td>
                                    <td>{{ $data->Email }}</td>
                                    <td>{{ $data->OldCity }}</td>
                                    <td>{{ $data->City }}</td>
                                    <td>{{ $data->Freelance }}</td>
                                    <td>{{ Str::limit($data->description, 10, '...') }}</td>
                                    <td>{{ Str::limit($data->description2, 10, '...') }}</td>
                                    <td>{{ Str::limit($data->description3, 10, '...') }}</td>
                                    <td>{{ $data->status == 1 ? 'Active' : 'Deactive' }}</td>
                                    <td class="last">
                                        <a href="#"
                                            class="btn btn-{{ $data->status == 1 ? 'warning' : 'success' }} btn-sm">
                                            {{ $data->status == 1 ? 'Deactive' : 'Active' }}
                                        </a>
                                        <a href="{{ route('backend.about.edit', $data->id) }}"
                                            class="btn btn-primary btn-sm">View/Edit</a>
                                        <form class='d-inline' action="{{ route('backend.about.destroy', $data->id) }}"
                                            method='POST'>
                                            @csrf
                                            @method('DELETE')
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
        </div>
    </section>
@endsection
