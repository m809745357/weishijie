<?php

namespace App\Models;

class Curriculum extends BaseModel
{
    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }
}
