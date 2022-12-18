<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\User;
use App\Models\Joblist;
use App\Models\Employeedetail;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public $cvupload;
    public function index()
    {
        return view('admin/home');
    }

    function jobprofile(Request $request)
    {
        
        if(!empty($request->all())){

      $array=  $request->validate([

        'dob'=>'required',
        'address'=>'required',
        'city'=>'required',
        'state'=>'required',
        'pincode'=>'required','min:6','max:6',
        'mobile'=>['required','min:10','max:10'],
        'email'=>'required',
        'job_type'=>'required',
		'employment_type'=>'required',
		'current_company'=>'required',
        'job_responsibility'=>'required',
        'highest_degree'=>'required',
        'university_name'=>'required',
        'number_of_experience'=>'required',
        'current_salary'=>'required',
        'cv_name' =>'required|mimes:doc,docx,pdf|max:2048',
                   
        ]);
        
        $this->cvupload = time() . '.' . $request->cv_name->extension();
        
        $request->cv_name->move(public_path('assets\cv'), $this->cvupload);
        $array['cv_name']=$this->cvupload;
        $array['user_id']=Auth::user()->id;
        $array['status']=1;
        $affectedRows = Employeedetail::create($array);
        return   redirect('iuser/jobprofile')->with('success', 'Profile updated successfully');
    }
       $data['employeedetail']=Employeedetail::where('user_id',Auth::user()->id)->get();
       $data['industry']= Industry::all();
    
        return view('employee/profile',$data);
        
    }

    function joblist()
    {

    }

    function appliedjob()
    {

    }
}
