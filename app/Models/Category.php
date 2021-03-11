<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session ;
use App\Models\Product ;
class Category extends Model
{
    protected $fillable = ['name_en','name_ar','slug','photo','is_featured','image'];
    public $timestamps = false;

    public function subs()
    {
    	return $this->hasMany('App\Models\Subcategory')->where('status','=',1);
    }

    public function ProductsCount(){
        return Product::where('category_id',$this->id)->count() ;
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
