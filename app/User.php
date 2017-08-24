<?php

namespace App;

use App\Models\Payment;
use Illuminate\Support\Facades\Password;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function payments()
    {
        return $this->hasMany(Payment::class);
    }


    public function generateToken()
    {
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
