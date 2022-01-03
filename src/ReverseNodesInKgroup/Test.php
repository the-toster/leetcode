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


        $this->assertEquals(
            ListNode::fromArray([3, 2, 1, 4, 5]),
            $s->reverseKGroup(ListNode::fromArray([1, 2, 3, 4, 5]), 3)
        );

        $this->assertEquals(
            ListNode::fromArray([1, 2, 3, 4, 5]),
            $s->reverseKGroup(ListNode::fromArray([1, 2, 3, 4, 5]), 1)
        );

        $this->assertEquals(
            ListNode::fromArray([2, 1]),
            $s->reverseKGroup(ListNode::fromArray([1, 2]), 2)
        );
    }
}
