@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $technology->name }}</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $technology->name }}</p>
        </div>
    </div>
    <a href="{{ route('admin.technologies.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection