<?php declare(strict_types=1);
namespace ClansOfCaledonia\Good;

final class Whisky extends Good
{
    public function isWhisky(): bool
    {
        return true;
    }
}
