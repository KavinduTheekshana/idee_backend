<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function save(Request $request)
    {
        $this->validate($request, [
            'id' => ['required'],
            'image' => ['image'],
        ]);

        $gallery = new Gallery();
        $gallery->project_id = $request->input('id');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $galleryPath = 'uploads/gallery/'; // upload path
            $gallery_image = 'uploads/gallery/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($galleryPath, $gallery_image);
            $gallery->image = "$gallery_image";
        } else {
            $gallery->image = 'uploads/projects/default.png';
        }
        $gallery->save();
        return redirect()->back()->with('status', 'New Image Added Sucessfully');
    }

    public function active($id)
    {
        $project = Gallery::find($id);
        $project->status = '1';
        $project->save();
        return redirect()->back()->with('status', 'Gallery Activated Sucessfully');
    }
    public function diactive($id)
    {
        $project = Gallery::find($id);
        $project->status = '0';
        $project->save();
        return redirect()->back()->with('status', 'Gallery Diactivated Sucessfully');
    }
    public function delete($id)
    {
        $project = Gallery::find($id);
        $project->delete();
        return redirect()->back()->with('status', 'Gallery Delete Sucessfully');
    }

}
