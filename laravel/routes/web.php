<?php

use App\Http\Controllers\AddprojectController;
use App\Http\Controllers\AddclientController;
use App\Http\Controllers\AddfeaturesController;
use App\Http\Controllers\AddsolutionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FetchingController;
use App\Http\Controllers\HerosectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function () {
    return view('Admin.welcome');
})->name("home");


// Route::get('/AddProject', function () {
//     return view('Admin.AddProject');
// })->middleware(['auth', 'verified'])->name('dashboard');

// add project
Route::get('/AddProject', [AddprojectController::class, 'addproject'])->middleware(['auth', 'verified'])->name('addProject');
Route::post("/AddProject" ,[AddprojectController::class, "store"] )->middleware(['auth', 'verified'])->name("Addproject");
Route::get('/project/{id}', [AddprojectController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit');
Route::delete('/delete/{id}', [AddprojectController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy');
Route::put('/put/{id}', [AddprojectController::class, 'update'])->middleware(['auth', 'verified'])->name('Update');



// client
Route::get('/client/{id}', [AddclientController::class, 'edit'])->middleware(['auth', 'verified'])->name('editclient');
Route::delete('/deleteclient/{id}', [AddclientController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroyclient');
Route::put('/putclient/{id}', [AddclientController::class, 'update'])->middleware(['auth', 'verified'])->name('Updateclient');
Route::post("/Addclient" ,[AddclientController::class, "store"] )->middleware(['auth', 'verified'])->name("storeclient");
Route::get('/Addclient', [AddclientController::class, 'addclient'])->middleware(['auth', 'verified'])->name('addclient');


// solutions
Route::get('/solution/{id}', [AddsolutionController::class, 'edit'])->middleware(['auth', 'verified'])->name('editsolution');
Route::delete('/deletesolution/{id}', [AddsolutionController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroysolution');
Route::put('/putsolution/{id}', [AddsolutionController::class, 'update'])->middleware(['auth', 'verified'])->name('Updatesolution');
Route::post("/Addsolution" ,[AddsolutionController::class, "store"] )->middleware(['auth', 'verified'])->name("storesolution");
Route::get('/Addsolution', [AddsolutionController::class, 'addsolution'])->middleware(['auth', 'verified'])->name('addsolution');


// features
Route::get('/features/{id}', [AddfeaturesController::class, 'edit'])->middleware(['auth', 'verified'])->name('editfeatures');
Route::delete('/deletefeatures/{id}', [AddfeaturesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroyfeatures');
Route::put('/putfeatures/{id}', [AddfeaturesController::class, 'update'])->middleware(['auth', 'verified'])->name('Updatefeatures');
Route::post("/Addfeatures" ,[AddfeaturesController::class, "store"] )->middleware(['auth', 'verified'])->name("storefeatures");
Route::get('/Addfeatures', [AddfeaturesController::class, 'addfeature'])->middleware(['auth', 'verified'])->name('addfeature');



// Hero section
Route::get('/hero/{id}', [HerosectionController::class, 'edit'])->middleware(['auth', 'verified'])->name('edithero');
Route::delete('/deletehero/{id}', [HerosectionController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroyhero');
Route::put('/puthero/{id}', [HerosectionController::class, 'update'])->middleware(['auth', 'verified'])->name('Updatehero');
Route::post("/HeroSection" ,[HerosectionController::class, "store"] )->middleware(['auth', 'verified'])->name("storehero");
Route::get('/HeroSection', [HerosectionController::class, 'addhero'])->middleware(['auth', 'verified'])->name('addhero');



// Hero section
Route::get('/service/{id}', [ServicesController::class, 'edit'])->middleware(['auth', 'verified'])->name('editservice');
Route::delete('/deleteservice/{id}', [ServicesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroyservice');
Route::put('/putservice/{id}', [ServicesController::class, 'update'])->middleware(['auth', 'verified'])->name('Updateservice');
Route::post("/services" ,[ServicesController::class, "store"] )->middleware(['auth', 'verified'])->name("storeservice");
Route::get('/services', [ServicesController::class, 'addservice'])->middleware(['auth', 'verified'])->name('addservice');





// stats section
Route::get('/stats/{id}', [StatsController::class, 'edit'])->middleware(['auth', 'verified'])->name('editstats');
Route::delete('/deletestats/{id}', [StatsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroystats');
Route::put('/putstats/{id}', [StatsController::class, 'update'])->middleware(['auth', 'verified'])->name('Updatestats');
Route::post("/stats" ,[StatsController::class, "store"] )->middleware(['auth', 'verified'])->name("storestats");
Route::get('/stats', [StatsController::class, 'addstats'])->middleware(['auth', 'verified'])->name('addstats');



// contact section
Route::get('/contact/{id}', [ContactController::class, 'edit'])->middleware(['auth', 'verified'])->name('editcontact');
Route::delete('/deletecontact/{id}', [ContactController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroycontact');
Route::put('/putcontact/{id}', [ContactController::class, 'update'])->middleware(['auth', 'verified'])->name('Updatecontact');
Route::post("/contact" ,[ContactController::class, "store"] )->middleware(['auth', 'verified'])->name("storecontact");
Route::get('/contact', [ContactController::class, 'addcontact'])->middleware(['auth', 'verified'])->name('addcontact');


// terms section
Route::get('/terms/{id}', [TermsController::class, 'edit'])->middleware(['auth', 'verified'])->name('editterms');
Route::delete('/deleteterms/{id}', [TermsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroyterms');
Route::put('/putterms/{id}', [TermsController::class, 'update'])->middleware(['auth', 'verified'])->name('Updateterms');
Route::post("/terms" ,[TermsController::class, "store"] )->middleware(['auth', 'verified'])->name("storeterms");
Route::get('/terms', [TermsController::class, 'addterms'])->middleware(['auth', 'verified'])->name('addterms');

























Route::get('/EditProject', function () {
    return view('Admin.EditProject');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Editclient', function () {
    return view('Admin.EditClient');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Editsolutions', function () {
    return view('Admin.EditSolutions');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/EditFeatures', function () {
    return view('Admin.EditFeatures');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/aaa', function () {
    return view('admin.test');
});




// landing page


Route::get('/', function () {
    return view('Landingpage.welcome');
});
Route::get('/', [FetchingController::class, 'index'])->name("index");



Route::get('/portfolio', [FetchingController::class, 'projects'])->name("projects");

Route::get('/clients', function () {
    return view('components.clients');
});
Route::get('/clients', [FetchingController::class, 'clients'])->name("clients");




Route::get('/TermsandConditions', function () {
    return view('Landingpage.terms');
});

Route::get('/terms', [TermsController::class, 'addterms'])->name('addterms');


Route::get('/contactUs', function () {
    return view('Landingpage.contact');
});
Route::get('/contactUs', [FetchingController::class, 'contactUs'])->name('contactUs');

// Route::get('/ServiceDetails', function () {
//     return view('Landingpage.ServiceDetails');
// });

Route::get('/ServiceDetails/{id}', [ServicesController::class, 'ServiceDetails'])->name('ServiceDetails');



Route::get('/projectDetails/{id}', [FetchingController::class, 'projectdetails'])->name('projectdetails');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



