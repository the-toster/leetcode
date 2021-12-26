<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Median;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $solution = new Solution();
        $this->assertEquals(1, $solution->findMedianSortedArrays([], [1]));
        $this->assertEquals(2.5, $solution->findMedianSortedArrays([1, 2], [3, 4]));
        $this->assertEquals(2, $solution->findMedianSortedArrays([1, 3], [2]));
    }
}
