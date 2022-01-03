<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable= [
    	'name',
    	'level',
    	'description',
    	'categories',
    	'duration_month',
    	'start_date',
    	'end_date',
    	'shift'
    ];


    public function companyName(){
        return \App\Company::name($this->company_id);
    }

    public function comp(){
        return \App\Company::find($this->company_id);
    }
    public function category(){
        return \App\Category::find($this->category_id);
    }

    public static function ofCompany($company){
        $programs = [];
        foreach($company as $c):
            foreach(self::where('company_id', $c->id)->get() as $p):
                $programs[] = $p;
            endforeach;
        endforeach;
        return $programs;
    }
}

