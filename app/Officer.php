<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Officer extends Model
{
    public static $rules = array(
        'firstname'        => 'required',
        'lastname'         => 'required',
        'department'         => 'required',
        'position'         => 'required',
        'email'             => 'required',
        'phone'             => 'required',
    );
    public static function validate($data){
        return Validator::make($data, static::$rules);
    }
}
