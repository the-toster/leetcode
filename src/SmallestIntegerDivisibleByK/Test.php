<?php

declare(strict_types=1);

namespace TheToster\Leetcode\SmallestIntegerDivisibleByK;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(-1, $s->smallestRepunitDivByK(2));
        $this->assertEquals(3, $s->smallestRepunitDivByK(3));
        $this->assertEquals(22, $s->smallestRepunitDivByK(23));
    }
}
