<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testConnect()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/connect');
    }

    public function testLogout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/logout');
    }

    public function testAddpost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addPost');
    }

}
