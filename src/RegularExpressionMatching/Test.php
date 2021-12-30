<?php

declare(strict_types=1);

namespace TheToster\Leetcode\RegularExpressionMatching;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_match(): void
    {
        $solution = new Solution();

        $this->assertFalse($solution->isMatch('aa', 'a'));
        $this->assertTrue($solution->isMatch('aa', 'a*'));
        $this->assertTrue($solution->isMatch('ab', '.*'));
        $this->assertTrue($solution->isMatch('aab', 'c*a*b'));
        $this->assertTrue($solution->isMatch('aaa', 'a*a'));
    }
}
