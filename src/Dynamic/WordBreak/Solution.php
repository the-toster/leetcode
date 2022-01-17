<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\WordBreak;


final class Solution
{
    /** @param string[] $wordDict */
    function wordBreak(string $s, array $wordDict): bool
    {
        if (in_array($s, $wordDict)) {
            return true;
        }

        foreach ($wordDict as $w) {
            if (strpos($s, $w) !== 0) {
                continue;
            }
            $shorted = substr($s, strlen($w));
            if ($this->wordBreak($shorted, $wordDict)) {
                return true;
            }
        }

        return false;
    }
}
