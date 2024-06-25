
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica Progetto</h1>
        @include('admin.projects.form', ['project' => $project, 'types' => $types])
    </div>
@endsection