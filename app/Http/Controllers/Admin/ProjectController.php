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
        $tech = Type::all();
        return view('admin.projects.create', compact('type', 'tech'));
    }

    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required|max:255|string|unique:projects',
            'type_id' => 'required|nullable|exists:types,id',
            'content' => 'required|string|min:5',
            'technologies' => 'required',
            'tech' => 'exists:types,id'
        ]);

        $data = $request->all();

        $project = Project::create($data);

        if ($request->has('tech')) {
            $project->tech()->attach($request['tech']);
        }

        return redirect()->route('admin.projects.show', $project);
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $type = Type::all();
        $tech = Type::all();

        return view('admin.projects.edit', compact('project', 'type', 'tech'));
    }

    public function update(Request $request, Project $project)
    {
        $request -> validate([
            'title' => 'required|max:255|string|unique:projects',
            'type_id' => 'required|nullable|exists:types,id',
            'content' => 'required|string|min:5',
            'technologies' => 'required',
            'tech' => 'exists:types,id'
        ]);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
