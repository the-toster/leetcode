<?php

declare(strict_types=1);

namespace TheToster\Leetcode\MaximumDifferenceBetweenNodeAndAncestor;


final class Solution
{
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxAncestorDiff($root): int
    {
        $v = $root->val;

        $l = $this->findMinMax($root->left);
        $r = $this->findMinMax($root->right);

        return max(
            $this->maxDiff($root->val, $l),
            $this->maxDiff($root->val, $r)
        );
    }

    private function maxDiff($v, $with): ?int
    {
        if (count($with) === 0) {
            return 0;
        }

        return max([abs($v - max($with)), abs($v - min($with))]);
    }

    private function findMinMax(?TreeNode $node): array
    {
        if (!$node) {
            return [];
        }

        $l = $this->findMinMax($node->left);
        $r = $this->findMinMax($node->right);
        $variants = array_merge($l, $r, [$node->val]);
        return [min($variants), max($variants)];
    }
}
