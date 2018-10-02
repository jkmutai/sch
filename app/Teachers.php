<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $fillable = [
        'staff_id','name','dob','phone','teaching_subjects','address',
        'qualifications','designation','photo',
        ];
}
