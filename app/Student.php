<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['adm','name','class','stream','house','dob','gender','old_school','adm_date','adm_type',
        'photo','entry_grade','special_needs','parent_name','parent_phone','parent_address','parent_email'];

}
