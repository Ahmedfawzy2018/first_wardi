<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session ;
class Blog extends Model
{
    protected $fillable = ['title','title_ar','category_id', 'details', 'details_ar','photo', 'source', 'views','updated_at', 'status','meta_tag','meta_description','tags'];

    protected $dates = ['created_at'];

    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\BlogCategory','category_id')->withDefault(function ($data) {
			foreach($data->getFillable() as $dt){
				$data[$dt] = __('Deleted');
			}
		});
    }   

    public function nameLang()
    {
        $lang = Session::get('language') ;

        if($lang == '1'){
            return $this->title ;
        }elseif($lang == '2'){
            return $this->title_ar ;
        }

        return $this->title_ar ;

    }

    public function detailsLang()
    {
        $lang = Session::get('language') ;

        if($lang == '1'){
            return $this->details ;
        }elseif($lang == '2'){
            return $this->details_ar ;
        }

        return $this->details_ar ;

    } 

}
