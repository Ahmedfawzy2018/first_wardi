<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;
class Page extends Model
{
    protected $fillable = ['title', 'slug', 'details', 'details_ar','meta_tag','meta_description'];
    public $timestamps = false;

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
