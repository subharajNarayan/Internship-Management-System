<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProgram extends Model
{
    protected $table = "user_program";

    public function user(){
        return \App\User::find($this->user_id);
    }
    public function program(){
    	return \App\Program::find($this->program_id);
    }
}
