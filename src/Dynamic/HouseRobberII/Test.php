<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\HouseRobberII;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(3, $s->rob([3]));
        $this->assertEquals(3, $s->rob([2, 3]));
        $this->assertEquals(3, $s->rob([2, 3, 2]));
        $this->assertEquals(4, $s->rob([1, 2, 3, 1]));
        $this->assertEquals(3, $s->rob([1, 2, 3]));
        $this->assertEquals(23, $s->rob([3, 6, 9, 12, 14]));
    }
}
