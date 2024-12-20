<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{
    function getdata(){
        // $stdData = Student::all();
        $stdData = Student::paginate(5);

        return view("student",["std"=>$stdData]);
    }

    
    function addstudent(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;
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
    $student->name = $request->name;
    $student->email = $request->email;
    $student->batch = $request->batch;
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
  function accessorList(){
    return Student::all();
  }

  function accessorSave(){
    $student=new Student;

    $student->name="Manzar Bukhari";
    $student->email="ManzarBukhari@gmail.com";
    $student->batch="4";

    if($student->save()){
        echo "Data saved successfully!";
    }
  }


  function listStudentApi(){
    return Student::all();
  }


  function addStudentApi(Request $request){
    //validation
    $rules= array(
      'name'=> 'required | min:2 | max:10',
      'email' => 'email | required',
      'batch' => 'required'
    );

    $validation = Validator::make($request->all(),$rules);
    if($validation->fails()){
      return $validation->errors();
    }
    else{

    
    $student = new Student();
    $student->name = $request->name;
    $student->email = $request->email;
    $student->batch = $request->batch;
    
    if ($student->save()){
        return ['result'=>'Data added'];
    }
    else {
      return ['result'=>'Data not added'];
    }
  }
}


function updateStudentApi(Request $request){
  $student = Student::find($request->id);
  $student->name = $request->name;
  $student->email = $request->email;
  $student->batch = $request->batch;
  
  if ($student->save()){
      return ['result'=>'Data updated'];
  }
  else {
    return ['result'=>'Data not updated'];
  }

}

function deleteStudentApi($id){
  $student = Student::destroy($id);

  if ($student){
    return ['result'=>'Data Deleted'];
}
else {
  return ['result'=>'Data not Deleted'];
}
  }

 function searchStudentApi($key){
  $student = Student::where('name','like',"%$key%")->get();

  if ($student){
    return ['result'=>$student];
  }
  else {
    return ['result'=>'Data not Found'];
  }

 }


}