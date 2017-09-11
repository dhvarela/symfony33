<?php

namespace AppBundle\Controller;

use AppBundle\Util\Apicall;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/text/bitcoin-price", name="text-bitcoin-price")
     */
    public function textBitcoinAction(Request $request)
    {
        // replace this example code with whatever you need

        $url = Apicall::BITCOIN_API_PRICE;

        $apiCall = new Apicall();
        $apiResponse = $apiCall->CallAPI('GET',$url);


        $data = json_decode($apiResponse,true);

        return $this->render('AppBundle:default:alfa.html.twig', [
           'data'   => $data,
        ]);
    }

    /**
     * @Route("/json/bitcoin-price", name="json-bitcoin-price")
     */
    public function jsonBitcoinAction(Request $request)
    {
        // replace this example code with whatever you need

        $url = Apicall::BITCOIN_API_PRICE;

        $apiCall = new Apicall();
        $apiResponse = $apiCall->CallAPI('GET',$url);

        $JSONresponse = new JsonResponse($apiResponse);

        return $JSONresponse;
    }
}
