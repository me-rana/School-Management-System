<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Notice;
use App\Models\Contact;
use App\Models\Subject;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class FrontendController extends Controller
{
    //Fontend Support files
    public function support(){
        $info_data = Settings::where('id', 1)->first();
        $subjects = Subject::all();
        $datas = compact('info_data', 'subjects');
        return $datas;
    }
    //Frontend Task are executed below----------------------------------------------->

    public function query(Request $request){
        $perpage = 4;
        $datas = $this->support();
        $courses = Course::where('name', 'LIKE', '%'.$request->name.'%')->where('ssubject', $request->ssubject)->latest()->paginate($perpage);
        return view('frontend.search', ['courses' => $courses])->with($datas)->with('i',(request()->input('page',1)-1)*$perpage);
    }

    
    public function home(){
        $support = $this->support();
        return view('frontend.index')->with($support);
    }

    public function about(){
        $support = $this->support();
        return view('frontend.about')->with($support);
    }

    public function contact(){
        $support = $this->support();
        return view('frontend.contact')->with($support);
    }

    public function contact_submission (Request $request, Contact $contact) : RedirectResponse {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $datas = ['name', 'email', 'subject', 'message'];
        foreach ($datas as $data){
            $contact->$data = $request->$data;
        }
        $contact->save();
        return redirect()->back()->with('success', 'Contact submitted successfully');
    }

    public function teachers(){
        $support = $this->support();
        return view('frontend.teachers')->with($support);
    }

    public function testiominal(){
        $support = $this->support();
        return view('frontend.testiominal')->with($support);
    }

    public function notices(){
        $support = $this->support();
        $perpage = 12;
        $notices = Notice::latest()->paginate($perpage);
        return view('frontend.notices', compact('notices'))->with($support)->with('i',(request()->input('page',1)-1)*$perpage);;
    }

    public function costs(){

        $support = $this->support();
        $courses = Course::all();
        return view('frontend.costs', ['courses' => $courses])->with($support);
    }

}
