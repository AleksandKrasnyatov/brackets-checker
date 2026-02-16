<?php

namespace AleksandKrasnyatov\BracketsChecker\Test;

use AleksandKrasnyatov\BracketsChecker\BracketsChecker;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class BracketsCheckerTest extends TestCase
{
    #[TestWith(['()', true])]
    #[TestWith(['(())', true])]
    #[TestWith(['((())', false])]
    #[TestWith([')(', false])]
    #[TestWith(['(()()()((()))()()()(())()())', true])]
    public function testGoodCases(string $brackets, bool $expected): void
    {
        $checker = new BracketsChecker();
        $this->assertEquals($expected, $checker->check($brackets));
    }

    #[TestWith([''])]
    #[TestWith(['((d)(123f'])]
    public function testBadCases(string $brackets): void
    {
        $this->expectException(RuntimeException::class);
        new BracketsChecker()->check($brackets);
    }
}
