<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function covid()
  {
    $client = new Client();
    // $url = "https://coronavirusapifr.herokuapp.com/data/live/france";
    $url = "https://data.opendatasoft.com/api/records/1.0/search/?dataset=donnees-hospitalieres-covid-19-dep-france%40public&facet=date&facet=region_min&facet=nom_dep_min&timezone=Europe%2FParis";



    $response = $client->request('GET', $url, [
      'verify'  => false,
    ]);

    if (json_decode($response->getBody())) {
      $responseBody = json_decode($response->getBody(), true);
    } else {
      return view('dashboard');
    }

    return view('dashboard', compact('responseBody'));
  }
}
