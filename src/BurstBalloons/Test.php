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

        // take 1.5 minute with naive approach
        // fixed with cache
        $this->assertEquals(1582, $s->maxCoins([7, 9, 8, 0, 7, 1, 3, 5, 5, 2]));

        // but that one is timed out
        $this->assertEquals(3830, $s->maxCoins([8, 2, 6, 8, 9, 8, 1, 4, 1, 5, 3, 0, 7, 7, 0, 4, 2, 2, 5, 5]));
    }
}
