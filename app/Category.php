<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function documents()
    {
    	return $this->hasMany('App\Document', 'category_id', 'id');
    }

}
