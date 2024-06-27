@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Type</h1>
    <form action="{{ route('admin.types.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('admin.types.index') }}" class="btn btn-secondary">Indietro</a>
    </form>
</div>
@endsection
