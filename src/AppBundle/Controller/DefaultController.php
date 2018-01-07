<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Currency;
use AppBundle\Util\Apicall;
use AppBundle\ValueObject\Currencies;
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
        $apiurl = $this->getParameter('api_coinmarketcap')."?limit=250";

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
                if ($item['symbol'] == $slug) {
                    $c->setPriceBtc($item['price_btc']);
                    $c->setPriceUsd($item['price_usd']);
                    $c->setRank($item['rank']);
                    $em->persist($c);
                    break;
                }
            }
        }

        $em->flush();

        $currencies = $em->getRepository('AppBundle:Currency')->findBy([],['rank' => 'ASC']);

        $totalBTC = 0;
        $totalUSD = 0;
        $currenciesObjects = array();

        foreach($currencies as $c) {
            if (!$c instanceof Currency) {
                continue;
            }
            $cur = new Currencies();
            $cur->setRank($c->getRank());
            $cur->setName($c->getName());
            $cur->setPriceUsd($c->getPriceUsd());
            $cur->setPriceBtc($c->getPriceBtc());
            $cur->setUnits($c->getUnits());
            $cur->setTotalPriceBtc($c->getPriceBtc()*$c->getUnits());
            $cur->setTotalPriceUsd($c->getPriceUsd()*$c->getUnits());
            $currenciesObjects[] = $cur;

            $totalBTC = $totalBTC + $cur->getTotalPriceBtc();
            $totalUSD = $totalUSD + $cur->getTotalPriceUsd();
        }

        foreach ($currenciesObjects as $co) {
            if ($co instanceof Currencies) {
                $co->setPercent($co->getTotalPriceUsd() / $totalUSD * 100);
            }
        }

        return $this->render('AppBundle:default:my_wallet.html.twig', [
            'data'          => $data,
            'currencies'    => $currenciesObjects,
            'totalBTC'      => $totalBTC,
            'totalUSD'      => $totalUSD,
        ]);
    }
}
