<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Type;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        return view('admin.projects.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        // dd($request);

        $request->validated();
        
        $newProject = new Project();

        $newProject->fill($request->all());

        if($request->hasFile('thumb')) {
            // salvo il percorso dell'immagine in una variabile e contemporaneamente salviamo l'immagine nel server
            $path = Storage::disk('public')->put('project_images', $request->thumb);
            // salvo il percorso che ho ottenuto dal salvataggio dell'immagine (laravel per privacy e sicurezza
            // cambia il nome del file dando un nome randomico)
            $newProject->thumb = $path;
        }

        $newProject->save();

        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();

        return view('admin.projects.edit', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        $request->validated();

        if($request->hasFile('thumb')) {
            // salvo il percorso dell'immagine in una variabile e contemporaneamente salviamo l'immagine nel server
            $path = Storage::disk('public')->put('project_images', $request->thumb);
            // salvo il percorso che ho ottenuto dal salvataggio dell'immagine (laravel per privacy e sicurezza
            // cambia il nome del file dando un nome randomico)
            $project->thumb = $path;
        }

        $project->update($request->all());

        $project->save();

        return redirect()->route('admin.projects.index', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
