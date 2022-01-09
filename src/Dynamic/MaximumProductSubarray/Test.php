<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MaximumProductSubarray;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(6, $s->maxProduct([2, 3, -2, 4]));
        $this->assertEquals(0, $s->maxProduct([-2, 0, -1]));
        $this->assertEquals(24, $s->maxProduct([-2, 3, -4]));
    }
}
