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
        $this->assertEquals(15, $s->maxScoreSightseeingPair([7, 7, 1, 6, 1, 11]));
        $this->assertEquals(16, $s->maxScoreSightseeingPair([2, 7, 7, 2, 1, 7, 10, 4, 3, 3]));
        $this->assertEquals(11, $s->maxScoreSightseeingPair([8, 1, 5, 2, 6]));
        $this->assertEquals(2, $s->maxScoreSightseeingPair([1, 2]));
        $this->assertEquals(1989, $s->maxScoreSightseeingPair(json_decode(file_get_contents(__DIR__ . '/big.json'))));
        $this->assertEquals(
            1997,
            $s->maxScoreSightseeingPair(json_decode(file_get_contents(__DIR__ . '/bigger.json')))
        );
    }
}
