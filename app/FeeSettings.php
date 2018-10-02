<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeSettings extends Model
{
    protected $fillable = ['code','fee_item','amount'];
}
