<?php

namespace App\Helpers;

use GuzzleHttp;

class GoogleHelpers
{
    private $client;

    public function __construct()
    {
        $this->client = new GuzzleHttp\Client(['base_uri' => config('services.google-recaptcha.url')]);
    }

    /**
    * Makes a request to verify the user is a valid user.
    *
    * @param string $response The 'g-recaptcha-response' passed from the form.
    * @return array
    */
    public function verifyCaptcha($response)
    {
        try{
            $result = $this->client->post('siteverify', [
                'form_params' => [
                    'secret' => config('services.google-recaptcha.secret'),
                    'response' => $response
                ]
            ]);

            return json_decode($result->getBody()->getContents());
        }
        catch(\Exception $e){
            return $e;
        }
    }
}
