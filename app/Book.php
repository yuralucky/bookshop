<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
