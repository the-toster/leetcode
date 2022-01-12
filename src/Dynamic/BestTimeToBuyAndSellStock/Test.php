<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\BestTimeToBuyAndSellStock;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(5, $s->maxProfit([7, 1, 5, 3, 6, 4]));
        $this->assertEquals(3, $s->maxProfit(json_decode(file_get_contents(__DIR__ . '/big.json'))));
    }
}
