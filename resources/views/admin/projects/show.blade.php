@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="d-flex justify-content-between mb-3">
                    <h1>{{ $project->name }}</h1>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Project Details') }}</div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $project->name }}</p>
                        <p><strong>Description:</strong> {{ $project->description }}</p>
                        <p><strong>Tipologia:</strong> {{ $project->type ? $project->type->name : 'Nessuna' }}</p>
                        <p><strong>Slug:</strong> {{ $project->slug }}</p>

                        @if($project->technologies->isNotEmpty())
                            <p><strong>Technologies Used:</strong></p>
                            <ul>
                                @foreach($project->technologies as $technology)
                                    <li>{{ $technology->name }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p><strong>Technologies Used:</strong> None</p>
                        @endif
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Modifica</a>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection