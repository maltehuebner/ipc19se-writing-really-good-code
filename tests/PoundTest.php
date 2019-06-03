<?php declare(strict_types=1);
namespace ClansOfCaledonia;

use PHPUnit\Framework\TestCase;

/**
 * @covers \ClansOfCaledonia\Pound
 */
final class PoundTest extends TestCase
{
    public function testHasAmount(): void
    {
        $amount = 1234;

        $p = new Pound($amount);

        $this->assertSame($amount, $p->amount());
    }

    public function testAddPound(): void
    {
        $myPound = new Pound(9);
        $yourPound = new Pound(3);

        $this->assertEquals(new Pound(12), $myPound->addPound($yourPound));
    }

    public function testSubPound(): void
    {
        $myPound = new Pound(9);
        $yourPound = new Pound(3);

        $this->assertEquals(new Pound(6), $myPound->subPound($yourPound));
    }

    public function testMultiplyPound(): void
    {
        $myPound = new Pound(9);
        $yourPound = new Pound(3);

        $this->assertEquals(new Pound(27), $myPound->multiplyPound($yourPound));
    }

    public function testDiffPound(): void
    {
        $myPound = new Pound(9);
        $yourPound = new Pound(3);

        $this->assertEquals(new Pound(3), $myPound->diffPound($yourPound));
    }
}
