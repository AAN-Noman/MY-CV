@extends('layouts.backendapp')
@section('title', 'Home |')
@section('content')
    <section>
        <div class="container">
            <div class='row'>
                <h2>All Home info  <a href="{{ route('backend.home.create') }}" class="btn btn-primary btn-sm">Make</a></h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Cover Pic</th>
                            <th scope="col">Profession</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Twitter</th>
                            <th scope="col">Github</th>
                            <th scope="col">Linkedin</i></th>
                            <th scope="col">status</i></th>
                            <th scope="col">Action</i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas as $data)
                            <tr class="even pointer">
                                <td>{{ $data->id }}</td>
                                <td>
                                    <img width="100" src="{{ asset('storage/home/profile/' . $data->photo) }}"
                                        alt="">
                                </td>
                                <td>
                                    <img width="100" src="{{ asset('storage/home/coverPic/' . $data->CoverPhoto) }}"
                                        alt="">
                                </td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->profession }}</td>
                                <td>{{ Str::limit($data->link, 10, '...') }}</td>
                                <td>{{ Str::limit($data->link2, 10, '...') }}</td>
                                <td>{{ Str::limit($data->link3, 10, '...') }}</td>
                                <td>{{ Str::limit($data->link4, 10, '...') }}</td>
                                <td>{{ Str::limit($data->link5, 10, '...') }}</td>
                                <td>{{ $data->status == 1 ? 'Active' : 'Deactive' }}</td>
                                <td class="last">
                                    <a href="#"
                                        class="btn btn-{{ $data->status == 1 ? 'warning' : 'success' }} btn-sm">
                                        {{ $data->status == 1 ? 'Deactive' : 'Active' }}
                                    </a>
                                    <a href="{{ route('backend.home.edit', $data->id) }}"
                                        class="btn btn-primary btn-sm">View/Edit</a>
                                    <form class='d-inline'
                                        action="{{ route('backend.home.destroy', $data->id) }}"
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
