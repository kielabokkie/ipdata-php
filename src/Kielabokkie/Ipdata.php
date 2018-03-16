<?php

namespace Kielabokkie;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Ipdata
{
    const API_ENDPOINT = 'https://api.ipdata.co';

    private $client;

    /**
     * Create a IpData instance.
     *
     * @param string $apiKey
     */
    public function __construct($apiKey = null)
    {
        $options['base_uri'] = self::API_ENDPOINT;

        if ($apiKey !== null) {
            $options['headers'] = ['api-key' => $apiKey];
        }

        $this->client = new Client($options);
    }

    /**
     * Lookup IP data of a given IP address. If no address is passed the API
     * will return the data of the IP address initiating the API request.
     *
     * @param  sting $ip
     * @return stdClass
     */
    public function lookup($ip = null)
    {
        $uri = '/';

        if ($ip !== null) {
            $uri = sprintf('/%s', $ip);
        }

        try {
            $response = $this->client->get($uri);
        } catch (ClientException $e) {
            return $e->getResponse();
        }

        return json_decode($response->getBody());
    }
}
