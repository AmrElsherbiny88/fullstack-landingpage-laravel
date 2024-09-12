<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addfeatures;
use Illuminate\Http\Request;

class AddfeaturesController extends Controller
{
    public function addfeature() {
        $featuresdata = Addfeatures::all();
        return view('Admin.features'  , compact('featuresdata'));
    }

    public function store(Request $request)
    {    
        // تحميل الـ title والـ body
       
        $description= $request->input('description');
    
        // تحميل الـ logo إن وجدت
        $iconPath = null;
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = time() . '_icon.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('/assets/features_image'), $iconName);
            $iconPath = 'assets/features_image/' . $iconName;
        }
    
       
    
        // إنشاء بوست جديد وربطه بالبائع الحالي
        $feature = new Addfeatures();
      
        $feature->description = $description;
        $feature->icon = $icon;

        $feature->save();
    
        // إعادة التوجيه أو عرض رسالة نجاح
        return redirect()->route('addfeature');
    }

    public function edit($id){
        $featuresdata = Addfeatures::findorFail($id);

        return view('Admin.EditFeatures' , compact('featuresdata'));
        
    }

    public function update(Request $request, $id)
{
    // Find the existing project by its ID
    $featuresdata = Addfeatures::findOrFail($id);

    // Validate the incoming request
    $validatedData = $request->validate([
        'description' => 'required',
        'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Update the text fields
  
    $featuresdata->description = $request->input('description');

    // Update the Thumbnail if a new one is uploaded
    if ($request->hasFile('icon')) {
        $icon = $request->file('icon');
        $iconName = time() . '_icon.' . $icon->getClientOriginalExtension();
        $icon->move(public_path('/assets/features_image'), $iconName);
        $featuresdata->icon = 'assets/features_image/' . $iconName;
    }

  
    // Save the updated project
    $featuresdata->save();

    // Redirect or show a success message
    return redirect()->route('addfeature');
}

}
