<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\DeleteAndEarn;


final class Solution
{
    private $cache = [];
    /**
     * @param int[] $nums
     */
    public function deleteAndEarn(array $nums): int
    {
        if (count($nums) === 0) {
            return 0;
        }
        $cacheKey = implode(',', $nums);
        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }
        $r = [];
        foreach ($nums as $index => $n) {
            $r[] = $n + $this->deleteAndEarn($this->filter($nums, $index));
        }

        return $this->cache[$cacheKey] = max($r);
    }

    private function filter(array $nums, int $index): array
    {
        $n = $nums[$index];
        array_splice($nums, $index, 1);

        return array_values(
            array_filter($nums, function ($i) use ($n) {
                return $i !== ($n + 1) && $i !== ($n - 1);
            })
        );
    }

}
