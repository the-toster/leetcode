<?php

declare(strict_types=1);

namespace TheToster\Leetcode\PairsOfSongsWithTotalDurationsDivisibleBy60;


final class Test extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(3, $s->numPairsDivisibleBy60([30, 20, 150, 100, 40]));
        $this->assertEquals(3, $s->numPairsDivisibleBy60([60, 60, 60]));
        $this->assertEquals(1, $s->numPairsDivisibleBy60([20, 40]));
    }
}
