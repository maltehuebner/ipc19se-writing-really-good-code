<?php declare(strict_types=1);
namespace ClansOfCaledonia;

final class PriceListBuilder
{
    public static function breadPrices(): PriceList
    {
        return PriceList::fromList(
            new Pound(15),
            new Pound(14),
            new Pound(13),
            new Pound(12),
            new Pound(11),
            new Pound(11),
            new Pound(10),
            new Pound(9),
            new Pound(8),
            new Pound(7)
        );
    }

    public static function cheesePrices(): PriceList
    {
        return PriceList::fromList(
            new Pound(15),
            new Pound(14),
            new Pound(14),
            new Pound(13),
            new Pound(12),
            new Pound(11),
            new Pound(10),
            new Pound(9),
            new Pound(8),
            new Pound(7)
        );
    }

    public static function milkPrices(): PriceList
    {
        return PriceList::fromList(
            new Pound(8),
            new Pound(8),
            new Pound(7),
            new Pound(7),
            new Pound(6),
            new Pound(6),
            new Pound(5),
            new Pound(5),
            new Pound(4),
            new Pound(3)
        );
    }

    public static function wheatPrices(): PriceList
    {
        return PriceList::fromList(
            new Pound(8),
            new Pound(8),
            new Pound(7),
            new Pound(7),
            new Pound(6),
            new Pound(6),
            new Pound(5),
            new Pound(4),
            new Pound(3),
            new Pound(3)
        );
    }

    public static function whiskyPrices(): PriceList
    {
        return PriceList::fromList(
            new Pound(16),
            new Pound(15),
            new Pound(14),
            new Pound(13),
            new Pound(13),
            new Pound(12),
            new Pound(11),
            new Pound(10),
            new Pound(9),
            new Pound(8)
        );
    }

    public static function woolPrices(): PriceList
    {
        return PriceList::fromList(
            new Pound(8),
            new Pound(7),
            new Pound(6),
            new Pound(6),
            new Pound(5),
            new Pound(5),
            new Pound(4),
            new Pound(4),
            new Pound(3),
            new Pound(3)
        );
    }
}
