<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SymptomesController extends Controller
{
    public function treatData(Request $symptomes)
    {
        return 'je suis passé dans le traitement';
    }
}