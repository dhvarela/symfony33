<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 18/10/17
 * Time: 20:54
 */

namespace Tests\AppBundle\Util;

use AppBundle\Util\Apicall;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ApicallTest extends KernelTestCase
{
    private $container;

    public function testCallAPI()
    {
        self::bootKernel();
        $this->container = self::$kernel->getContainer();

        $api = new Apicall();
        $response = $api->callAPI('GET',$this->container->getParameter('bitcoin_api_price_url'));


        $this->assertContains('"bpi"', $response);

        // TODO - more test checking api response
    }
}