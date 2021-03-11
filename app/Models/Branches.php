<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session ;
class Branches extends Model
{
	public $timestamps = false ;
    protected $fillable = ['name_en', 'name_ar','city_en','city_ar','address_latitude','address_longitude'];

    public function nameLang()
    {
        $lang = Session::get('language') ;

        if($lang == '1'){
            return $this->name_en ;
        }elseif($lang == '2'){
            return $this->name_ar ;
        }

        return $this->name_ar ;

    }

    public function cityLang()
    {
        $lang = Session::get('language') ;

        if($lang == '1'){
            return $this->city_en ;
        }elseif($lang == '2'){
            return $this->city_ar ;
        }

        return $this->city_ar ;
    }

}
