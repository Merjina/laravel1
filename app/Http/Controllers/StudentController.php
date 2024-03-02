<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_models;

class StudentController extends Controller
{
    public function index(){
        $data=Student_models::get();
       // return $data;
       return view('student-list')->with('data', $data);
    }
    public function addstudent(){
        return view('add-student');
    }
    
    public function savestudent(Request $request){
        $name=$request->name;
        $email=$request->email;
        $mobile=$request->mobile;
        $address=$request->address;

        $row = new Student_models();
        $row->name=$name;
        $row->email=$email;
        $row->mobile=$mobile;
        $row->address=$address;
        $row->save();

        return redirect()->back()->with('success', 'Student added successfully.');
    }
    public function editstudent($id)
    {
        $row = Student_models::find($id); 
        return view('edit-student')->with('data', $row);
    }

    public function updatestudent(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        $address = $request->address;

        $student_models= Student_models::find($id);
        $student_models->name = $name;
        $student_models->email = $email;
        $student_models->mobile = $mobile;
        $student_models->address = $address;
        $student_models->save();

        return redirect()->back()->with('success', 'Student updated successfully.');
    }
    public function deletestudent($id)
    {
        $data = Student_models::find($id);
    
        if (!$data) {
            return redirect()->back()->with('error', 'Student not found.');
        }
    
        return view('delete-student', ['student_models' => $data]);
    }
    
    public function confirmDeleteStudent($id)
    {
        $data = Student_models::find($id);
    
        if (!$data) {
            return redirect()->route('student-list')->with('error', 'Student not found.');
        }
    
        $data->delete();
    
        return redirect()->route('student-list')->with('success', 'Student deleted successfully.');
    }
    

}
?>