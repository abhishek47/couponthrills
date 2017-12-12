<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referal extends Model
{
    protected $fillable = ['user_id', 'refered_email', 'code', 'used'];
    
}
