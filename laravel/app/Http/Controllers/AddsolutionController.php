<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Addsolution;
use Illuminate\Http\Request;

class AddsolutionController extends Controller
{
    public function addsolution()
    {
        $solutionsdata = Addsolution::all();
        return view('Admin.solutions', compact('solutionsdata'));
    }

    public function store(Request $request)
    {
        // تحميل الـ title والـ body
        $Title = $request->input('Title');
        $description = $request->input('description');

        // تحميل الـ logo إن وجدت
        $logoPath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/solutions_image'), $imageName);
            $imagePath = 'assets/solutions_image/' . $imageName;
        }



        // إنشاء بوست جديد وربطه بالبائع الحالي
        $solution = new Addsolution();
        $solution->Title = $Title;
        $solution->description = $description;
        $solution->image = $imagePath;

        $solution->save();

        // إعادة التوجيه أو عرض رسالة نجاح
        return redirect()->route('addsolution');
    }

    public function edit($id)
    {
        $solutionsdata = Addsolution::findorFail($id);

        return view('Admin.EditSolutions', compact('solutionsdata'));
    }

    public function update(Request $request, $id)
    {
        // Find the existing project by its ID
        $solutionsdata = Addsolution::findOrFail($id);

        // Validate the incoming request
        $validatedData = $request->validate([
            'Title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update the text fields
        $solutionsdata->Title = $request->input('Title');
        $solutionsdata->description = $request->input('description');

        // Update the Thumbnail if a new one is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/solutions_image'), $imageName);
            $solutionsdata->image = 'assets/solutions_image/' . $imageName;
        }


        // Save the updated project
        $solutionsdata->save();

        // Redirect or show a success message
        return redirect()->route('addsolution');
    }
}
