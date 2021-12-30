<?php

declare(strict_types=1);

namespace TheToster\Leetcode\MergeKSortedLists;


use PhpParser\Node\Scalar\MagicConst\Line;
use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_merge(): void
    {
        $s = new Solution();
        $node = new ListNode(1);
        $this->assertEquals($node, $s->mergeKLists([$node]));

        $this->assertEquals(
            $this->arrayToList([1, 1, 2, 3, 4, 4, 5, 6]),
            $s->mergeKLists(
                [
                    $this->arrayToList([1, 4, 5]),
                    $this->arrayToList([1, 3, 4]),
                    $this->arrayToList([2, 6])
                ]
            )
        );
    }

    private function arrayToList(array $arr): ListNode
    {
        if (count($arr) < 1) {
            throw new \InvalidArgumentException();
        }

        $r = null;
        foreach ($arr as $item) {
            if ($r) {
                $r->next = new ListNode($item);
            } else {
                $r = new ListNode($item);
            }
        }
        return $r;
    }
}
