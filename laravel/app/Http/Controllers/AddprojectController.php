<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addproject;
use Illuminate\Http\Request;

class AddprojectController extends Controller
{
    public function addproject()
    {
        $projects = Addproject::all();
        return view('Admin.AddProject', compact('projects'));
    }

    public function store(Request $request)
    {
        // Retrieve input fields
        $title = $request->input('title');
        $body = $request->input('Body');
        $client_name = $request->input('client_name');
        $project_summary = $request->input('project_summary');
        $client_url = $request->input('client_url');
        $date_of_creation = $request->input('date_of_creation');
        $project_url = $request->input('project_url');

        // Handle thumbnail upload
        $thumbnailPath = null;
        if ($request->hasFile('Thumbnail')) {
            $thumbnail = $request->file('Thumbnail');
            $thumbnailName = time() . '_thumbnail.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/assets/post_image'), $thumbnailName);
            $thumbnailPath = 'assets/post_image/' . $thumbnailName;
        }

        // Handle client logo upload (fixing the file name mismatch)
        $client_logoPath = null;
        if ($request->hasFile('client_logo')) {
            $client_logo = $request->file('client_logo'); // Consistent with form input name
            $client_logoName = time() . '_client_logo.' . $client_logo->getClientOriginalExtension();
            $client_logo->move(public_path('/assets/client_logo'), $client_logoName);
            $client_logoPath = 'assets/client_logo/' . $client_logoName;
        }

        // Handle additional image uploads
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

        // Create new project
        $post = new Addproject();
        $post->title = $title;
        $post->body = $body;
        $post->client_name = $client_name;
        $post->project_summary = $project_summary;
        $post->client_url = $client_url;
        $post->project_url = $project_url;
        $post->date_of_creation = $date_of_creation;
        $post->client_logo = $client_logoPath; // Corrected client logo path
        $post->Thumbnail = $thumbnailPath;
        $post->image1 = $imagePaths['image1'] ?? null;
        $post->image2 = $imagePaths['image2'] ?? null;
        $post->image3 = $imagePaths['image3'] ?? null;
        $post->image4 = $imagePaths['image4'] ?? null;
        $post->save();

        // Redirect to addProject route
        return redirect()->route('addProject');
    }


    public function edit($id)
    {
        $project = Addproject::findorFail($id);

        return view('Admin.EditProject', compact('project'));
    }

    public function update(Request $request, $id)
    {
        // Find the existing project by its ID
        $project = Addproject::findOrFail($id);


        // Update the text fields
        $project->title = $request->input('title');
        $project->Body = $request->input('Body');
        $project->client_name = $request->input('client_name');
        $project->project_summary = $request->input('project_summary');
        $project->project_url = $request->input('project_url');
        $project->date_of_creation = $request->input('date_of_creation');
        $project->client_url = $request->input('client_url');

        // Update the Thumbnail if a new one is uploaded
        if ($request->hasFile('Thumbnail')) {
            $thumbnail = $request->file('Thumbnail');
            $thumbnailName = time() . '_thumbnail.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/assets/post_image'), $thumbnailName);
            $project->Thumbnail = 'assets/post_image/' . $thumbnailName;
        }

        // Update the Thumbnail if a new one is uploaded
        if ($request->hasFile('client_logo')) {
            $client_logo = $request->file('client_logo');
            $client_logoName = time() . '_client_logo.' . $client_logo->getClientOriginalExtension();
            $client_logo->move(public_path('/assets/client_logo'), $client_logoName);
            $project->client_logo = 'assets/client_logo/' . $client_logoName;
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


    public function destroy($id)
    {
        Addproject::find($id)->delete();
        return redirect()->route('addProject');
    }
}
