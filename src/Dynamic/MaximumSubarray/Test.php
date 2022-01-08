<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MaximumSubarray;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(6, $s->maxSubArray([-2, 1, -3, 4, -1, 2, 1, -5, 4]));
        $this->assertEquals(1, $s->maxSubArray([1]));
        $this->assertEquals(23, $s->maxSubArray([5, 4, -1, 7, 8]));
    }
}
