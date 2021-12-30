<?php

declare(strict_types=1);

namespace TheToster\LeetcodeHelper\Infrastructure;


use TheToster\LeetcodeHelper\Application\ProblemProvider;
use TheToster\LeetcodeHelper\Domain\Problem;

final class MemProblemProvider implements ProblemProvider
{
    /** @var array<string,Problem> $problems */
    private array $problems = [];

    public function get(string $slug): Problem
    {
        return $this->problems[$slug] ?? throw new \InvalidArgumentException('not found');
    }
}
