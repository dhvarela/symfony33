<?php

namespace CoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/coin")
     */
    public function coinAction()
    {
        return $this->render('CoinBundle:Default:coin.html.twig');
    }
}
