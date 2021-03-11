<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Shipping extends Model
{
    protected $fillable = ['user_id', 'title','title_ar', 'subtitle', 'price','price_out'];

    public $timestamps = false;


    public function getRealShippingPrice()
    {
    	if(Auth::user()->city != 'Jeddah'){
    		return $this->price_out ;
    	}
    	
    	return $this->price ;
    }

}