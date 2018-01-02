<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertGreaterThan(0,$crawler->filter('h1')->count());
        $this->assertContains('Welcome to Symfony', $crawler->filter('.container h1')->text());

        $this->assertGreaterThan(0,$crawler->filter('html:contains("Your application is now ready")')->count());

        // go to bitcoin text price
        $link = $crawler
            ->filter('#left-menu a:contains("Bitcoin")') // find all links with the text "Bitcoin"
            //->eq(1) // select the second link in the list
            ->link()
        ;

        $crawler = $client->click($link);

        // checking for Bitcoin price h1
        $this->assertContains('Bitcoin Price', $crawler->filter('.container h1')->text());

        // checking for 3 currency columns
        $this->assertEquals(3,$crawler->filter('.bitcoin-table h3')->count());

    }
}
