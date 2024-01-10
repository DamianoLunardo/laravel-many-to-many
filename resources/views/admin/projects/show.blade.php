@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>{{ $project->title }}</h1>
         @if ($project->type)
        <p>Project Type: {{ $project->type->name }}</p>
        @endif
        <p>{{ $project->content }}</p>

       

        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        

    </div>
</section>

@endsection