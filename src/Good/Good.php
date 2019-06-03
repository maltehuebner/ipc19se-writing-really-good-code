<?php declare(strict_types=1);
namespace ClansOfCaledonia\Good;

abstract class Good
{
    public static function bread(): self
    {
        return new Bread;
    }

    public static function cheese(): self
    {
        return new Cheese;
    }

    public static function milk(): self
    {
        return new Milk;
    }

    public static function wheat(): self
    {
        return new Wheat;
    }

    public static function whisky(): self
    {
        return new Whisky;
    }

    public static function wool(): self
    {
        return new Wool;
    }

    public function isBread(): bool
    {
        return false;
    }

    public function isCheese(): bool
    {
        return false;
    }

    public function isMilk(): bool
    {
        return false;
    }

    public function isWheat(): bool
    {
        return false;
    }

    public function isWhisky(): bool
    {
        return false;
    }

    public function isWool(): bool
    {
        return false;
    }
}
