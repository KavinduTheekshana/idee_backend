<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Gallery;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('backend.pages.projects.add_projects', ['categories' => $categories]);
    }




    public function list()
    {
        $projects = Projects::with('category')->get();
        return view('backend.pages.projects.list_projects', ['projects' => $projects]);
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
        return redirect()->route('projects.list')->with('status', 'New Project Added Sucessfully');
    }
    public function update(Request $request)
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
        $project_id = $request->input('id');
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

        $single_project = Projects::find($project_id);
        $project_url = $single_project->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $projectPath = 'uploads/projects/'; // upload path
            $project_image = 'uploads/projects/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($projectPath, $project_image);
            $project->image = "$project_image";
        } else {
            $project->image = $project_url;
        }

        $data = array(
            'title' => $project->title,
            'slug' => $project->slug,
            'location' => $project->location,
            'category_id' => $project->category_id,
            'land' => $project->land,
            'floor' => $project->floor,
            'project_year' => $project->project_year,
            'completed_year' => $project->completed_year,
            'description' => $project->description,
            'image' => $project->image,
        );

        Projects::where('id', $project_id)->update($data);
        $project->update();
        return redirect()->route('projects.list')->with('status', 'Project Updated Sucessfully');
    }
    public function gallery($id)
    {
        $project = Projects::find($id);
        // $galleries = DB::table('galleries')->get();
        $galleries = Gallery::all();
        return view('backend.pages.projects.gallery', ['project' => $project, 'galleries' => $galleries]);
    }
    public function active($id)
    {
        $project = Projects::find($id);
        $project->status = '1';
        $project->save();
        return redirect()->back()->with('status', 'Project Activated Sucessfully');
    }
    public function diactive($id)
    {
        $project = Projects::find($id);
        $project->status = '0';
        $project->save();
        return redirect()->back()->with('status', 'Project Diactivated Sucessfully');
    }
    public function delete($id)
    {
        $project = Projects::find($id);
        $project->delete();
        return redirect()->back()->with('status', 'Project Delete Sucessfully');
    }
    public function update_view($id)
    {
        $project = Projects::find($id);
        $categories = DB::table('categories')->get();
        return view('backend.pages.projects.project_update', ['project' => $project, 'categories' => $categories]);
    }

}
