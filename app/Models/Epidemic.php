<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Epidemic extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'epidemics';

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'label',
        'description',
        "start_period",
        "end_period"
    ];

    protected $casts = [
        'start_period' => 'datetime',
        'end_period' => 'datetime',
    ];

    public static function getEpidemics()
    {
        return Epidemic::all();
    }
}
