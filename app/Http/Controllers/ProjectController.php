<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
            $projects = Project::all();
            return view('projects.index',compact('projects'));
    }

    public function create()
    {
            return view('projects.create');
    }

    public function show($id)
    {
            return view('projects.create');
    }

    public function store(Request $request)
    {
        Project::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $projects = Project::all();
        return view('projects.index',compact('projects'));
    }
}
