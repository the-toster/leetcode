<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\BestTimeToBuyAndSellStockWithCooldown;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(3, $s->maxProfit([1, 2, 3, 0, 2]));
        $this->assertEquals(20, $s->maxProfit([1, 11, 1, 21]));
    }
}
