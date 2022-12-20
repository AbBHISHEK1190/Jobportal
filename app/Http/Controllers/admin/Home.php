<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\User;
use App\Models\Joblist;
use App\Models\Employeedetail;

class Home extends Controller
{
    public function index()
    {
        return view('admin/home');
    }

    function recruiter_list()
    {

        $user['recruiter']=USer::all()->where('account_type',2);
        return view('admin/recruiter_list',$user);

    }
    

    function jobseeker_list()
    {

        $data['employeedetail']= Employeedetail::join('users','employeedetails.user_id','=','users.id')->get(['employeedetails.*','users.name']);

        return view('admin/jobseeker_list',$data);
    }
}
