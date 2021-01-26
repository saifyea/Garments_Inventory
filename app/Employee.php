<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'emp_id', 'emp_name','designation', 'join_date','emp_department','emp_details','emp_image'
    ];


}
