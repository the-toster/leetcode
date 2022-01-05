<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\DeleteAndEarn;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(6, $s->deleteAndEarn([3, 4, 2]));
        $this->assertEquals(9, $s->deleteAndEarn([2, 2, 3, 3, 3, 4]));
    }

}
