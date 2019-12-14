<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Client;
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
        $client = new Client();
        try {
            $request = $client->get('http://api.gios.gov.pl/pjp-api/rest/station/findAll');
        } catch (BadResponseException $e) {
            $this->command->error("SQL Error: " . $e->getMessage());
            return false;
        }
        
        $response = $request->getBody()->getContents();

        $data = json_decode($response, true);
        
        foreach($data as $key => $item) {

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

        }

    }
}
