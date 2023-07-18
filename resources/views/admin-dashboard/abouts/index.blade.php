@extends('admin-dashboard.master')

@section('content')

{{-- @if (session('flashMessage'))
<div class="alert alert-success">{{ session('flashMessage') }}</div>
@endif --}}
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Team</h3>


                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">

                        <a href="{{ route('admin.teams.create') }}" class="btn btn-info" role="button">Create Team</a>
                        <div class="input-group-append">

                        </div>
                    </div>
                </div>
            </div>
                {{-- @dd(session('flashmessage')) --}}
                @if (session('flashMessage'))
                <div class="alert alert-success">{{ session('flashMessage') }}</div>
                @endif
            {{-- @dd( App::getLocale()) --}}
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Job_title</th>
                            <th>Image</th>
                            <th>Facebook</th>
                            <th>twitter</th>
                            <th>instagram</th>
                            <th>Action</th>
                            <th>status</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>

                                <td>{{ $team->id }}</td>
                                <td>{{ $team->name_en }}</td>
                                <td>{{ $team->job_title }}</td>
                                <td><img width="100px" src="{{ asset('storage/' . $team->image) }}" alt="image"></td>
                                <td>
                                    <a href="{{ $team->facebook_link }}"> <i class="fab fa-facebook-f"></i></a>
                                </td>

                                <td>
                                    <a href="{{ $team->twitter_link }}"> <i class="fab fa-twitter"></i></a>
                                </td>

                                <td>
                                    <a href="{{ $team->instagram_link }}"> <i class="fab fa-instagram"></i></a>
                                </td>



                                <td style="display: flex; justify-content:space-evenly"><a href="{{ route('admin.teams.edit', $team->id) }} " class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit "></a></i>


                                    <form action="{{ route('admin.teams.destroy', $team->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>
                                <td>{{ $team->status ? 'active' : 'inactive' }}</td>
                                </form>
                            </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
