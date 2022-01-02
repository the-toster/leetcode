<?php

declare(strict_types=1);

namespace TheToster\Leetcode\PairsOfSongsWithTotalDurationsDivisibleBy60;


final class Solution
{
    public function numPairsDivisibleBy60(array $time): int
    {
        $byReminders = [];
        foreach ($time as $i => $duration) {
            $rem = $duration % 60;
            if (!isset($byReminders[$rem])) {
                $byReminders[$rem] = [];
            }

            $byReminders[$rem][] = $i;
        }

        $total = 0;
        foreach ($byReminders as $rem => $indexes) {
            $complimentaryRem = $rem === 0 ? 0 : 60 - $rem;
            $complimentaryIndexes = $byReminders[$complimentaryRem] ?? [];
            foreach ($indexes as $index) {
                foreach ($complimentaryIndexes as $complimentaryIndex) {
                    if ($index < $complimentaryIndex) {
                        $total++;
                    }
                }
            }
        }

        return $total;
    }
}
