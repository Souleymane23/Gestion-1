<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    public function personnes()
    {
        return $this->hasMany("App\personne");
    }
}
