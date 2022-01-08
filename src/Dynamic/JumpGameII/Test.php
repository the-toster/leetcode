<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\JumpGameII;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(0, $s->jump([0]));
        $this->assertEquals(2, $s->jump([2, 3, 1, 1, 4]));
        $this->assertEquals(2, $s->jump([2, 3, 0, 1, 4]));
    }
}
