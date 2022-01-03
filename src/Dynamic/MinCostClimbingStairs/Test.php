<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MinCostClimbingStairs;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(15, $s->minCostClimbingStairs([10, 15, 20]));

        $this->assertEquals(6, $s->minCostClimbingStairs([1, 100, 1, 1, 1, 100, 1, 1, 100, 1]));
    }
}
