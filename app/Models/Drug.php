<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'drugs';

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'label',
        'description',
    ];

    public static function getAllDrugs()
    {
        return Drug::all();
    }
}
