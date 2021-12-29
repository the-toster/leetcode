<?php

declare(strict_types=1);

namespace TheToster\Leetcode\MiddleOfTheLinkedList;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_find(): void
    {
        $solution = new Solution();

        $i6 = new ListNode(6, null);
        $i5 = new ListNode(5, $i6);
        $i4 = new ListNode(4, $i5);
        $i3 = new ListNode(3, $i4);
        $i2 = new ListNode(2, $i3);
        $i1 = new ListNode(1, $i2);

        $this->assertEquals($i4, $solution->middleNode($i1));
    }

    /** @test */
    public function it_can_find_for3(): void
    {
        $solution = new Solution();
        $i3 = new ListNode(3, null);
        $i2 = new ListNode(2, $i3);
        $i1 = new ListNode(1, $i2);

        $this->assertEquals($i2, $solution->middleNode($i1));

    }
}
