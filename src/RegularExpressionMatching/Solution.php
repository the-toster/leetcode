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
        return $this->recursiveMatch($s, $tokens);
    }

    private function recursiveMatch(array $s, array $tokens): bool
    {
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

            if (!$this->zeroOrMore($token)) {
                array_shift($s);
                array_shift($tokens);
            } else {
                return $this->recursiveMatch(array_slice($s, 1), $tokens) ||
                    $this->recursiveMatch($s, array_slice($tokens, 1));
            }
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
