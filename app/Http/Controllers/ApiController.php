<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function covid()
    {
        $client = new Client();
        $url = "https://data.opendatasoft.com/api/records/1.0/search/?dataset=donnees-hospitalieres-covid-19-dep-france%40public&facet=date&facet=region_min&facet=nom_dep_min&timezone=Europe%2FParis";

        $params = [
            //If you have any Params Pass here
        ];

        $headers = [
            'api-key' => 'eyJhbGciOiJIUzUxMiJ9.eyJ1c2VyIjoiNjFlMTRhYzNiMGJiMjc3NjFiODM3ZjFmIiwidGltZSI6MTY0MjE1NDcxNy45MjcxMjI0fQ.fz7MTHoqg5SE0LUhgNFhxgthH65p5_SbmHKazfdr4p5WbyNckIXehDauDsdZaWqifMDn7DLsK_JhPYnxJprn3Q'
        ];

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            // 'headers' => $headers,
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        dd($responseBody);

        return view('components.api', compact('responseBody'));
    }
}
