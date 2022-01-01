<?php

declare(strict_types=1);

namespace TheToster\Leetcode\BurstBalloons;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(167, $s->maxCoins([3, 1, 5, 8]));

        //1.5 take minute with naive approach
        $this->assertEquals(1582, $s->maxCoins([7, 9, 8, 0, 7, 1, 3, 5, 5, 2]));
    }
}
