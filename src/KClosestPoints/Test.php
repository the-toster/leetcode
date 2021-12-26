<?php

declare(strict_types=1);

namespace TheToster\Leetcode\KClosestPoints;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve_basic(): void
    {
        $solution = new Solution();
        $this->assertEquals([[-2,2]], $solution->kClosest([[1,3],[-2,2]], 1));
        $this->assertEqualsCanonicalizing([[-2,4],[3,3]], $solution->kClosest([[3,3],[5,-1],[-2,4]], 2));
        $this->assertEqualsCanonicalizing([[-5,4],[4,6]], $solution->kClosest([[-5,4],[-6,-5],[4,6]], 2));
        $this->assertEqualsCanonicalizing([[-4,-7],[-4,-8],[-2,10]], $solution->kClosest([[-2,10],[-4,-8],[10,7],[-4,-7]], 3));
        $this->assertEqualsCanonicalizing([[-2,-6],[-7,-2],[-8,1],[2,8],[10,3]], $solution->kClosest([[-2,-6],[-7,-2],[-9,6],[10,3],[-8,1],[2,8]], 5));
    }
}
