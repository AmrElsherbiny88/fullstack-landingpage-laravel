<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addclient;
use Illuminate\Http\Request;

class AddclientController extends Controller
{
    public function addclient() {
        $clientsdata = Addclient::all();
        return view('Admin.clients'  , compact('clientsdata'));
    }

    public function store(Request $request)
    {    
        // تحميل الـ title والـ body
        $clientname = $request->input('clientname');
        $SiteUrl= $request->input('SiteUrl');
    
        // تحميل الـ logo إن وجدت
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '_logo.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('/assets/client_image'), $logoName);
            $logoPath = 'assets/client_image/' . $logoName;
        }
    
       
    
        // إنشاء بوست جديد وربطه بالبائع الحالي
        $client = new Addclient();
        $client->clientname = $clientname;
        $client->SiteUrl = $SiteUrl;
        $client->logo = $logoPath;

        $client->save();
    
        // إعادة التوجيه أو عرض رسالة نجاح
        return redirect()->route('addclient');
    }

    public function edit($id){
        $clientsdata = Addclient::findorFail($id);

        return view('Admin.EditClient' , compact('clientsdata'));
        
    }

    public function update(Request $request, $id)
{
    // Find the existing project by its ID
    $clientsdata = Addclient::findOrFail($id);

    // Validate the incoming request
    $validatedData = $request->validate([
        'clientname' => 'required|max:255',
        'SiteUrl' => 'required',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Update the text fields
    $clientsdata->clientname = $request->input('clientname');
    $clientsdata->SiteUrl = $request->input('SiteUrl');

    // Update the Thumbnail if a new one is uploaded
    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $logoName = time() . '_logo.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('/assets/client_image'), $logoName);
        $clientsdata->logo = 'assets/client_image/' . $logoName;
    }

  
    // Save the updated project
    $clientsdata->save();

    // Redirect or show a success message
    return redirect()->route('addclient');
}


    public function destroy($id) {
        Addclient::find($id)->delete();
        return redirect()->route('addclient');
    }
}
