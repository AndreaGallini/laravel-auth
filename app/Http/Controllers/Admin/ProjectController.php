<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
         return view('admin.project.create' ,compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {

        $data = $request->validated();
        $slug = Project::createSlug($request->nome_progetto);
        $data['slug'] = $slug;
                if($request->hasFile('img')){
            $path = Storage::disk('public')->put('project_images', $request->img);
            $data['img'] = $path;
        }
        $new_project = Project::create($data);
      //  return redirect()->route('adminprojects.index');
        return redirect()->route('adminprojects.show', $new_project->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
         return view('admin.project.edit' , compact('project','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $slug = Project::createSlug($request->nome_progetto);
        $data['slug'] = $slug;
        if ($request->hasFile('img')) {
            if ($project->img) {
                Storage::delete($project->img);
            }
        }
            $path = Storage::disk('public')->put('project_images', $request->img);
            $data['img'] = $path;

        $project->update($data);
        return redirect()->route('adminprojects.index')->with('message', "$project->nome_progetto aggiornato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('adminprojects.index')->with('message', "$project->nome_progetto cancellato");
    }
}
