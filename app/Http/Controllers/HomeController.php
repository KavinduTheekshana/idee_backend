<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Gallery;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $categories = Categories::count();
        $projects = Projects::count();
        $galleries = Gallery::count();
        return view('backend.dashboard', ['users' => $users, 'categories' => $categories, 'projects' => $projects, 'galleries' => $galleries]);
    }

   
}
