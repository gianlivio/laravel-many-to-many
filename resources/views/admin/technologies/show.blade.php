@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>{{ $technology->name }}</h1>
        <a href="{{ route('admin.technologies.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $technology->name }}</p>
        </div>
    </div>
</div>
@endsection
