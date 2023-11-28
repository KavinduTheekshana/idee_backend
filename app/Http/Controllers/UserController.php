<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Projects;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProjectsByCategory(Request $request)
    {
        $categoryId = $request->category_id;
        $projects = Projects::with('category')
            ->where('category_id', $categoryId)
            ->get();

        // Optionally, fetch the category name separately if needed
        $categoryName = Categories::where('id', $categoryId)->first()->name ?? 'Unknown';

        return response()->json([
            'projects' => $projects,
            'categoryName' => $categoryName
        ]);
    }

    public function show($slug)
    {
        $project = Projects::with(['category', 'galleries'])->where('slug', $slug)->firstOrFail();

        $categoryName = $project->category ? $project->category->name : 'Unknown';
        $images = $project->galleries->where('status', 1);

        // Fetch other projects in the same category, excluding the current project
        $otherProjects = Projects::where('category_id', $project->category_id)
            ->where('id', '!=', $project->id)
            ->get();

        return view('frontend.singleproject', compact('project', 'categoryName', 'images', 'otherProjects'));
    }
}
