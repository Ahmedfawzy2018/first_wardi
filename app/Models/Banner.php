<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['photo','link','type','tags','discount_precentage','lang','offer_change'];
    public $timestamps = false;
}

