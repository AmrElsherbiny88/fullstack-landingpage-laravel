<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\services;
use App\Models\settings;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function addservice() {
        $servicesdata = services::all();
        return view('Admin.services'  , compact('servicesdata'));
    }

    public function store(Request $request)
    {    
        $Title = $request->input('Title');
        $description= $request->input('description');
        $summary= $request->input('summary');
    
        
        $logoPath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/solutions_image'), $imageName);
            $imagePath = 'assets/solutions_image/' . $imageName;
        }
    
       
    
       
        $service = new services();
        $service->Title = $Title;
        $service->description = $description;
        $service->summary = $summary;
        $service->image = $imagePath;

        $service->save();
    
        
        return redirect()->route('addservice');
    }

    public function edit($id){
        $servicesdata = services::findorFail($id);

        return view('Admin.Editservices' , compact('servicesdata'));
        
    }

    public function update(Request $request, $id)
{

    $servicesdata = services::findOrFail($id);

    $validatedData = $request->validate([
        'Title' => 'required|max:255',
        'description' => 'required',
        'summary' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $servicesdata->Title = $request->input('Title');
    $servicesdata->description = $request->input('description');
    $servicesdata->summary = $request->input('summary');
   

  
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_image.' . $image->getClientOriginalExtension();
        $image->move(public_path('/assets/services_image'), $imageName);
        $servicesdata->image = 'assets/services_image/' . $imageName;
    }

    $servicesdata->save();

    return redirect()->route('addservice');
}

public function ServiceDetails($id) {
    $service = services::where('id' , $id)->first();
    $Title = settings::where('id' , 6 )->get() ;
    $Siteimage = settings::where('id' , 7 )->get() ;
    $Phonenumber = contact::where('id' , 6)->get();
    $email = contact::where('id' , 5)->get();
    $site_name = settings::where('id' , 5 )->get() ;
    return view('Landingpage.ServiceDetails' , compact('service',
    'site_name',

    'Title',

    'Siteimage',
    'Phonenumber',

    "email" ,
));
}
}
