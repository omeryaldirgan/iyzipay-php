<?php

namespace Iyzipay\Tests;

use Iyzipay\ApiResource;
use Iyzipay\DefaultHttpClient;
use Iyzipay\Request;

class ApiResourceTest extends \PHPUnit_Framework_TestCase
{
    public function test_should_create_default_http_client()
    {
        $httpClient = ApiResource::httpClient();

        $this->assertInstanceOf(get_class(new DefaultHttpClient()), $httpClient);
    }
}