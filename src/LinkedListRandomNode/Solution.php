<?php

declare(strict_types=1);

namespace TheToster\Leetcode\LinkedListRandomNode;


use TheToster\Leetcode\ListNode;

final class Solution
{
    /** @var ListNode[] $arr */
    private $arr = [];

    public function __construct(ListNode $head)
    {
        while ($head) {
            $this->arr[] = $head;
            $head = $head->next;
        }
    }

    public function getRandom(): int
    {
        $index = random_int(0, count($this->arr) - 1);
        return $this->arr[$index]->val;
    }
}
