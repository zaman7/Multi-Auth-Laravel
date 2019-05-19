@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in as <strong>Admin</strong>!<br>
                        <strong>Email :- </strong>{{Auth::user()->email}}<br><br>
                        <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                            @foreach(App\Admin::all() as $user)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{Carbon\Carbon::parse($user->created_at)->DiffForHumans()}}</td>
                                
                            </tr>
                            @endforeach()
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
