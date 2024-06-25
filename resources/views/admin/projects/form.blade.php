<form class="border rounded p-3 my-4" action="{{ isset($project->id) ? route('admin.projects.update', $project->id) : route('admin.projects.store') }}" method="POST">
    @csrf
    @if(isset($project->id))
        @method('PUT')
    @endif

    <div class="row g-3">
        {{-- Name Input --}}
        <div class="col-12">
            <label for="name" class="form-label fw-bold">Project Name</label>
            <input type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{ old('name', $project->name ?? '') }}">
            @error('name')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Description Input --}}
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea
                class="form-control @error('description') is-invalid @enderror"
                id="description"
                name="description"
                rows="5"
                placeholder="Insert here a description...">{{ old('description', $project->description ?? '') }}</textarea>
            @error('description')
                <div id="description-empty-error" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Type Input --}}
        <div class="col-12">
            <label for="type_id" class="form-label">Tipologia</label>
            <select class="form-control @error('type_id') is-invalid @enderror" id="type_id" name="type_id">
                <option value="">Seleziona una tipologia</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ (old('type_id') ?? $project->type_id ?? '') == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
            @error('type_id')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Technology Input --}}
        <div class="col-12">
            <label for="technology_id" class="form-label">Technology</label>
            <select class="form-control @error('technology_id') is-invalid @enderror" id="technology_id" name="technology_id">
                <option value="">Seleziona una tecnologia</option>
                @foreach($technologies as $technology)
                    <option value="{{ $technology->id }}" {{ (old('technology_id') ?? $project->technology_id ?? '') == $technology->id ? 'selected' : '' }}>
                        {{ $technology->name }}
                    </option>
                @endforeach
            </select>
            @error('technology_id')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <hr class="my-4">

    {{-- Submit Button --}}
    <div class="col-4">
        <button class="w-100 btn btn-primary btn-lg mb-4" type="submit">
            {{ isset($project->id) ? 'Edit' : 'Create' }}
        </button>
    </div>
</form>