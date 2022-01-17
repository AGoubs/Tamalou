<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function covid()
  {
      $client = new Client();
      $url = "https://coronavirusapifr.herokuapp.com/data/live/france";

  
      $response = $client->request('GET', $url, [
          'verify'  => false,
      ]);

      $responseBody = json_decode($response->getBody())[0];

      return view('dashboard', compact('responseBody'));
  }
}
