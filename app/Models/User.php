<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'name',
        'gender',
        'born_date',
        'weight',
        'height',
        'email',
        'password',
        //'doctor_id',
        'doctor_first_name',
        'doctor_name',
        'doctor_email',
        'doctor_tel',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'born_date' => 'datetime',
    ];

    /*public function doctor()
    {
        return $this->hasOne(Doctor::class,  '_id', 'doctor_id');
    }*/

    public static function getUserById($userId)
    {
        return User::where('_id', $userId)->first();
    }
}
