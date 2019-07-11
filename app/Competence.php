<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Competence extends Model
{
    
    protected $dates = ['deleted_at'];
    use SoftDeletes;
   
    public function users()
    {
        return $this->belongsToMany('App\User', 'competence_user')->using('App\CompetenceUser')->withPivot('value');
    }
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_competence')->withTimestamps();
    }
    public function validation()
    {
        return $this->hasOne('App\Statutvalidation','competence_id');
    }
}
