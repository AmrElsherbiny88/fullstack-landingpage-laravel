<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function addSetting() {
        $Settingsdata = settings::all();
        return view('Admin.Settings'  , compact('Settingsdata'));
    }

    public function store(Request $request)
    {    

        $settingType = $request->input('settingType');
        $data= $request->input('data');
        $logo= $request->input('logo');
        
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '_logo.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('/assets/Settings_image'), $logoName);
            $logoPath = 'assets/Settings_image/' . $logoName;
        }
    
        $setting = new settings();
        $setting->settingType = $settingType;
        $setting->data = $data;
        $setting-> logo = $logoPath;

        $setting->save();
    
    
        return redirect()->route('addSetting');
    }

    public function edit($id){
        $Settingsdata = settings::findorFail($id);

        return view('Admin.EditSettings' , compact('Settingsdata'));
        
    }

    public function update(Request $request, $id)
{

    $Settingsdata = settings::findOrFail($id);
    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $logoName = time() . '_logo.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('/assets/Settings_image'), $logoName);
        $Settingsdata->logo = 'assets/Settings_image/' . $logoName;
        $Settingsdata->save();
      
    }else{
        $Settingsdata->data = $request->input('data');
    }
    $Settingsdata->save();
    return redirect()->route('addSetting');
}

}
