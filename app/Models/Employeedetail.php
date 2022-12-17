<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeedetail extends Model
{
    use HasFactory;
   
    protected $fillable=[
       'user_id',
        'dob',
        'address',
        'city',
        'state',
        'pincode',
        'mobile',
        'email',
        'job_type',
        'employment_type',
        'current_company',
        'job_responsibility',
        'highest_degree',
        'university_name',
        'number_of_experience',
        'current_salary',
        'cv_name',
       'status'
    ];
}
