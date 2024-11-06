<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
class StudentController extends Controller
{
    function getdata(){
        // $stdData = Student::all();
        $stdData = Student::paginate(5);

        return view("student",["std"=>$stdData]);
    }

    
    function addstudent(Request $request){
        $student = new Student();
        $student->Name = $request->name;
        $student->Email = $request->email;
        $student->Batch = $request->batch;
        $student->save();
        if ($student){
            return redirect("liststudent");
        }
        else {
            return "Record Not Added!";
        }
  }

  function DeleteStd($id){
    
    $delid = Student::destroy($id);

    if($delid){
        return redirect("liststudent");
    }
    else{
        return 'Student data not Delete';
    }
  }


  function edit($id){
    
    $editid = Student::find($id);

    return  view('edit', ['data'=>$editid]);
  }

  function editStd(Request $request,$id){
    
    $student = Student::find(  $id);
    $student->Name = $request->name;
    $student->Email = $request->email;
    $student->Batch = $request->batch;
    if ($student->save()){
        return redirect("liststudent");
    }
    else {
        return "Record Not Updated!";
    }
  }

  function search(Request $request){
    $studentdata= Student::where('Name','like',"%$request->search%")->get();
        return view("student",["std" => $studentdata,'search'=>$request->search]);
        
  }


  function deleteMultiple(Request $req){
    $result= Student::destroy($req->ids);
    if($result){

        return redirect('liststudent');
    }
    else{
        return "Multi data not deleted";
    }
  }

}