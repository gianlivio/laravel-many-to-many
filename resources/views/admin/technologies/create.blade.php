@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Add Technology</h1>
        <a href="{{ route('admin.technologies.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
    <form action="{{ route('admin.technologies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Technology Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add Technology</button>
    </form>
</div>
@endsection
