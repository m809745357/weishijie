<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Witness extends Model
{
    public function path()
    {
        return '/witnesses/' . $this->id;
    }
}
