<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Quiz extends Model
{
	use CrudTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'level'
    ];

    public function questions()
    {
    	return $this->hasMany(QuizQuestion::class);
    }

    public function getPoints()
    {
    	return $this->questions()->sum('points');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimeStamps();;
    }

    
}
