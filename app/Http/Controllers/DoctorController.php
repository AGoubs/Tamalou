<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function getDoctor($id){
        Doctor::getDoctorById($id);
    }
}
