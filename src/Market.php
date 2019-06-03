<?php declare(strict_types=1);
namespace ClansOfCaledonia;

use ClansOfCaledonia\Good\Good;

final class Market
{
    /** @var PriceTable $priceTable */
    protected $priceTable;

    public function __construct()
    {
        $this->priceTable = new PriceTable();
    }

    public function priceFor(Good $good): Pound
    {
        return $this->priceTable->getPriceListFor(get_class($good))->current();
    }

    public function sellTo(Offer $offer): Pound
    {
        $pound = $this->priceFor($offer->good())->multiplyValue($offer->amount()->amount());

        $this->priceTable->getPriceListFor(get_class($offer->good()))->decrease();

        return $pound;
    }

    public function buyFrom(Offer $offer): Pound
    {
        $pound = $this->priceFor($offer->good())->multiplyValue($offer->amount()->amount());

        $this->priceTable->getPriceListFor(get_class($offer->good()))->increase();

        return $pound;
    }
}
