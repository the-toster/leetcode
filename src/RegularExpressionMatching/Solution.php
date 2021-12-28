<?php

declare(strict_types=1);

namespace TheToster\Leetcode\RegularExpressionMatching;


final class Solution
{

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    public function isMatch(string $s, string $p)
    {
        $s = str_split($s);
        $tokens = $this->tokens($p);
        while (count($s) > 0 && count($tokens) > 0) {
            $char = $s[0];
            $token = $tokens[0];
            $match = $token[0] === '.' || $token[0] === $char;

            if (!$match) {
                if ($this->zeroOrMore($token)) {
                    array_shift($tokens);
                    continue;
                }
                return false;
            }

            if ($this->zeroOrMore($token)) {
                array_shift($tokens);
            }
            array_shift($s);
        }

        foreach ($tokens as $token) {
            if (!$this->zeroOrMore($token)) {
                return false;
            }
        }

        return count($s) === 0;
    }

    private function tokens(string $p): array
    {
        $tokens = [];
        foreach (str_split($p) as $c) {
            if ($c === '*') {
                $tokens[count($tokens) - 1][] = '*';
            } else {
                $tokens[] = [$c];
            }
        }
        return $tokens;
    }

    private function zeroOrMore(array $token): bool
    {
        return ($token[1] ?? null) === '*';
    }

}
