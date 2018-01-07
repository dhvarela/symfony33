<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CurrencyRepository")
 */
class Currency
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=100, unique=true)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="price_usd", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $priceUsd;

    /**
     * @var string
     *
     * @ORM\Column(name="price_btc", type="decimal", precision=10, scale=8, nullable=true)
     */
    private $priceBtc;

    /**
     * @var float
     *
     * @ORM\Column(name="units", type="float", precision=10, scale=8, nullable=true)
     */
    private $units;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer", nullable=true)
     */
    private $rank;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Currency
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Currency
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set priceUsd
     *
     * @param string $priceUsd
     *
     * @return Currency
     */
    public function setPriceUsd($priceUsd)
    {
        $this->priceUsd = $priceUsd;

        return $this;
    }

    /**
     * Get priceUsd
     *
     * @return string
     */
    public function getPriceUsd()
    {
        return $this->priceUsd;
    }

    /**
     * Set priceBtc
     *
     * @param string $priceBtc
     *
     * @return Currency
     */
    public function setPriceBtc($priceBtc)
    {
        $this->priceBtc = $priceBtc;

        return $this;
    }

    /**
     * Get priceBtc
     *
     * @return string
     */
    public function getPriceBtc()
    {
        return $this->priceBtc;
    }

    /**
     * Set units
     *
     * @param float $units
     *
     * @return Currency
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return float
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     *
     * @return Currency
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }
}

