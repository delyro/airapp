<?php

use Illuminate\Database\Seeder;
use App\City;
use App\Station;

class CitiesAndStationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://api.gios.gov.pl/pjp-api/rest/station/findAll');
        $response = $request->getBody()->getContents();

        $data = collect(json_decode($response, true));
        
        $data->each(function ($item, $key) {

            if($item['city']) {
                City::firstOrCreate([
                    'id' => $item['city']['id'],
                    'name' => $item['city']['name'],
                ]);
            }

            Station::create([
                'id' => $item['id'],
                'city_id' => $item['city']['id'] ?? null,
                'name' => $item['stationName'],
                'addressStreet' => $item['addressStreet']
            ]);
        });
    }
}
