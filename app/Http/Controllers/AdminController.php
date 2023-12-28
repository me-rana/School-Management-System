<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    //
    protected function dashboard(){
        return view('backend.admin.index');
    }

    protected function courses(){
        $perpage = 4;
        $subjects = Subject::all();
        $courses = Course::paginate($perpage);
        return view('backend.admin.couses', ['courses' => $courses, 'subjects' => $subjects])->with('i',(request()->input('page',1)-1)*$perpage);
    }

    protected function courses_update (Course $course){
        $subjects = Subject::all();
        return view('backend.admin.couses', ['course' => $course, 'subjects' => $subjects]);
    }

    protected function courses_submission(Request $request, $course = null) : RedirectResponse {
        $request->validate([
            'name' => 'required',
            'admission' => 'required|integer',
            'tution' => 'required|integer',
            'month' => 'required|integer',
            'semester' => 'required|integer',
            'count' => 'required|integer',
            'formflap' => 'required|integer',
            'labfee' => 'required|integer',
        ]);
        if ($course == null){
            $coursex = new Course();
        }else{
            $coursex = Course::where('id', $course)->first();
        }
        $datas = ['name', 'ssubject', 'admission', 'tution', 'month', 'semester', 'count', 'formflap', 'labfee'];
        foreach ($datas as $data){
            $coursex->$data = $request->$data;
        }
        if ($course != null) {
            $coursex->update();
            return redirect()->back()->with('success', 'Course updated successfully');  
        } 
        else{
            $coursex->save();
            return redirect()->back()->with('success', 'Course added successfully');
        }
        
    }
}
