<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	use CrudTrait;

    protected $fillable = ['name', 'website', 'logo_path', 'access_token'];

}