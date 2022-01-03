<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\ClimbingStairs;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(2, $s->climbStairs(2));
        $this->assertEquals(3, $s->climbStairs(3));
    }
}
