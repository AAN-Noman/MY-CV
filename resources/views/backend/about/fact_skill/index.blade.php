@extends('layouts.backendapp')
@section('title', 'Facts and skill description |')
@section('content')
    <section>
        <div class="container">
            <div class='row'>
                <div class="col-md-12 col-sm-12">
                    <h2>All facts Skills info <a href="{{ route('backend.fact_skill.create') }}" class="btn btn-primary btn-sm">Make</a>
                    </h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fact</th>
                                <th scope="col">Fact2</th>
                                <th scope="col">Fact3</th>
                                <th scope="col">Fact4</th>
                                <th scope="col">Description</th>
                                <th scope="col">status</i></th>
                                <th scope="col">Action</i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                                <tr class="even pointer">
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->fact }}</td>
                                    <td>{{ $data->fact2 }}</td>
                                    <td>{{ $data->fact3 }}</td>
                                    <td>{{ $data->fact4 }}</td>
                                    <td>{{ Str::limit($data->description, 25, '...') }}</td>
                                    <td>{{ Str::limit($data->description2, 25, '...') }}</td>
                                    <td>{{ $data->status == 1 ? 'Active' : 'Deactive' }}</td>
                                    <td class="last">
                                        <a href="#"
                                            class="btn btn-{{ $data->status == 1 ? 'warning' : 'success' }} btn-sm">
                                            {{ $data->status == 1 ? 'Deactive' : 'Active' }}
                                        </a>
                                        <a href="{{ route('backend.fact_skill.edit', $data->id) }}"
                                            class="btn btn-primary btn-sm">View/Edit</a>
                                        <form class='d-inline' action="{{ route('backend.fact_skill.destroy', $data->id) }}"
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
