<?php

namespace App\Models;

class Teacher extends BaseModel
{
    public function path()
    {
        return '/teachers/' . $this->id;
    }
}
