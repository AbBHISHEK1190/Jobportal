<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joblist extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'job_location',
        'job_type',
        'no_of_hire',
        'mobile',
        'min_package',
        'max_package',
        'any_benfits',
        'max_package',
        'max_package',
        'email',
        'job_responsibility',
        'minimum_education',
        'level_of_exprerienc',
        'user_id',
        'status'
    ];
    
}
