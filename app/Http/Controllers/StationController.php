<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;

class StationController extends Controller
{
    public function show(Station $station) {

        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://api.gios.gov.pl/pjp-api/rest/aqindex/getIndex/' . $station->id);
        $response = $request->getBody()->getContents();

        $data = collect(json_decode($response, true));
        
        return view('station.show', compact('data'));
            
    }
}
