<?php


namespace AppBundle\ValueObject;

class Currencies
{
    private $rank;

    private $name;

    private $priceUsd;

    private $priceBtc;

    private $units;

    private $totalPriceUsd;

    private $totalPriceBtc;

    private $percent;


    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param mixed $rank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPriceUsd()
    {
        return $this->priceUsd;
    }

    /**
     * @param mixed $priceUsd
     */
    public function setPriceUsd($priceUsd)
    {
        $this->priceUsd = $priceUsd;
    }

    /**
     * @return mixed
     */
    public function getPriceBtc()
    {
        return $this->priceBtc;
    }

    /**
     * @param mixed $priceBtc
     */
    public function setPriceBtc($priceBtc)
    {
        $this->priceBtc = $priceBtc;
    }

    /**
     * @return mixed
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param mixed $units
     */
    public function setUnits($units)
    {
        $this->units = $units;
    }

    /**
     * @return mixed
     */
    public function getTotalPriceUsd()
    {
        return $this->totalPriceUsd;
    }

    /**
     * @param mixed $totalPriceUsd
     */
    public function setTotalPriceUsd($totalPriceUsd)
    {
        $this->totalPriceUsd = $totalPriceUsd;
    }

    /**
     * @return mixed
     */
    public function getTotalPriceBtc()
    {
        return $this->totalPriceBtc;
    }

    /**
     * @param mixed $totalPriceBtc
     */
    public function setTotalPriceBtc($totalPriceBtc)
    {
        $this->totalPriceBtc = $totalPriceBtc;
    }



    /**
     * @return mixed
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param mixed $percent
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
    }


}