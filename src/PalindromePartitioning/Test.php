<?php

declare(strict_types=1);

namespace TheToster\Leetcode\PalindromePartitioning;


final class Test extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals([["a", "a", "b"], ["aa", "b"]], $s->partition('aab'));
        $this->assertEquals([["a"]], $s->partition('a'));
        $this->assertEquals([["b", "b"], ["bb"]], $s->partition('bb'));
    }
}
