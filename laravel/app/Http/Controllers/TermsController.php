<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function addterms() {
        $termsdata = terms::all();
        
        return view('Admin.Terms' , 'Landingpage.terms'  , compact('termsdata'));
    
    }

    public function store(Request $request)
    { 
          
        $terms = $request->input('terms');

        $data = new terms();
        $data->terms = $terms ;


        $data->save();
    
        
        return redirect()->route('addterms');
    }

    public function edit($id){
        $termsdata = terms::findorFail($id);

        return view('Admin.Editterms' , compact('termsdata'));
        
    }

    public function update(Request $request, $id)
{

    $termsdata = terms::findOrFail($id);

    $validatedData = $request->validate([
        'terms' => 'required',
      
    ]);
    $termsdata->terms = $request->input('terms');
    $termsdata->save();
    return redirect()->route('addterms');
}
}
