<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiding extends Model
{
    public function path()
    {
        return '/tidings/' . $this->id;
    }
}
