<?php

declare(strict_types=1);

namespace TheToster\Leetcode\MergeKSortedLists;


final class Solution
{
    /**
     * @param array<ListNode|null> $lists
     */
    function mergeKLists(array $lists): ?ListNode
    {
        $result = null;
        $pointer = null;
        $lists = array_values(array_filter($lists));
        while (count($lists) > 0) {
            $minIndex = null;
            $min = null;
            foreach ($lists as $index => $list) {
                if ($min === null || $list->val < $min) {
                    $min = $list->val;
                    $minIndex = $index;
                }
            }

            if ($lists[$minIndex]->next) {
                $lists[$minIndex] = $lists[$minIndex]->next;
            } else {
                array_splice($lists, $minIndex, 1);
            }


            $current = new ListNode($min);

            if ($result === null) {
                $result = $current;
                $pointer = $current;
                continue;
            }

            $pointer->next = $current;
            $pointer = $current;
        }

        return $result;
    }

}
