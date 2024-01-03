<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Models\Student;

class ProductController extends Controller
{
    public function index(){
        $list =['ayo', 'jamiu', 'john', 'joseph', 'james', 'favour', ];
        return Blade::render('<h1 style="color:red;"text-align="center;">HELLO I AM FROM CONTROLLER</h1>');
    }

    public function getdata(Request $request){
    //    $data = $request->input();
    //    return dd($data);
    $validataData = $request->validate([
        'FirstName'=>'required|min:3|max:20',
        'LastName'=>'required|min:3|max:20',
        'OtherName'=>'required|min:3|max:20',
        'Email'=>'required|email',
        'StudentId'=>'required',
        'Semester'=>'required',
        'Gender'=>'required',
       
    ]);
       return $validataData;
    }

}
 