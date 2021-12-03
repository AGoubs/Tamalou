<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Drug;

class DrugController extends Controller
{
    public function getDrugs(){
        Drug::getAllDrugs();
    }
}