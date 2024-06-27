@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Projects</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add Project</a>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('admin.projects.index') }}" method="GET">
                <div class="row">
                    <div class="col-md-4">
                        <select name="type_id" class="form-control">
                            <option value="">Select Type</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" {{ request('type_id') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="technology_id" class="form-control">
                            <option value="">Select Technology</option>
                            @foreach($technologies as $technology)
                                <option value="{{ $technology->id }}" {{ request('technology_id') == $technology->id ? 'selected' : '' }}>{{ $technology->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Technologies</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projectsArray as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->type->name ?? 'N/A' }}</td>
                        <td>
                            @foreach ($project->technologies as $technology)
                                {{ $technology->name }}@if (!$loop->last), @endif
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
