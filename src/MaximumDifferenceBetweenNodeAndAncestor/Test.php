<?php

declare(strict_types=1);

namespace TheToster\Leetcode\MaximumDifferenceBetweenNodeAndAncestor;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(7, $s->maxAncestorDiff($this->basicTree()));
        $this->assertEquals(3, $s->maxAncestorDiff($this->basicTree2()));
    }

    private function basicTree(): TreeNode
    {
        $lr = new TreeNode(6, new TreeNode(4), new TreeNode(7));
        $l = new TreeNode(3, new TreeNode(1), $lr);
        $r = new TreeNode(10, null, new TreeNode(14, new TreeNode(13), null));
        return new TreeNode(8, $l, $r);
    }

    private function basicTree2(): TreeNode
    {
        return new TreeNode(
            1,
            null,
            new TreeNode(
                2,
                null,
                new TreeNode(
                    0,
                    new TreeNode(3, null, null)
                )
            )
        );
    }
}
