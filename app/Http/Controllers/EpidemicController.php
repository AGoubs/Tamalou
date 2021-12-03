<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Epidemic;

class EpidemicController extends Controller
{
    public function getEpidemics(){
        Epidemic::getEpidemics();
    }

}
