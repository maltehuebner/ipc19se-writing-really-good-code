<?php declare(strict_types=1);
namespace ClansOfCaledonia\Good;

final class Milk extends Good
{
    public function isMilk(): bool
    {
        return true;
    }
}
