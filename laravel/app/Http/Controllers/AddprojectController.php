<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addproject;
use Illuminate\Http\Request;

class AddprojectController extends Controller
{
    public function addproject() {
        $projects = Addproject::all();
        return view('Admin.AddProject'  , compact('projects'));
    }

    public function store(Request $request)
    {    
        // تحميل الـ title والـ body
        $title = $request->input('title');
        $body = $request->input('Body');
    
        // تحميل الـ Thumbnail إن وجدت
        $thumbnailPath = null;
        if ($request->hasFile('Thumbnail')) {
            $thumbnail = $request->file('Thumbnail');
            $thumbnailName = time() . '_thumbnail.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/assets/post_image'), $thumbnailName);
            $thumbnailPath = 'assets/post_image/' . $thumbnailName;
        }
    
        // تحميل الصور إن وجدت
        $imagePaths = [];
        for ($i = 1; $i <= 4; $i++) {
            $imageInput = 'image' . $i;
            if ($request->hasFile($imageInput)) {
                $image = $request->file($imageInput);
                $imageName = time() . '_image' . $i . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/assets/post_image'), $imageName);
                $imagePaths[$imageInput] = 'assets/post_image/' . $imageName;
            }
        }
    
        // إنشاء بوست جديد وربطه بالبائع الحالي
        $post = new Addproject();
        $post->title = $title;
        $post->body = $body;
        $post->Thumbnail = $thumbnailPath;
        $post->image1 = $imagePaths['image1'] ?? null;
        $post->image2 = $imagePaths['image2'] ?? null;
        $post->image3 = $imagePaths['image3'] ?? null;
        $post->image4 = $imagePaths['image4'] ?? null;
        $post->save();
    
        // إعادة التوجيه أو عرض رسالة نجاح
        return redirect()->route('addProject');
    }

    public function edit($id){
        $project = Addproject::findorFail($id);

        return view('Admin.EditProject' , compact('project'));
        
    }

    public function update(Request $request, $id)
{
    // Find the existing project by its ID
    $project = Addproject::findOrFail($id);

    // Validate the incoming request
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'Body' => 'required',
        'Thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Update the text fields
    $project->title = $request->input('title');
    $project->Body = $request->input('Body');

    // Update the Thumbnail if a new one is uploaded
    if ($request->hasFile('Thumbnail')) {
        $thumbnail = $request->file('Thumbnail');
        $thumbnailName = time() . '_thumbnail.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path('/assets/post_image'), $thumbnailName);
        $project->Thumbnail = 'assets/post_image/' . $thumbnailName;
    }

    // Update images if new ones are uploaded
    for ($i = 1; $i <= 4; $i++) {
        $imageInput = 'image' . $i;
        if ($request->hasFile($imageInput)) {
            $image = $request->file($imageInput);
            $imageName = time() . '_image' . $i . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/post_image'), $imageName);
            $project->$imageInput = 'assets/post_image/' . $imageName;
        }
    }

    // Save the updated project
    $project->save();

    // Redirect or show a success message
    return redirect()->route('addProject');
}


    public function destroy($id) {
        Addproject::find($id)->delete();
        return redirect()->route('addProject');
    }
}
