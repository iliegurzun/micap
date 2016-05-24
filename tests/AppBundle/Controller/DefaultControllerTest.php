<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/admin.json');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        dump($client->getResponse()->getContent());
    }
}
