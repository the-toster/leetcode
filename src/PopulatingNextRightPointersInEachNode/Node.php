<?php

declare(strict_types=1);

namespace TheToster\Leetcode\PopulatingNextRightPointersInEachNode;


class Node {
    public $val;
    public $left;
    public $right;
    public $next;

     function __construct(int $val = 0, ?Node $left = null, ?Node $right = null, ?Node $next = null) {
         $this->val = $val;
         $this->left = $left;
         $this->right = $right;
         $this->next = $next;
     }
}
