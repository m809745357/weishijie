<?php

namespace App\Models;

class Tiding extends BaseModel
{
    public function path()
    {
        return '/tidings/' . $this->id;
    }
}
