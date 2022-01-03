<?php

declare(strict_types=1);

namespace TheToster\Leetcode\FindTheTownJudge;


final class Solution
{
    /**
     * In a town, there are n people labeled from 1 to n.
     * There is a rumor that one of these people is secretly the town judge.
     * If the town judge exists, then:
     *
     * The town judge trusts nobody.
     * Everybody (except for the town judge) trusts the town judge.
     * There is exactly one person that satisfies properties 1 and 2.
     *
     * You are given an array trust where trust[i] = [ai, bi] representing that
     * the person labeled ai trusts the person labeled bi.
     *
     * Return the label of the town judge if the town judge exists and can be identified, or return -1 otherwise.
     * All the pairs of trust are unique.
     */
    function findJudge(int $n, $trust): int
    {
        $howManyTrustTo = [];
        $isTrustSomeOne = [];

        foreach ($trust as [$person, $trustTo]) {
            $howManyTrustTo[$trustTo] = ($howManyTrustTo[$trustTo] ?? 0) + 1;
            $isTrustSomeOne[$person] = true;
        }

        arsort($howManyTrustTo);
        $mostTrustable = array_keys($howManyTrustTo)[0];

        if ($howManyTrustTo[$mostTrustable] === ($n - 1) &&
            !isset($isTrustSomeOne[$mostTrustable])) {
            return $mostTrustable;
        } else {
            return -1;
        }
    }
}
