<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class SymptomesController extends Controller
{
    public function treatData(Request $data)
    {
        try {
            $symptomes = $data['symptomes'];

            $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/userSymptomes.txt", "wb");
            fwrite($fp, $symptomes);
            fclose($fp);

            $res = exec("python3 {$_SERVER['DOCUMENT_ROOT']}/traitement.py");

            return $res;
        } catch (Exception $err) {
            return `error at: $err`;
        }
    }
}
