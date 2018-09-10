<?php

namespace Kielabokkie;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Ipdata
{
    const API_ENDPOINT = 'https://api.ipdata.co';

    /** @var \GuzzleHttp\Client */
    private $client;

    /** @var string */
    private $apiKey;

    /**
     * Create a IpData instance.
     *
     * @param string $apiKey
     */
    public function __construct($apiKey = null)
    {
        $options['base_uri'] = self::API_ENDPOINT;

        $this->apiKey = $apiKey;

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

        if ($this->apiKey !== null) {
            $uri = sprintf('%s?api-key=%s', $uri, $this->apiKey);
        }

        try {
            $response = $this->client->get($uri);

            return json_decode($response->getBody());
        } catch (ClientException $e) {
            throw $e;
        }
    }
}
