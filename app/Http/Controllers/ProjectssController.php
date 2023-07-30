<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectssController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('backend.pages.projects.add_projects',['categories' => $categories]);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'land' => ['required', 'string', 'max:255'],
            'floor' => ['required', 'string', 'max:255'],
            'project_year' => ['required'],
            'completed_year' => ['required'],
            'image' => ['image'],
            'description' => ['required'],
        ]);

        $project = new Projects();
        $project->title = $request->input('title');
        $project->slug = $request->input('slug');
        $project->category_id = $request->input('category_id');
        $project->location = $request->input('location');
        $project->land = $request->input('land');
        $project->floor = $request->input('floor');
        $project->project_year = $request->input('project_year');
        $project->completed_year = $request->input('completed_year');
        $project->image = $request->input('image');
        $project->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $projectPath = 'uploads/projects/'; // upload path
            $project_image = 'uploads/projects/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($projectPath, $project_image);
            $project->image = "$project_image";
        } else {
            $project->image = 'uploads/projects/default.png';
        }
        $project->save();
        return redirect('projects.list')->with('status', 'New Project Added Sucessfully');
    }
}
