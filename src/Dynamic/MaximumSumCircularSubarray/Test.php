<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MaximumSumCircularSubarray;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(3, $s->maxSubarraySumCircular([1, -2, 3, -2]));
        $this->assertEquals(1, $s->maxSubarraySumCircular([1]));
        $this->assertEquals(-2, $s->maxSubarraySumCircular([-2]));
        $this->assertEquals(18, $s->maxSubarraySumCircular([9, -4, -7, 9]));
    }
}
