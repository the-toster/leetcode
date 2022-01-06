<?php

declare(strict_types=1);

namespace TheToster\Leetcode\CarPooling;


final class Test extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(false, $s->carPooling([[2, 1, 5], [3, 3, 7]], 4));
        $this->assertEquals(true, $s->carPooling([[2, 1, 5], [3, 3, 7]], 5));
    }
}
