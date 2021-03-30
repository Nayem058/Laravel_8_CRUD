<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student=Student::orderBy('id','DESC')->get();
        return view('crud',compact('student'));
    }

    // -----store data--------//
    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'class'=> 'required',
            'roll'=> 'required',
        ],[
            'name.required'=> 'Please input Your name',
            'class.required'=> 'Please input Your class',
            'roll.required'=> 'Please input Your roll',
        ]);

        Student::insert([
            'name' => $request->name,
            'class' => $request->class,
            'roll'=> $request->roll,
        ]);

        return redirect()->back()->with('success','Successfully Data inserted');
    }
    public function edit($id){
        $student= Student::findOrFail($id);
        return view('edit',compact('student'));
    }
    // ------------------update------------------------
    public function update(Request $request,$id){
        Student::FindOrFail($id)->update([
            'name' => $request->name,
            'class' => $request->class,
            'roll'=> $request->roll,
        ]);
        return redirect()->to('/crud')->with('update','Successfully Data Updated');
    }

    public function destroy($id){
        
        Student::FindOrFail($id)->delete();

        return redirect()->back()->with('delete','Successfully Data Deleted');
    }
}
