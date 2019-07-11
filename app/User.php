<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
class User extends Authenticatable
{   
    use SoftDeletes;
    
    use Notifiable;
    public function isAdmin()
    {
        return Auth::user()->role->name == 'admin';
    }
    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }
    
    public function competence()
    {

        return $this->belongsToMany('App\Competence', 'competence_user')->using('App\CompetenceUser')->withPivot('value');
    }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

