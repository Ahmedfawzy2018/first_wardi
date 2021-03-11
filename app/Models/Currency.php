<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session ;
class Currency extends Model
{
    protected $fillable = ['name', 'sign', 'value'];
    public $timestamps = false;

    public function nameLang(){

    	$lang = Session::get('language') ;

        if($lang == '2'){
            return $this->name." " ; 
        }elseif($lang == '1'){
            return $this->sign." " ;
        }

    	return $this->name." " ;

    }
}
