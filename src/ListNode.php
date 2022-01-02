<?php

declare(strict_types=1);

namespace TheToster\Leetcode;


final class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }

    public static function fromArray(array $arr): self
    {
        if (count($arr) < 1) {
            throw new \InvalidArgumentException();
        }

        $prev = null;
        foreach (array_reverse($arr) as $item) {
            $r = new ListNode($item, $prev);
            $prev = $r;
        }
        return $r;
    }
}
