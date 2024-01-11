@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>New Project</h1>
    </div>
</section>
<section>
    <div class="container">
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
         <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">   
        </form>
    <div class="mb-3">
        <label for="type_id" class="form-label" >Type</label>
        <select class="form-select" name="type_id" id="type_id">
            <option value="">Select a type</option>
            @foreach ($type as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label" >Content</label>
        <textarea class="form-control" name="content" id="content" rows="3">{{ old('content') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="technologies" class="form-label" >Technologies</label>
        <input type="text" class="form-control" name="technologies" id="technologies" value="{{ old('technologies') }}">
    </div>

    <div class="d-flex flex-wrap gap-4">
        @foreach ($tech as $tech)
    <div class="form-check">
        <input name="tech[]" class="form-check-input" type="checkbox" value="{{ $tech->id }}" id="tech-{{ $tech->id }}"  value="{{ $tech->id }}" checked>
        <label class="form-check-label" for="tech-{{ $tech->id }}" @checked(in_array($tech->id, old('tech', []))) >
          {{ $tech->name }}
        </label>
      </div>

        @endforeach
    </div>

    
    
    <button type="submit" class="btn btn-primary">Save</button>
    
    </form>
   
    

    
</section>

@endsection