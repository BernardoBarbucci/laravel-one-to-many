@extends('layouts.admin.app')

@section('content')
    <main class="container-fluid bg-dark">
        <section class="col-10 offset-1 p-3">
            <h1 class="text-warning text-center">Create New Project</h1>
        </section>
        <section class="bg-dark d-flex flex-wrap justify-content-around">
            <div class="card m-2" style="width: 30rem;">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <form action="{{ route('admin.data.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="mb-1"><strong>Title:</strong></label>
                                <input type="text" class="form-control mb-3" id="title" name="title"
                                    value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="description" class="mb-1"><strong>Description:</strong></label>
                                <textarea class="form-control mb-3" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="length" class="mb-1"><strong>Length:</strong></label>
                                <input type="text" class="form-control mb-3" id="length" name="length"
                                    value="{{ old('length') }}">
                            </div>
                            <div class="form-group">
                                <label for="duration" class="mb-1"><strong>Duration:</strong></label>
                                <input type="text" class="form-control mb-3" id="duration" name="duration"
                                    value="{{ old('duration') }}">
                            </div>
                            <div class="form-group">
                                <label for="color" class="mb-1"><strong>Color:</strong></label>
                                <input type="text" class="form-control mb-3" id="color" name="color"
                                    value="{{ old('color') }}">
                            </div>
                            <div class="form-group">
                                <label for="image" class="mb-1"><strong>Image:</strong></label>
                                <input type="file" class="form-control mb-3" id="image" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Create Project</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
