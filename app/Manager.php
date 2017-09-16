<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    
    public function city()
    {
    	return $this->belongsTo('App\City', 'city_id', 'id');
    }
}
