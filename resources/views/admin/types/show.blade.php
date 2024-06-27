@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $type->name }}</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $type->name }}</p>
            <p><strong>Description:</strong> {{ $type->description }}</p>
        </div>
    </div>
    <a href="{{ route('admin.types.index') }}" class="btn btn-secondary mt-3">Indietro</a>
</div>
@endsection
