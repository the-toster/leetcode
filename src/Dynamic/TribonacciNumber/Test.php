<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\TribonacciNumber;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $this->assertEquals(1389537, (new Solution())->tribonacci(25));
    }
}
