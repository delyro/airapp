<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
    
class CityController extends Controller
{
    public function index() {
        
        $cities = City::all();

        return view('city.index', compact('cities'));

    }
    public function show(City $city) {
        
        return view('city.show', [
            'stations' => $city->stations
        ]);
            
    }
}
