<?php declare(strict_types=1);
namespace ClansOfCaledonia;

final class Market
{
    /** @var PriceList $priceList */
    protected $priceList;

    public function __construct()
    {
        $this->priceList = PriceList::fromList(
            new Pound(3),
            new Pound(4),
            new Pound(5),
            new Pound(5),
            new Pound(6),
            new Pound(6),
            new Pound(7),
            new Pound(7),
            new Pound(8),
            new Pound(8)
        );
    }
    public function priceFor(Good $milk): Pound
    {
        return $this->priceList->current();
    }

    public function sellTo(Offer $offer): Pound
    {
        $pound = $this->priceFor($offer->good())->multiplyValue($offer->amount()->amount());

        $this->priceList->decrease();

        return $pound;
    }
}
