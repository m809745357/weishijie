<?php

namespace App\Models;

class Tiding extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order',
    ];

    public function path()
    {
        return '/tidings/' . $this->id;
    }
}
