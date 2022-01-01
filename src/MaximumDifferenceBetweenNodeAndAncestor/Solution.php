<?php

declare(strict_types=1);

namespace TheToster\Leetcode\MaximumDifferenceBetweenNodeAndAncestor;


final class Solution
{
    public function maxAncestorDiff(TreeNode $root): int
    {
        [$diff] = $this->findMinMaxDiff($root);
        return $diff;
    }

    private function findMinMaxDiff(TreeNode $node): array
    {
        if ($this->isLeaf($node)) {
            return [0, $node->val, $node->val];
        }
        $diffs = [];
        $extremum = [$node->val];

        if ($node->left) {
            [$diff, $max, $min] = $this->findMinMaxDiff($node->left);
            $diffs[] = $diff;
            $diffs[] = abs($node->val - $max);
            $diffs[] = abs($node->val - $min);
            $extremum[] = $max;
            $extremum[] = $min;
        }

        if ($node->right) {
            [$diff, $max, $min] = $this->findMinMaxDiff($node->right);
            $diffs[] = $diff;
            $diffs[] = abs($node->val - $max);
            $diffs[] = abs($node->val - $min);
            $extremum[] = $max;
            $extremum[] = $min;
        }


        return [max($diffs), min($extremum), max($extremum)];
    }

    private function isLeaf(TreeNode $node): bool
    {
        return $node->right === null && $node->left === null;
    }
}
