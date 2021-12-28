<?php

declare(strict_types=1);

namespace TheToster\Leetcode\NumberCompliment;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $this->assertEquals(2, (new Solution())->findComplement(5));
    }
}
