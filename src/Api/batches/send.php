<?php

/**
 * SINCH API PHP SDK
 *
 *  Version: 0.0.1


 */

namespace SINCH\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;


class Batches
{
    protected ClientInterface $client;

    protected Configuration $config;

    protected HeaderSelector $headerSelector;

    public function __construct(

    ) 

    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     */
    public function Send(): 
    {
       
    }


 

    /**
     * @param array<string, string> $query
     */
    protected function buildRequest(
        string $httpMethod,
        string $resourcePath,
        ?string $body = null,
        array $query = [],
        string $contentType = 'application/json',
    ): Request {
        $headers = $this->headerSelector->selectHeaders(
            accept: ['application/json'],
            contentType: $contentType,
            isMultipart: false
        );
        $headers['User-Agent'] = $this->config->getUserAgent();

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $query = ObjectSerializer::buildQuery($query);

 
    }
}
