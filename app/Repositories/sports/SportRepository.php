<?php


namespace App\Repositories\sports;


use App\Repositories\BaseRepository;
use GuzzleHttp\Client;

class SportRepository extends BaseRepository
{

    public function getAllSports()
    {
        $client = new Client();
        $response = $client->request('GET','https://www.thesportsdb.com/api/v1/json/1/all_sports.php');
        if ($response->getStatusCode() == 200) {
            $sports  = $response->getBody()->getContents();
            $sports = json_decode($sports);
            foreach ($sports as $sport)
            {
                return ($sport);

            }

        }

    }

}
