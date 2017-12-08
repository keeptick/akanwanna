<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function departments()
    {
        return $this->belongsTo("App\Department", "department_id");
    }
}
