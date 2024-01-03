<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    //session code 
    public function userSession(Request $request){
        $data = $request->input();
        $request->session()->put('keyvalue',$data['name']);
        // dd(session());
        return redirect('pro');
    }
}
