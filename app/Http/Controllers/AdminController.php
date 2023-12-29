<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Notice;
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
        return view('backend.admin.course', ['course' => $course, 'subjects' => $subjects]);
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
            return redirect()->back()->with('success', 'কোর্সটি আপডেট করা হয়েছে');  
        } 
        else{
            $coursex->save();
            return redirect()->back()->with('success', 'কোর্সটি যুক্ত করা হয়েছে');
        }
        
    }
    protected function notices(){
        $perpage = 12;
        $notices = Notice::latest()->paginate($perpage);
        return view('backend.admin.notices',compact('notices'))->with('i',(request()->input('page',1)-1)*$perpage);
    }
    protected function notices_submission(Request $request, $notice = null){
        if ($notice == null){
            $noticex = new Notice(); 
        }
        else{
            $noticex = Notice::where('id', $notice)->first();
        }
        $noticex->title = $request->title; 
        if (!is_null($request->file('image'))){
            $pdf_name = $request->file('image')->getClientOriginalName();
            $pdf = date("Y-m-d_H-i-s")."_Notice_".rand(11111,99999)."_".$pdf_name;
            $request->file('image')->storeAs('public/pdf', $pdf);
            $noticex->pdf_path = 'storage/pdf/'.$pdf;
         }
         if ($notice == null){
            $noticex->save();
            return redirect()->back()->with('success', 'নোটিশটি যুক্ত করা হয়েছে'); 
        }
        else{
            $noticex->update();
            return redirect()->back()->with('success', 'কোর্সটি আপডেট করা হয়েছে'); 
        }

    }
}
