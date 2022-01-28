<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use apiTraitStudent;
    public function index(){
        $stu=Student::get();
        $students=StudentResource::collection($stu);
        return $this->apiResponse($students,200,'Ok') ;
    }

    public function show($id){
        $stuent= Student::find($id);

        if($stuent){
            $stuent= new StudentResource(Student::find($id));
            return $this->apiResponse($stuent, 200, "Done successflly");
        }else{
            $stuent="No data";
            return $this->apiResponse($stuent, 222, "Done successflly");
        }
    }

    public function store(Request $request){
        $student = Student::create($request->all());
        $student->save();
        if($student){
            $student1= new StudentResource($student);
            return $this->apiResponse($student1, 201, 'done');
        }else{
            $student = "Not Done";
            return $this->apiResponse($student, 401, 'Not found');
        }
    }
    

}