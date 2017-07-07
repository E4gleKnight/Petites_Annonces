<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConnexionControllerTest extends WebTestCase
{
    public function testConnect()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/connect');
    }

}
