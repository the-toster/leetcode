<?php

declare(strict_types=1);

namespace TheToster\Leetcode\PopulatingNextRightPointersInEachNode;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $solution = new Solution();
        $root = $this->build3Level();
        $expected = $this->build3LevelConnected();
        $this->assertEquals($expected, $solution->connect($root));
    }


    private function build3LevelConnected(): Node
    {
        $root = $this->build3Level();

        $root->left->next = $root->right;

        $root->left->left->next = $root->left->right;
        $root->left->right->next = $root->right->left;

        $root->right->left->next = $root->right->right;

        return $root;
    }
    private function build3Level(): Node
    {
        $r = $this->buildBasic(2,4, 5);
        $l = $this->buildBasic(3,6, 7);
        return new Node(1, $r, $l);
    }

    private function buildBasic(int $val, int $lVal, int $rVal): Node
    {
        $l = new Node($lVal);
        $r = new Node($rVal);
        return new Node($val, $l, $r);
    }
}
