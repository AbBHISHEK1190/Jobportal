<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\User;
use App\Models\Joblist;

class Home extends Controller
{
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
        'pincode'=>'required',
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
        
                   
        ]);
        $affectedRows = USer::where("id",Auth::user()->id)->update($array);
        return   redirect('iuser/jobprofile')->with('success', 'Profile updated successfully');
    }
       $data['industry']= Industry::all();
    
        return view('employee/profile',$data);
        
    }
}
