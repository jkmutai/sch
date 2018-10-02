<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolSettings extends Model
{
protected $fillable = ['school_name','school_address','school_motto','school_logo','school_email','school_website'];
}
