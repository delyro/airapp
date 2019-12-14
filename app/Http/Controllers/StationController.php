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

        $data = json_decode($response, true);

        return view('station.show', [
            'cityId' => $station->city->id,
            'stCalcDate' => $data['stCalcDate'] ?? null,
            'stIndexLevel' => $data['stIndexLevel']['indexLevelName'] ?? null,
            'no2IndexLevel' => $data['no2IndexLevel']['indexLevelName'] ?? null,
            'coIndexLevel' => $data['coIndexLevel']['indexLevelName'] ?? null,
            'pm10IndexLevel' => $data['pm10IndexLevel']['indexLevelName'] ?? null,
            'pm25IndexLevel' => $data['pm25IndexLevel']['indexLevelName'] ?? null,
            'o3IndexLevel' => $data['o3IndexLevel']['indexLevelName'] ?? null,
            'c6h6IndexLevel' => $data['c6h6IndexLevel']['indexLevelName'] ?? null,
        ]);    
    }
}
