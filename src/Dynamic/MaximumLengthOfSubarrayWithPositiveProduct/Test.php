<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MaximumLengthOfSubarrayWithPositiveProduct;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();

        $this->assertEquals(4, $s->getMaxLen([1, -2, -3, 4]));
        $this->assertEquals(3, $s->getMaxLen([0, 1, -2, -3, -4]));
        $this->assertEquals(2, $s->getMaxLen([-1, -2, -3, 0, 1]));
    }
}
