<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MaximumScoreFromPerformingMultiplicationOperations;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(102, $s->maximumScore([-5, -3, -3, -2, 7, 1], [-10, -5, 3, 4, 6]));
        $this->assertEquals(14, $s->maximumScore([1, 2, 3], [3, 2, 1]));
    }
}
