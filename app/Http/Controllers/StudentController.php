<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\storage;



class StudentController extends Controller
{
    public function displayStudents()
    {
        $students = [
            'Musa Kabir', 
            'Jane Joy',
             'Bob Johnson', 
             'Ruth John', 
             'Adam Usman',
             'Joy Samuel',
              'Rohima Idris', 
              'Abdulnafiu Ogirima', 
              'Otaru Adam', 
              'Jemila Ilyas',
               'Salim Isah',
                'Idris yakub',
                'Sadiq Abdullah',
                'Shaibu Abdullahi', 
                'Muhammed Munirat',
                'Jamiu Ovaioza',
                'Sadiq Khadija',
                'Yakubu Hadiza',
                'Hussein Bilikis',
                'Yusuf Muhammad',
                'Sheidu Halilu',
                'Consolation Emeka',
                'Fateemah Muammad',
                'Nafeesah Nasir',
                'Harun Mufeedah',
                'Daud Aisha',
                'Haleema Jamiu'
        ];

        return view('students', compact('students'));
    }


    // function getUser
public function index(){
    $data =DB::select('select * from students');
    return json_encode($data);
}

public function getUser(){
    // return Student::all();
    // return Student::find(10,'FirstName');
    // return Student::all('email');
    // return Student::all('FirstName', 'LastName');
    // return Student::all('FirstName','LastName','Email','Semester');
    // $user=Student::all();
    // return $user;

    $user =Student::find([2,6,9,10]);
    return json_encode($user);
    
}

public function getHttp(){
    return Http::get("Reqres.in/api/users?page=1");
}



public function Users(){
    $data = Student::all();
    return view('childern', ['users'=>$data]);
}

public function getData(){
    $data = Http::get("https://reqres.in/api/users?page=1");

return view('http',['people'=>$data['data']]);
}

public function getSession(Request $request){
    $data = $request->input();
    $request->session()->put('keyValue', $data['firstName']);
    // dd(session ('keyValue'));
}


//file upload
//  public function upload (Request $request){
//      $data = $request->file('photo')->store('images');
//      dd($data);
//  }

}

