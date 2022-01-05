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
        $this->assertEquals(9, $s->deleteAndEarn([8, 3, 4, 7, 6, 6, 9, 2, 5, 8, 2, 4, 9, 5, 9, 1, 5, 7, 1, 4]));
    }

}
