<?php

declare(strict_types=1);

namespace TheToster\Leetcode\PairsOfSongsWithTotalDurationsDivisibleBy60;


final class Solution
{
    public function numPairsDivisibleBy60(array $time): int
    {
        $reminders = [];
        foreach ($time as $i => $duration) {
            $rem = $duration % 60;
            if (!isset($reminders[$rem])) {
                $reminders[$rem] = 0;
            }

            $reminders[$rem]++;
        }
        ksort($reminders);

        $total = 0;
        foreach ($reminders as $rem => $numberOfSongs) {
            $complimentaryRem = $rem = 0 ? 0 : 60 - $rem;
            $numberOfComplimentary = isset($reminders[$complimentaryRem]) ?? 0;
            $total += max($numberOfComplimentary, $numberOfSongs);
        }

        return $total;
    }
}
