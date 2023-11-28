<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectssController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('idee', function () {
    return view('frontend.idee');
})->name('idee');

Route::get('about', function () {
    return view('frontend.about');
})->name('about');

Route::get('people', function () {
    return view('frontend.people');
})->name('people');

Route::get('project', function () {
    return view('frontend.projects');
})->name('project');

Route::get('contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('consultants', function () {
    return view('frontend.consultants');
})->name('consultants');

// web.php

Route::get('/project/{slug}', [UserController::class, 'show'])->name('project.show');
Route::get('/get-projects', [UserController::class, 'getProjectsByCategory']);
// Route::get('/project/{param}', [UserController::class, 'index']])->name('project');


// Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('/projects/add', [ProjectsController::class, 'index'])->name('projects.add');
Route::get('/projects/list', [ProjectsController::class, 'list'])->name('projects.list');
Route::post('/projects/save', [ProjectsController::class, 'save'])->name('projects.save');
Route::get('/project-gallery/{id}', [projectsController::class, 'gallery'])->name('project.gallery');
Route::get('/project-active/{id}', [projectsController::class, 'active'])->name('project.active');
Route::get('/project-diactive/{id}', [projectsController::class, 'diactive'])->name('project.diactive');
Route::get('/project-delete/{id}', [projectsController::class, 'delete'])->name('project.delete');
Route::post('/project-update', [projectsController::class, 'update'])->name('project.update');
Route::get('/project-update-view/{id}', [projectsController::class, 'update_view'])->name('project.update_view');

Route::post('/gallery/save', [GalleryController::class, 'save'])->name('gallery.save');
Route::get('/gallery-active/{id}', [GalleryController::class, 'active'])->name('gallery.active');
Route::get('/gallery-diactive/{id}', [GalleryController::class, 'diactive'])->name('gallery.diactive');
Route::get('/gallery-delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');




