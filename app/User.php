<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','image','gender','address', 'phone', 'dob', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function company(){
        return $this->hasOne(Company::class);
    }

    public function appliedProgram(){
        return \DB::table('user_program')->where('user_id', $this->id)->get();
    }

    public function checkApplied($val){
        $programs = $this->appliedProgram();

        foreach($programs as $p):
            if($p->program_id == $val)
                return true;
        endforeach;
        return false;
    }

    public function hasCompany(){
        return \DB::table('companies')->where('user_id', $this->id)->get();
    }
}
