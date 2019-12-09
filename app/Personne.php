<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    public function tallies()
    {
        return $this->hasMany("App\tally");

    }

    public function conges()
    {
        return $this->hasMany("App\conge");
    }
    public function users()
    {
        return $this->hasMany('App\user');
    }
    public function department()
    {
        return $this->belongsTo('App\department');
    }
}



