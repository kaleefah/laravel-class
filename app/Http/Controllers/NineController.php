<?php

namespace App\Http\Controllers;

use App\Models\Nine;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NineController extends Controller
{
    //get all uses
    public function index(){
        $data = Nine::all();
        return view('nine',['users'=>$data]);
    }
//store and create new user
    public function store(Request $request){
        $formfields =$request->validate([
            'lastname'=>'required',
            'firstname'=>'required',
            'email'=>['required','email',Rule::unique('nines','email')],
            'password'=>['required','min:3','max:15'],
        ]);
        $formfields['password']= bcrypt($formfields['password']);
        if($formfields){
            $user =Nine::create($formfields);
            return redirect('dnine')->with('message','user created succesfully');
        }
    }
    //show edit form
    public function edit(Nine $nine){
        return view('nine_edit',['users'=>$nine]);
    }

    //update users record
    public function update(request $request,Nine $nine){
        $formfields=$request->validate([
            'lastname'=>'required',
            'firstname'=>'required',
            'email'=>['required','email'],
        ]);
        if($formfields){
            $nine->update($formfields);
            return redirect('dnine')->with('message','users record updated succesfully');
        }
        
    }
    //delete users record
    public function destroy(Nine $nine){
        $nine->delete();
        return back()->with('message','user record has been deleted succesfully');
    }
   //pagination


















}






















