<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'link', 'category_id', 'logo_path'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
