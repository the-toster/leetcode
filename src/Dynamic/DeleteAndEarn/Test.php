<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\DeleteAndEarn;


use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    /** @test */
    public function it_can_solve(): void
    {
        $s = new Solution();
        $this->assertEquals(9, $s->deleteAndEarn([2, 2, 3, 3, 3, 4]));
        $this->assertEquals(6, $s->deleteAndEarn([2, 3, 3, 4]));
        $this->assertEquals(6, $s->deleteAndEarn([3, 4, 2]));
        $this->assertEquals(61, $s->deleteAndEarn([8, 3, 4, 7, 6, 6, 9, 2, 5, 8, 2, 4, 9, 5, 9, 1, 5, 7, 1, 4]));
        $this->assertEquals(
            138,
            $s->deleteAndEarn(
                [
                    1,
                    8,
                    5,
                    9,
                    6,
                    9,
                    4,
                    1,
                    7,
                    3,
                    3,
                    6,
                    3,
                    3,
                    8,
                    2,
                    6,
                    3,
                    2,
                    2,
                    1,
                    2,
                    9,
                    8,
                    7,
                    1,
                    1,
                    10,
                    6,
                    7,
                    3,
                    9,
                    6,
                    10,
                    5,
                    4,
                    10,
                    1,
                    6,
                    7,
                    4,
                    7,
                    4,
                    1,
                    9,
                    5,
                    1,
                    5,
                    7,
                    5
                ]
            )
        );

        $this->assertEquals(
            188,
            $s->deleteAndEarn(
                [
                    6,
                    9,
                    6,
                    7,
                    8,
                    10,
                    5,
                    2,
                    7,
                    2,
                    3,
                    1,
                    5,
                    5,
                    6,
                    10,
                    8,
                    6,
                    4,
                    10,
                    1,
                    6,
                    6,
                    7,
                    4,
                    3,
                    7,
                    9,
                    10,
                    2,
                    5,
                    9,
                    9,
                    8,
                    2,
                    10,
                    4,
                    2,
                    2,
                    5,
                    10,
                    6,
                    10,
                    1,
                    10,
                    4,
                    5,
                    1,
                    8,
                    6
                ]
            )
        );

        $this->assertEquals(52, $s->deleteAndEarn([8, 7, 3, 8, 1, 4, 10, 10, 10, 2]));
    }

}
