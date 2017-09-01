<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Store extends Model
{
	use CrudTrait;
    
    protected $fillable = ['name', 'link', 'category_id', 'logo_path'];


    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
