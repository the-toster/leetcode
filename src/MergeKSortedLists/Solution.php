<?php

declare(strict_types=1);

namespace TheToster\Leetcode\MergeKSortedLists;


final class Solution
{
    /**
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists(array $lists): ListNode
    {
        $result = null;
        while (count($lists) > 0) {
            $minIndex = null;
            $min = null;
            foreach ($lists as $index => $list) {
                if ($min === null || $list->val < $min) {
                    $min = $list->val;
                    $minIndex = $index;
                }
            }
            $r = new ListNode($min);

            if ($lists[$minIndex]->next) {
                $lists[$minIndex] = $lists[$minIndex]->next;
            } else {
                array_splice($lists, $minIndex, 1);
            }

            if ($result === null) {
                $result = $r;
            } else {
                $result->next = $r;
            }
        }

        return $result;
    }

}
