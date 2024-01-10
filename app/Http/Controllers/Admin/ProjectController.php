<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Type;


class ProjectController extends Controller
{
    

    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $type = Type::all();
        return view('admin.projects.create', compact('type'));
    }

    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required|max:255|string|unique:projects',
            'type_id' => 'required|nullable|exists:types,id',
            'content' => 'required|string|min:5',
            'technologies' => 'required',
        ]);
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $type = Type::all();
        return view('admin.projects.edit', compact('project', 'type'));
    }

    public function update(Request $request, Project $project)
    {
        
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
