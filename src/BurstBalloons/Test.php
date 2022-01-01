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
    }
}
