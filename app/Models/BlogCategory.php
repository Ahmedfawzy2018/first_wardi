<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session ;
class BlogCategory extends Model
{
    protected $fillable = ['name','name_ar' ,'slug'];
    public $timestamps = false;

    public function blogs()
    {
    	return $this->hasMany('App\Models\Blog','category_id');
    }

    public function setSlugAttribute($value)
    {
    	$this->attributes['slug'] = str_replace(' ', '-', $value);
    }

    public function nameLang()
    {
        $lang = Session::get('language') ;

        if($lang == '1'){
            return $this->name ;
        }elseif($lang == '2'){
            return $this->name_ar ;
        }

        return $this->name_ar ;

    }
}
