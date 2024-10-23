<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Herosection;
use Illuminate\Http\Request;

class HerosectionController extends Controller
{
    public function addhero()
    {
        $Herodata = Herosection::all();
        return view('Admin.HeroSection', compact('Herodata'));
    }

    public function store(Request $request)
    {
        // تحميل الـ title والـ body
        $Textxl    = $request->input('Textxl');
        $Textsm = $request->input('Textsm');


        // تحميل الـ logo إن وجدت
        $ImagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/hero_image'), $imageName);
            $imagePath = 'assets/hero_image/' . $imageName;
        }



        // إنشاء بوست جديد وربطه بالبائع الحالي
        $solution = new Herosection();
        $solution->Textxl = $Textxl;
        $solution->Textsm = $Textsm;
        $solution->image = $imagePath;

        $solution->save();

        // إعادة التوجيه أو عرض رسالة نجاح
        return redirect()->route('addhero');
    }

    public function edit($id)
    {
        $Herodata = Herosection::findorFail($id);

        return view('Admin.EditHero', compact('Herodata'));
    }

    public function update(Request $request, $id)
    {
        // Find the existing project by its ID
        $Herodata = Herosection::findOrFail($id);

        // Validate the incoming request
        $validatedData = $request->validate([
            'Textxl' => 'required|max:255',
            'Textsm' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update the text fields
        $Herodata->Textxl = $request->input('Textxl');
        $Herodata->Textsm = $request->input('Textsm');

        // Update the Thumbnail if a new one is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/solutions_image'), $imageName);
            $Herodata->image = 'assets/solutions_image/' . $imageName;
        }


        // Save the updated project
        $Herodata->save();

        // Redirect or show a success message
        return redirect()->route('addhero');
    }
}
