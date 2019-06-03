<?php declare(strict_types=1);

namespace ClansOfCaledonia;

use ClansOfCaledonia\Good\Bread;
use ClansOfCaledonia\Good\Cheese;
use ClansOfCaledonia\Good\Milk;
use ClansOfCaledonia\Good\Wheat;
use ClansOfCaledonia\Good\Whisky;
use ClansOfCaledonia\Good\Wool;

class PriceTable
{
    /** @var array $table */
    protected $table;

    public function __construct()
    {
        $this->table[Bread::class] = PriceListBuilder::breadPrices();

        $this->table[Cheese::class] = PriceListBuilder::cheesePrices();

        $this->table[Milk::class] = PriceListBuilder::milkPrices();

        $this->table[Wheat::class] = PriceListBuilder::wheatPrices();

        $this->table[Whisky::class] = PriceListBuilder::whiskyPrices();

        $this->table[Wool::class] = PriceListBuilder::woolPrices();
    }

    public function getPriceListFor(string $goodFqcn): PriceList
    {
        if (array_key_exists($goodFqcn, $this->table)) {
            return $this->table[$goodFqcn];
        }

        throw new \Exception(sprintf('No good "%s" found', $goodFqcn));
    }
}
