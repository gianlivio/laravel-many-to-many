@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crea Progetto</h1>
        @include('admin.projects.form', ['project' => new \App\Models\Project])
    </div>
@endsection