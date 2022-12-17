<?php

namespace App\Http\Controllers\recruiter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\User;
use App\Models\Joblist;
use Illuminate\Support\Facades\Auth;
class Home extends Controller
{
    public function index()
    {
        return view('admin/home');
    }

    function profile(Request $request)
    {

        
        if(!empty($request->all())){

      $array=  $request->validate([
            'company_name'=>'required',
            'hiring_manager'=>'required',
            'total_employee'=>'required',
            'heard_source'=>'required',
            'mobile'=>'required','min:10','max:10',
            'industry_type'=>'required',
            'company_desc'=>'required',
                   
        ]);
        $affectedRows = USer::where("id",Auth::user()->id)->update($array);
        return   redirect('recruiter/profile')->with('success', 'Profile updated successfully');
    }
       $data['industry']= Industry::all();
    
        return view('recruiter/profile',$data);
        
    }
    function addjobs(Request $request)
    {
        $data['industry']= Industry::all();
        if(!empty($request->all())){

            $array=  $request->validate([
                  'job_title'=>'required',
                  'job_location'=>'required',
                  'job_type'=>'required',
                  'no_of_hire'=>'required',
                  'mobile'=>'required','min:10','max:10',
                  'min_package'=>'required',
                  'max_package'=>'required',
                  'any_benfits'=>'required',
                  'max_package'=>'required',
                  'max_package'=>'required',
                  'email'=>'required',
                  'job_responsibility'=>'required',
                  'minimum_education'=>'required',
                  'level_of_exprerienc'=>'required'
                  
                         
              ]);
            //  
              $array['user_id']=Auth::user()->id;
              $array['status']=1;
            //   print_r($array);die;
              $affectedRows = Joblist::create($array);
              return   redirect('recruiter/alljoblist')->with('success', 'Job created successfully');
          }

        return view('recruiter/addjobs',$data);
        
    }

    function alljoblist()
    {
       
        $data['alljoblst']=Joblist::where('user_id',Auth::user()->id)->get();
        return view('recruiter/alljoblist',$data);
    }

    function jobstatus(Request $request)
    {
        
    $array=  $request->validate([
        'status'=>'required',
    ]);
    
      $affectedRows = Joblist::where("id",$request->jobid)->update($array);
      return   redirect('recruiter/alljoblist')->with('success', 'Status updated successfully');
    }
}
