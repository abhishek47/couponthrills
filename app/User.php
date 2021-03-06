<?php

namespace App;

use App\User;
use App\Models\Coupon;
use App\Models\Payment;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Password;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use CrudTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tokens'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'coupon_user');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }


    public function generateToken()
    {
        if($this->api_token == null) {

        $token = substr(Password::getRepository()->createNewToken(), 0, 58);

          if (User::where('api_token', '=', $token)->exists()) {
                //Model Found -- call self.
                self::generate($length, $modelClass, $fieldName);
            } else {
                $this->api_token = $token;
                $this->save();
            }
       }
        
    }


    public function solvedQuizzes()
    {
        return $this->belongsToMany(Quiz::class)->withPivot('answers', 'points');
    }

    public function hasSolvedQuiz(Quiz $quiz)
    {

        return $this->solvedQuizzes->contains($quiz);
    }
}
