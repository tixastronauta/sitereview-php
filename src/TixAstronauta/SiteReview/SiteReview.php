<?php

namespace TixAstronauta\SiteReview;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use TixAstronauta\SiteReview\Exception\InvalidApiResponseException;

class SiteReview
{

    /** @var ClientInterface */
    public $client;

    const API_URL = 'http://sitereview.bluecoat.com/rest/categorization';

    /**
     * SiteReview constructor.
     *
     * @param $client
     */
    public function __construct($client = null)
    {
        if (is_null($client)) {
            $client = new Client();
        }

        $this->client = $client;
    }

    /**
     * Returns given website's category
     *
     * @param string $url Website URL
     *
     * @throws InvalidApiResponseException
     * @return string Category
     */
    public function getCategory($url)
    {
        $response = $this->client->request('POST', self::API_URL, ['body' => "url={$url}"]);

        if (200 != $response->getStatusCode()) {
            throw new InvalidApiResponseException();
        }

        $body = $response->getBody();
        $data = json_decode($body, true);

        if ( ! array_key_exists('categorization', $data)) {
            throw new InvalidApiResponseException();
        }

        return self::_normalizeCategorization($data['categorization']);
    }

    /**
     * Strips HTML tags and extra categories from given 'categorization'
     *
     * @param string $categorization
     *
     * @return string
     */
    public static function _normalizeCategorization($categorization)
    {
        $categorization = strip_tags($categorization);
        $categorization = explode(' and ', $categorization);

        return $categorization[0];
    }


}