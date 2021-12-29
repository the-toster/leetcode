<?php

declare(strict_types=1);

namespace TheToster\Leetcode\PopulatingNextRightPointersInEachNode;


final class Solution
{
    public function connect(Node $root): Node {

        if(!$root->left) {
            return $root;
        }

        if($root->next) {
            $root->right->next = $root->next->left;
        }

        $root->right = $this->connect($root->right);
        $root->left->next = $root->right;
        $root->left = $this->connect($root->left);


        return $root;
    }
}
