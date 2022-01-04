<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\HouseRobber;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(4, $s->rob([1, 2, 3, 1]));
        $this->assertEquals(12, $s->rob([2, 7, 9, 3, 1]));
        $this->assertEquals(2, $s->rob([2, 1, 1, 2]));
    }
}
