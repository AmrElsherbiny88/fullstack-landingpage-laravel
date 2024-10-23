<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\services;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function addcontact()
    {
        $contactdata = contact::all();
        return view('Admin.Contact', compact('contactdata'));
    }

    public function store(Request $request)
    {
        // تحميل الـ title والـ body
        $Platform = $request->input('Platform');
        $URL = $request->input('URL');


        // إنشاء بوست جديد وربطه بالبائع الحالي
        $contact = new contact();
        $contact->Platform = $Platform;
        $contact->URL = $URL;


        $contact->save();

        // إعادة التوجيه أو عرض رسالة نجاح
        return redirect()->route('addcontact');
    }

    public function edit($id)
    {
        $contactdata = contact::findorFail($id);

        return view('Admin.Editcontact', compact('contactdata'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        // Find the existing project by its ID
        $contactdata = contact::findOrFail($id);


        // Update the text fields
        $contactdata->URL = $request->input('URL');


        // Save the updated project
        $contactdata->save();

        // Redirect or show a success message
        return redirect()->route('addcontact');
    }
}
