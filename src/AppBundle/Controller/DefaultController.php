<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Currency;
use AppBundle\Util\Apicall;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:default:index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/text/bitcoin-price", name="text-bitcoin-price")
     */
    public function textBitcoinAction(Request $request)
    {
        $url = $this->getParameter('bitcoin_api_price_url');

        $apiCall = new Apicall();
        $apiResponse = $apiCall->CallAPI('GET',$url);

        $data = json_decode($apiResponse,true);

        if ($data && isset($data['bpi'])) {
            return $this->render('AppBundle:default:alfa.html.twig', [
                'data' => $data,

            ]);
        } else {
            throw $this->createNotFoundException($this->get('translator')->trans('app.data_not_available'));
        }
    }

    /**
     * @Route("/json/bitcoin-price", name="json-bitcoin-price")
     */
    public function jsonBitcoinAction(Request $request)
    {
        $url = $this->getParameter('bitcoin_api_price_url');

        $apiCall = new Apicall();
        $apiResponse = $apiCall->CallAPI('GET',$url);

        $JSONresponse = new JsonResponse($apiResponse);

        return $JSONresponse;
    }

    /**
     * @Route("/my-wallet/list", name="my_wallet")
     */
    public function myWalletAction(Request $request)
    {
        $apiurl = $this->getParameter('api_coinmarketcap');

        $apiCall = new Apicall();
        $apiResponse = $apiCall->CallAPI('GET',$apiurl);

        $data = json_decode($apiResponse,true);

        $em = $this->getDoctrine()->getManager();

        $currencies = $em->getRepository('AppBundle:Currency')->findAll();

        foreach($currencies as $c) {
            if (!$c instanceof Currency) {
                continue;
            }

            $slug = $c->getSlug();

            foreach($data as $item) {
                if ($item['id'] == $slug) {
                    $c->setPriceBtc($item['price_btc']);
                    $c->setPriceUsd($item['price_usd']);
                    $em->persist($c);
                    break;
                }
            }
        }

        $em->flush();

        $currencies = $em->getRepository('AppBundle:Currency')->findAll();

        return $this->render('AppBundle:default:my_wallet.html.twig', [
            'data'          => $data,
            'currencies'    => $currencies
        ]);
    }
}
