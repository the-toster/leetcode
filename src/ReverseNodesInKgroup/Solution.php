<?php

declare(strict_types=1);

namespace TheToster\Leetcode\ReverseNodesInKgroup;


use TheToster\Leetcode\ListNode;

final class Solution
{
    function reverseKGroup(ListNode $head, int $k): ListNode
    {
        $c = $head;
        $toReverse = [];
        $reversed = $lastReversed = $tail = null;
        while ($c->next) {
            $toReverse[] = $c;
            $c = $c->next;
            if (count($toReverse) === $k) {
                //reverse
                for ($i = $k - 1; $i > 0; $i--) {
                    $toReverse[$i]->next = $toReverse[$i - 1];
                }

                //save head of reversed
                if ($reversed === null) {
                    $reversed = $toReverse[$k - 1];
                }

                //connect previously reversed to new part
                if ($tail) {
                    $tail->next = $toReverse[$k - 1];
                } else {
                    $tail = $toReverse[0];
                }

                //connect current tail
                $toReverse[0]->next = $c;

                //then reset
                $toReverse = [];
            }
        }

        return $reversed;
    }
}
