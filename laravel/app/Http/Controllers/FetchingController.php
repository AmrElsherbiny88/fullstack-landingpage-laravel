<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addclient;
use App\Models\Addfeatures;
use App\Models\Addproject;
use App\Models\Addsolution;
use App\Models\contact;
use App\Models\services;
use App\Models\stats;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FetchingController extends Controller
{
    public function index()
    {
        // Fetch all clients from the database
      // Fetch all clients from the 'clients' table
      $solutions = Addsolution::all();

      $features = Addfeatures::all();

      $service1 = services::where('id' , 1)->get();
      $service2 = services::where('id' , 2)->get();
      $service3 = services::where('id' , 3)->get();
      $service4 = services::where('id' , 4)->get();

      $stat1 = stats::where('id' , 1)->get();
      $stat2 = stats::where('id' , 2)->get();
      $stat3 = stats::where('id' , 3)->get();
      $stat4 = stats::where('id' , 4)->get();

      $clients = Addclient::all();

      return view('Landingpage.welcome', compact(
        
      'solutions',
      
      "features",
      
      "service1",
      
      "service2" ,

      "service3" ,
      
      "service4",

      "stat1" ,

      "stat2" ,

      "stat3" ,

      "stat4" ,
      
      'clients'
    
    
    ));
    }


    public function contactUs(){ 

      $facebook = contact::where('id' , 1)->get();
      $github = contact::where('id' , 2)->get();
      $instagram = contact::where('id' , 3)->get();
      $Maplocation = contact::where('id' , 4)->get();
      $email = contact::where('id' , 5)->get();
      $Phonenumber = contact::where('id' , 6)->get();
      $linkedin = contact::where('id' ,7)->get();
      $twitter = contact::where('id' ,8)->get();
         
      return view('Landingpage.contact', compact('facebook',
      
      "github",
      
      "instagram",
      
      "Maplocation" ,

      "email" ,
      
      "Phonenumber",

      "linkedin" ,

      "twitter" ,
    ));

    }




    public function projects(){ 

      $projects = Addproject::all();
         
      return view('Landingpage.portfolio', compact('projects' ));

    }


    public function projectdetails($id){
      $project = Addproject::where('id' , $id)->get();
      $clients = Addclient::all();

      $service1 = services::where('id' , 1)->get();
      $service2 = services::where('id' , 2)->get();
      $service3 = services::where('id' , 3)->get();
      $service4 = services::where('id' , 4)->get();


      return view('Landingpage.projectDetails' , compact('project' , "clients",
    "service1",
      
      "service2" ,

      "service3" ,
      
      "service4",
    
    ));
      
  }
}
