<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\BestTimeToBuyAndSellStockWithTransactionFee;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(4, $s->maxProfit([2, 1, 4, 4, 2, 3, 2, 5, 1, 2], 1));
        $this->assertEquals(0, $s->maxProfit([9, 8, 7, 1, 2], 3));
        $this->assertEquals(8, $s->maxProfit([1, 3, 2, 8, 4, 9], 2));
        $this->assertEquals(6, $s->maxProfit([1, 3, 7, 5, 10, 3], 3));
    }
}
