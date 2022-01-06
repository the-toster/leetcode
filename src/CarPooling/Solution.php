<?php

declare(strict_types=1);

namespace TheToster\Leetcode\CarPooling;


final class Solution
{
    /**
     * There is a car with capacity empty seats. The vehicle only drives east (i.e., it cannot turn around and drive west).
     *
     * You are given the integer capacity and an array trips where trip[i] = [numPassengersi, fromi, toi] indicates that
     * the i-th trip has numPassengers-i passengers and the locations to pick them up and drop them off
     * are from-i and to-i respectively.
     *
     * The locations are given as the number of kilometers due east from the car's initial location.
     *
     * @param int[][] $trips
     * @param int $capacity
     *
     *
     * 1 <= trips.length <= 1000
     * trips[i].length == 3
     * 1 <= numPassengers-i <= 100
     * 0 <= from-i < to-i <= 1000
     * 1 <= capacity <= 105
     */
    function carPooling(array $trips, int $capacity): bool
    {
        $actions = [];
        foreach ($trips as [$persons, $from, $to]) {
            if (!isset($actions[$from])) {
                $actions[$from] = [];
            }
            $actions[$from][] = $persons;

            if (!isset($actions[$to])) {
                $actions[$to] = [];
            }
            $actions[$to][] = -1 * $persons;
        }

        ksort($actions);
        $current = 0;
        foreach ($actions as $persons) {
            $current += $this->sum($persons);
            if ($current > $capacity) {
                return false;
            }
        }

        return true;
    }

    private function sum(array $arr): int
    {
        $r = 0;
        foreach ($arr as $n) {
            $r += $n;
        }

        return $r;
    }
}
