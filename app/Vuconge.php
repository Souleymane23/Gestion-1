<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuconge extends Model
{
    public $timestamps = false;
public function vuconges()
{
      return $this->belongsToMany('\App\Vuconge')->withTimestamps();
}
}
