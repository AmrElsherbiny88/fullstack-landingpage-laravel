<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addclient;
use App\Models\Addfeatures;
use App\Models\Addproject;
use App\Models\Addsolution;
use App\Models\contact;
use App\Models\services;
use App\Models\settings;
use App\Models\stats;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FetchingController extends Controller
{
    public function index()
    {
     
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
    
      $description = settings::where('id' , 3 )->get() ;
      $URL = settings::where('id' , 4)->get() ;
      $site_name = settings::where('id' , 5 )->get() ;
      $Title = settings::where('id' , 6 )->get() ;
      $Siteimage = settings::where('id' , 7 )->get() ;
      $Phonenumber = contact::where('id' , 6)->get();
      $email = contact::where('id' , 5)->get();
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
      
      'clients',

      'description',

      'URL',

      'site_name',

      'Title',

      'Siteimage',
      'Phonenumber',

      "email" ,
    
    
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
      $site_name = settings::where('id' , 5 )->get() ;
      $Title = settings::where('id' , 6 )->get() ;
      $Siteimage = settings::where('id' , 7 )->get() ;

      return view('Landingpage.contact', compact('facebook',
      
      "github",
      
      "instagram",
      
      "Maplocation" ,

      "email" ,
      
      "Phonenumber",

      "linkedin" ,

      "twitter" ,

      
      'site_name',

      'Title',

      'Siteimage',
 

 
    ));

    }




    public function projects(){ 

      $projects = Addproject::all();
      $site_name = settings::where('id' , 5 )->get() ;
      $Title = settings::where('id' , 6 )->get() ;
      $Siteimage = settings::where('id' , 7 )->get() ;
      $Phonenumber = contact::where('id' , 6)->get();
      $email = contact::where('id' , 5)->get();
      return view('Landingpage.portfolio', compact('projects',
      'site_name',

      'Title',

      'Siteimage',
      'Phonenumber',

      "email" ,
    ));

    }


    public function projectdetails($id){
      $project = Addproject::where('id' , $id)->get();
      $clients = Addclient::all();

      $service1 = services::where('id' , 1)->get();
      $service2 = services::where('id' , 2)->get();
      $service3 = services::where('id' , 3)->get();
      $service4 = services::where('id' , 4)->get();
      $site_name = settings::where('id' , 5 )->get() ;
      $Title = settings::where('id' , 6 )->get() ;
      $Siteimage = settings::where('id' , 7 )->get() ;
      $Phonenumber = contact::where('id' , 6)->get();
      $email = contact::where('id' , 5)->get();

      return view('Landingpage.projectDetails' , compact('project' , "clients",
    "service1",
      
      "service2" ,

      "service3" ,
      
      "service4",

      
      'site_name',

      'Title',

      'Siteimage',
      'Phonenumber',

      "email" ,
    
    ));

    
      
  }

  
  // public function footer(){ 

  //   $email = contact::where('id' , 5)->get();
  //   $Phonenumber = contact::where('id' , 6)->get();
  //   $site_name = settings::where('id' , 5 )->get() ;
  //   $Siteimage = settings::where('id' , 7 )->get() ;
  //   return view('components.footer', compact(
      
  //     'email',
  //     'Phonenumber',
  //     'site_name',
  //     'Siteimage',
  // ));

  // }

}
