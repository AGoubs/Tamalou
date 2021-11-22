<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'doctors';

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'name',
        'gender',
        'email',
    ];

    public static function getDoctorById($doctorId)
    {
        return Doctor::where('id', $doctorId)->first();
    }
}
