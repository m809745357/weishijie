<?php

namespace App\Models;

class Course extends BaseModel
{
    public function path()
    {
        return '/courses/' . $this->id;
    }
}
