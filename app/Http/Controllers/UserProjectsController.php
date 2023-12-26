<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Projects;
use Illuminate\Http\Request;

class UserProjectsController extends Controller
{
    public function projects_list($id)
    {
        $projects = Projects::where('category_id', $id)->get();
        $category = Categories::where('id', $id)->first();
        $project_name = $category->name." Projects";
        return view('frontend.projectslist', ['projects' => $projects,'project_name' => $project_name]);
    }
}
