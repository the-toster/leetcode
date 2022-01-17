<?php

declare(strict_types=1);

namespace TheToster\Leetcode\DpEasy\IsSubsequence;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(true, $s->isSubsequence('abc', 'ahbgdc'));
    }
}
