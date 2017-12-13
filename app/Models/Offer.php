<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Offer extends Model
{
	use CrudTrait;
	
    protected $fillable = ['code', 'valid_till', 'tokens'];
}
