<?php

declare(strict_types=1);

namespace Tests;

use App\Number;
use PHPUnit\Framework\TestCase;

class RomanTest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        include './src/Roman.php';
    }

    public function test1(): void
    {
        $roman = new Number;
        $this->assertSame('I', $roman->toRoman(1));
    }

    public function test2(): void
    {
        $roman = new Number;
        $this->assertSame('II', $roman->toRoman(2));
    }

    public function test3(): void
    {
        $roman = new Number;
        $this->assertSame('III', $roman->toRoman(3));
    }

    public function test4(): void
    {
        $roman = new Number;
        $this->assertSame('IV', $roman->toRoman(4));
    }

    public function test5(): void
    {
        $roman = new Number;
        $this->assertSame('V', $roman->toRoman(5));
    }

    public function test6(): void
    {
        $roman = new Number;
        $this->assertSame('VI', $roman->toRoman(6));
    }

    public function test9(): void
    {
        $roman = new Number;
        $this->assertSame('IX', $roman->toRoman(9));
    }

    public function test27(): void
    {
        $roman = new Number;
        $this->assertSame('XXVII', $roman->toRoman(27));
    }

    public function test48(): void
    {
        $roman = new Number;
        $this->assertSame('XLVIII', $roman->toRoman(48));
    }

    public function test49(): void
    {
        $roman = new Number;
        $this->assertSame('XLIX', $roman->toRoman(49));
    }

    public function test59(): void
    {
        $roman = new Number;
        $this->assertSame('LIX', $roman->toRoman(59));
    }

    public function test93(): void
    {
        $roman = new Number;
        $this->assertSame('XCIII', $roman->toRoman(93));
    }

    public function test141(): void
    {
        $roman = new Number;
        $this->assertSame('CXLI', $roman->toRoman(141));
    }

    public function test163(): void
    {
        $roman = new Number;
        $this->assertSame('CLXIII', $roman->toRoman(163));
    }

    public function test402(): void
    {
        $roman = new Number;
        $this->assertSame('CDII', $roman->toRoman(402));
    }

    public function test575(): void
    {
        $roman = new Number;
        $this->assertSame('DLXXV', $roman->toRoman(575));
    }

    public function test911(): void
    {
        $roman = new Number;
        $this->assertSame('CMXI', $roman->toRoman(911));
    }

    public function test1024(): void
    {
        $roman = new Number;
        $this->assertSame('MXXIV', $roman->toRoman(1024));
    }

    public function test1998(): void
    {
        $roman = new Number;
        $this->assertSame('MCMXCVIII', $roman->toRoman(1998));
    }

    public function test2999(): void
    {
        $roman = new Number;
        $this->assertSame('MMCMXCIX', $roman->toRoman(2999));
    }

    public function test3000(): void
    {
        $roman = new Number;
        $this->assertSame('MMM', $roman->toRoman(3000));
    }

    public function test3890(): void
    {
        $roman = new Number;
        $this->assertSame('MMMDCCCXC', $roman->toRoman(3890));
    }

    public function test3999(): void
    {
        $roman = new Number;
        $this->assertSame('MMMCMXCIX', $roman->toRoman(3999));
    }
}
