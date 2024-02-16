@extends('layouts.admin.app')

@section('content')
    <main class="container-fluid bg-dark">
        <section class="col-10 offset-1 p-3">
            <h1 class="text-warning text-center">Edit Project</h1>
        </section>
        <section class="bg-dark d-flex flex-wrap justify-content-around">
            <div class="card m-2" style="width: 30rem;">
                <div class="card" style="width: 30rem;">
                    <img src="{{ $project->image }}" class="card-img-top" alt="img">
                    <div class="card-body">
                        <form action="{{ route('admin.data.update', $project) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title" class="mb-1"><strong>Title:</strong></label>
                                <input type="text" class="form-control mb-3" id="title" name="title"
                                    value="{{ $project->title }}">
                            </div>
                            <div class="form-group">
                                <label for="description" class="mb-1"><strong>Description:</strong></label>
                                <textarea class="form-control mb-3" id="description" name="description" rows="3">{{ $project->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="length" class="mb-1"><strong>Length:</strong></label>
                                <input type="text" class="form-control mb-3" id="length" name="length"
                                    value="{{ $project->length }}">
                            </div>
                            <div class="form-group">
                                <label for="duration" class="mb-1"><strong>Duration:</strong></label>
                                <input type="text" class="form-control mb-3" id="duration" name="duration"
                                    value="{{ $project->duration }}">
                            </div>
                            <div class="form-group">
                                <label for="color" class="mb-1"><strong>Color:</strong></label>
                                <input type="text" class="form-control mb-3" id="color" name="color"
                                    value="{{ $project->color }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
