<?php

namespace App\Models;

class Curriculum extends BaseModel
{
    public function path()
    {
        return '/curricula/' . $this->id;
    }

    // public function course()
    // {
    //     return $this->belongsTo(\App\Models\Course::class, 'course_id');
    // }
}
