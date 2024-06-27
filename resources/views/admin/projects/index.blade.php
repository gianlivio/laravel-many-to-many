@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">

            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add Project</a>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projectsArray as $project)
                            <tr>
                                <td>{{ $project->name }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project->id) }}"
                                        class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('admin.projects.edit', $project->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
                                        class="d-inline">
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
