<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\BestSightseeingPair;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(11, $s->maxScoreSightseeingPair([8, 1, 5, 2, 6]));
        $this->assertEquals(2, $s->maxScoreSightseeingPair([1, 2]));
    }
}
