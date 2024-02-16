@extends('layouts.admin.app')

@section('content')
    <main class="container-fluid bg-dark">
        <section class="col-10 offset-1 p-3">
            <h1 class="text-warning text-center">All projects</h1>
        </section>
        <section class="bg-dark d-flex flex-wrap justify-content-around">
            @forelse ($projects as $project)
                <div class="card m-2" style="width: 15rem;">
                    <div class="card" style="width: 15rem;">
                        {{-- <img src="{{ $project->image }}" class="card-img-top" alt=""> --}}
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $project['title'] }}</strong></h5>
                            <p class="card-text">{{ $project['description'] }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Length: {{ $project['length'] }}</li>
                            <li class="list-group-item">Duration: {{ $project['duration'] }}</li>
                            <li class="list-group-item">Color: {{ $project['color'] }}</li>
                        </ul>
                        <div class="card-body d-flex justify-content-between">
                            <a href="{{ route('admin.data.show', $project) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('admin.data.edit', $project) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.data.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center">
                    <h1>
                        <strong>There are no projects to show.</strong>
                    </h1>
                </div>
            @endforelse
        </section>
    </main>
@endsection
