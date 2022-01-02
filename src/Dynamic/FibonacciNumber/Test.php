<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\FibonacciNumber;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(3, $s->fib(4));
    }
}
