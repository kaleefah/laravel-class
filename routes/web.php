<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\NineController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/sucess', function () {
    return view('ib');
});



Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/husna', function () {
    $details = [
        'gender'=>'female',
        'age' => 18,
        'state' => 'imo'
    ];
    return view('husna', $details);
});
Route::get('/contact', function () {
    $details =[
        ['name'=>'husna', 'state' => 'kogi', 'age' => 20],
        ['name'=>'Aisha', 'state' => 'imo', 'age' => 23],
        ['name'=>'Mariam', 'state' => 'kebbi', 'age' => 19]
];
    return view('contact', ['details'=>$details]);
});


Route::get('/students', [StudentController::class, 'displayStudents']);




Route::get('/form', [FormController::class, 'showForm']);

Route::view('oneurl.com','page1');
Route::view('twourl.com', 'page2');
Route::view('threeurl.com', 'page3');
Route::view('body.com', 'body');
Route::view('footer.com', 'footer');
Route::view('header.com', 'header');





Route::view('login','login');



Route::get('list.com', [ProductController::class, 'index']);

Route::PUT('get', [ProductController::class, 'getdata']);
Route::get ('noaccess', function (){
    return view ('noaccess');
});
// group middlewares Route
Route::group(['middleware'=>['YearChecker']], function(){
    Route::view('threeurl.com', 'page3');

    Route::view('login','login')->middleware('nojs');

    Route::get('/', function () {
        return view('welcome');
    });
});

 Route::get('year', function(){
    return view('year');
});

// ass
Route::view('website.com','website');
Route::view('loginweb.com','loginweb');
Route::view('reg.com','reg');
Route::view('dash.com','dashboard');
Route::view('about.com','about');
Route::view('services.com','services');
Route::view('contact2.com','contact2');


Route::get('students.com',[StudentController::class, 'index']);
Route::get('getUser',[StudentController::class, 'getUser']);
Route::get('link',[StudentController::class, 'getHttp']);
Route::get('new',[StudentController::class, 'Users']);
Route::get('class',[StudentController::class, 'getData']);


//register
Route::get('register', function(){
    if(session()->has('keyValue')){
        return redirect()->route('reg.session');
   
} else {
    return view('profile');
}
})->name('reg.session');

Route::get('profile', function(){
    if(!session()->has('keyValue')){
        return redirect()->route('reg.session');
    }
    return view('profile');
})->name('pro.session');

Route::post('getsession', [StudentController::class, 'getSession'])->name('getsession');

Route::get('/logout', function (){
    if(session()->has('keyValue')){
     session()->forget('keyValue');
     return redirect()->route('reg.session');
     }
     else{
        return redirect()->route('reg.session');
    }
})->name('log.session');




Route::view('log2.com', 'login2');
Route::view('profile.com', 'profile');



//login session
Route::get('paa',function(){
    if(session()->has('keyvalue')){
        return redirect('pro')->with('error','useless beign cant you see the logout button');
    }
    return view('paa');
});

//profile /session 
Route::get('pro',function(){
    if(!session()->has('keyvalue')){
        return redirect('paa')->with('error','hey 419 login properly');
    }
    return view('pro');
});

//logout /session 
Route::get('logout2',function(){
    if(session()->has('keyvalue')){
        session()->pull('keyvalue');
        return redirect('paa');
    }
    else{
        return view('pro');
    }
    
});

Route::post('sess',[LessonController::class,'userSession']);


//file upload
// Route::get('upload','file');
// Route::post('file', [StudentController::class,'upload'])->name('file.upload');


// // Tutorial
// Route::get('/listings', function () {
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => Listing::all(),
//     ]);
// });

// Route::get('/listings/{id}', function ($id) {
//     return view('listing', [
//         'listing' => Listing::find($id),
//     ]);
// });

Route::get('dnine',[NineController::class,'index']);

Route::view('registernine','registernine');
//store data 
Route::post('sendnine',[NineController::class,'store']);


//show edit form
Route::get('edit/{nine}',[NineController::class,'edit']);
//update user record
Route::put('update/{nine}',[NineController::class,'update']);
//delete users record
Route::get('delete/{nine}',[NineController::class,'destroy']);

