<?php declare(strict_types=1);
namespace ClansOfCaledonia;

use PHPUnit\Framework\TestCase;

/**
 * @covers \ClansOfCaledonia\PriceList
 *
 * @uses \ClansOfCaledonia\Pound
 */
final class PriceListTest extends TestCase
{
    protected function createPriceList(): PriceList
    {
        $prices = PriceList::fromList(
            new Pound(1),
            new Pound(2),
            new Pound(3),
            new Pound(4),
            new Pound(5),
            new Pound(6),
            new Pound(7),
            new Pound(8),
            new Pound(9),
            new Pound(10)
        );

        return $prices;
    }

    public function testHasInitialPrice(): void
    {
        $prices = $this->createPriceList();

        $this->assertEquals(new Pound(4), $prices->current());
    }

    public function testPriceListIncreasesPosition(): void
    {
        $prices = $this->createPriceList();

        $prices->increase();

        $this->assertEquals(new Pound(5), $prices->current());
    }

    public function testPriceListDecreasesPosition(): void
    {
        $prices = $this->createPriceList();

        $prices->decrease();

        $this->assertEquals(new Pound(3), $prices->current());
    }
}
