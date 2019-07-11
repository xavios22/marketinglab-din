<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->hasMany('App\User', 'role_id', 'id');
    }
    public function competences()
    {
        return $this->belongsToMany('App\Competence', 'role_competence')->withTimestamps();
    }
    
}