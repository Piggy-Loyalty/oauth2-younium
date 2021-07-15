<?php

namespace PiggyLoyalty\Oauth2Younium\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class YouniumResourceOwner implements ResourceOwnerInterface
{
    protected $response;

    public function __construct(array $response = [])
    {
        $this->response = $response;
    }

    public function getId()
    {
        return $this->response['id'] ?: null;
    }

    public function toArray()
    {
        return $this->response;
    }
}