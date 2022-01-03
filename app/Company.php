<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
    'name',
    'img',
    'address',
    'established_date',
    'contact',
    'email'
];
	public function user(){
	    return $this->hasOne(User::class);
	   }

    public static function name($val)
    {
        $con  = self::where('id', $val)->get();
        return count($con) > 0 ? $con[0]->name : "";
    }
}
