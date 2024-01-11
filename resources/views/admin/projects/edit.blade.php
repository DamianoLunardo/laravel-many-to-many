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

        <div class="d-flex flex-wrap gap-4">
            @foreach ($tech as $tech)
        <div class="form-check">
            <input name="tech[]" class="form-check-input" type="checkbox" value="{{ $tech->id }}" id="tech-{{ $tech->id }}"  value="{{ $tech->id }}" checked>
            {{-- <label class="form-check-label" for="tech-{{ $tech->id }}" @checked(in_array($tech->id, old('tech', $project->tech->pluck('id')->all()))) > --}}
              {{ $tech->name }}
            </label>
          </div>
    
            @endforeach
        </div>

        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Back</a>
       
        <a href="{{ route('admin.projects.index', $project) }}" class="btn btn-primary">Save</a>


    </div>
</section>

@endsection