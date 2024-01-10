@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>Progetti edit</h1>
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->content }}</p>
        <div class="mb-3">
            <label for="type_id" class="form-label" >Type</label>
            <select class="form-select" name="type_id" id="type_id">
                <option value="">Select a type</option>
                @foreach ($type as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Back</a>
       
        <a href="{{ route('admin.projects.index', $project) }}" class="btn btn-primary">Save</a>


    </div>
</section>

@endsection