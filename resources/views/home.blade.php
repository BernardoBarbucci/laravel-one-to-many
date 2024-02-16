@extends('layouts.guest.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                    </div>
                </div>

                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-center">
                            @auth
                                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary"
                                    style="width: 15rem">Projects list</a>
                            @endauth
                        </li>
                        <li class="list-group-item d-flex justify-content-center">
                            @auth
                                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary"
                                    style="width: 15rem">Create</a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
