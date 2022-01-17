<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\WordBreak;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(true, $s->wordBreak("leetcode", ["leet", "code"]));
        $this->assertEquals(true, $s->wordBreak("applepenapple", ["apple", "pen"]));
        $this->assertEquals(false, $s->wordBreak("catsandog", ["cats", "dog", "sand", "and", "cat"]));
    }
}
