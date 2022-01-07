<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\JumpGame;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(true, $s->canJump([1, 2, 3]));
        $this->assertEquals(true, $s->canJump([0]));
        $this->assertEquals(true, $s->canJump([2, 3, 1, 1, 4]));
        $this->assertEquals(false, $s->canJump([3, 2, 1, 0, 4]));
        $this->assertEquals(
            false,
            $s->canJump(
                [
                    2,
                    0,
                    6,
                    9,
                    8,
                    4,
                    5,
                    0,
                    8,
                    9,
                    1,
                    2,
                    9,
                    6,
                    8,
                    8,
                    0,
                    6,
                    3,
                    1,
                    2,
                    2,
                    1,
                    2,
                    6,
                    5,
                    3,
                    1,
                    2,
                    2,
                    6,
                    4,
                    2,
                    4,
                    3,
                    0,
                    0,
                    0,
                    3,
                    8,
                    2,
                    4,
                    0,
                    1,
                    2,
                    0,
                    1,
                    4,
                    6,
                    5,
                    8,
                    0,
                    7,
                    9,
                    3,
                    4,
                    6,
                    6,
                    5,
                    8,
                    9,
                    3,
                    4,
                    3,
                    7,
                    0,
                    4,
                    9,
                    0,
                    9,
                    8,
                    4,
                    3,
                    0,
                    7,
                    7,
                    1,
                    9,
                    1,
                    9,
                    4,
                    9,
                    0,
                    1,
                    9,
                    5,
                    7,
                    7,
                    1,
                    5,
                    8,
                    2,
                    8,
                    2,
                    6,
                    8,
                    2,
                    2,
                    7,
                    5,
                    1,
                    7,
                    9,
                    6
                ]
            )
        );

        $this->assertEquals(false, $s->canJump(json_decode(file_get_contents(__DIR__ . '/big.json'))));
    }
}
