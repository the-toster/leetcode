<?php

declare(strict_types=1);

namespace TheToster\Leetcode\ReverseNodesInKgroup;


use TheToster\Leetcode\ListNode;

final class Test extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $inList = ListNode::fromArray([1, 2, 3, 4, 5]);
        $k = 2;
        $outList = ListNode::fromArray([2, 1, 4, 3, 5]);
        $this->assertEquals($outList, $s->reverseKGroup($inList, $k));
    }
}
