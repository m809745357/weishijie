<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }
}
