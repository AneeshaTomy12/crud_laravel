<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//model controller 
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        // $data=Student::all();
        $data=['data1'=>Student::all()];
        // return $data;
        return view('index',$data);

    }
    public function create(){
       return view('create');

    }
    public function store(){
        $student=new Student();
        $student->name=request('fname');
        $student->age=request('age');
        $student->mark=request('mark');
        $student->save();
         return redirect('/');
 
     }
     public function edit($id){
        $data=['data1'=>Student::find($id)];
        return view('edit', $data);
     }
     public function update($id){
        $data=Student::find($id);
        $data->name=request('fname');
        $data->age=request('age');
        $data->mark=request('mark');
        $data->save();
         return redirect('/');
     }
     public function destroy($id){
        $data=Student::find($id);
        $data->delete();
        return redirect('/');

     }
    
}
