<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session ;
class Subcategory extends Model
{
    protected $fillable = ['category_id','name_en','name_ar','slug'];
    public $timestamps = false;

    public function childs()
    {
    	return $this->hasMany('App\Models\Childcategory')->where('status','=',1);
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\Category')->withDefault(function ($data) {
			foreach($data->getFillable() as $dt){
				$data[$dt] = __('Deleted');
			}
		});
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_replace(' ', '-', $value);
    }

    public function attributes() {
        return $this->morphMany('App\Models\Attribute', 'attributable');
    }

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

}
