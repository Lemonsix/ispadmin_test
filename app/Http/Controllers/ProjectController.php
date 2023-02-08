<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Support\Arr;
use Throwable;

class ProjectController extends Controller
{

    public function index()
    {
        return view('project.index',['projects'=>Project::all()]);
    }


    public function create()
    {
       return view('project.create');
    }


    public function store(StoreProjectRequest $request)
    {
        //redirect(route('projects.show',Project::create($request->toArray())));
        Project::create($request->toArray());
        return redirect(route('projects.index'));
    }


    public function show(Project $project)
    {
        //
    }


    public function edit(Project $project)
    {
        return view('project.edit',compact('project'));
    }


    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->toArray());
        return redirect(route('projects.index'));
    }


    public function destroy(Project $project)
    {
        try{
            $project->delete();
        } catch(Throwable $e){
            return redirect(route('projects.index'))->with('error', 'No se pudo eliminar el proyecto por dependencias');
        }
        return redirect(route('projects.index'))->with('success', 'El proyecto ha sido elmiminado correctamente');
    }
}
