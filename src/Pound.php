<?php declare(strict_types=1);
namespace ClansOfCaledonia;

final class Pound
{
    /**
     * @var int
     */
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function addPound(Pound $pound): Pound
    {
        return new Pound($this->amount + $pound->amount());
    }

    public function addAmount(int $value): Pound
    {
        return new Pound($this->amount + $value);
    }

    public function subPound(Pound $pound): Pound
    {
        return new Pound($this->amount - $pound->amount());
    }

    public function subValue(int $value): Pound
    {
        return new Pound($this->amount - $value);
    }

    public function multiplyPound(Pound $pound): Pound
    {
        return new Pound($this->amount * $pound->amount());
    }

    public function multiplyValue(int $value): Pound
    {
        return new Pound($this->amount * $value);
    }

    public function diffPound(Pound $pound): Pound
    {
        return new Pound($this->amount / $pound->amount());
    }

    public function diffValue(int $value): Pound
    {
        return new Pound($this->amount / $value);
    }
}
