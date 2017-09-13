<?php

namespace App\Models;

class Course extends BaseModel
{
    public function path()
    {
        return '/courses/' . $this->id;
    }

    public function teacher()
    {
        return $this->belongsTo(\App\Models\Teacher::class, 'teacher_id');
    }
}
