<?php

declare(strict_types=1);

namespace TheToster\Leetcode\MiddleOfTheLinkedList;


final class Solution
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode(ListNode $head): ListNode {
        $arr = [];

        while ($head->next) {
            $arr[] = $head;
            $head = $head->next;
        }
        $arr[] = $head;

        return $arr[floor(count($arr) / 2)];
    }
}
