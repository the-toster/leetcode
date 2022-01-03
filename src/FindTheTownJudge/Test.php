<?php

declare(strict_types=1);

namespace TheToster\Leetcode\FindTheTownJudge;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(2, $s->findJudge(2, [[1, 2]]));
        $this->assertEquals(3, $s->findJudge(3, [[1, 3], [2, 3]]));
        $this->assertEquals(-1, $s->findJudge(3, [[1, 3], [2, 3], [3, 1]]));
    }
}
