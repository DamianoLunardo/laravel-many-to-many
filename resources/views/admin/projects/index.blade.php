@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>Progetti index</h1>
    </div>
</section>
<section>
    <div class="container">
        <table class="table striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Project</th>
                    <th>Technologies</th>
                    <th>Action</th>
                    <th> <a><a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a>

                    </td>
                    <td>{{ $project->content }}</td>
                    <td>{{ isset($project->type) ? $project->type->name : '---' }}</td>
                    <td>{{ $project->technologies }}</td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</section>

@endsection
