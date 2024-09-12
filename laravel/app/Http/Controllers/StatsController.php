<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\stats;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function addstats() {
        $statsdata = stats::all();
        return view('Admin.stats'  , compact('statsdata'));
    }

    public function store(Request $request)
    {    
        // تحميل الـ title والـ body
        $Number = $request->input('Number');
        $Numbertype= $request->input('Numbertype');
        $categorie= $request->input('categorie');
    
        // تحميل الـ logo إن وجدت

       
    
        // إنشاء بوست جديد وربطه بالبائع الحالي
        $stat = new stats();
        $stat->Number = $Number;
        $stat->Numbertype = $Numbertype;
        $stat->categorie = $categorie;
       

        $stat->save();
    
        // إعادة التوجيه أو عرض رسالة نجاح
        return redirect()->route('addstats');
    }

    public function edit($id){
        $statsdata = stats::findorFail($id);

        return view('Admin.Editstats' , compact('statsdata'));
        
    }

    public function update(Request $request, $id)
{
    // Find the existing project by its ID
    $statsdata = stats::findOrFail($id);

    // Validate the incoming request
    $validatedData = $request->validate([
        'Number' => 'required|max:255',
        'Numbertype' => 'required',
        'categorie' => 'required',
       
    ]);

    // Update the text fields
    $statsdata->Number = $request->input('Number');
    $statsdata->Numbertype = $request->input('Numbertype');
    $statsdata->categorie = $request->input('categorie');
   

   
  
    // Save the updated project
    $statsdata->save();

    // Redirect or show a success message
    return redirect()->route('addstats');
}
}
