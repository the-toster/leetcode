<?php

declare(strict_types=1);

namespace TheToster\LeetcodeHelper\Application;


use TheToster\LeetcodeHelper\Domain\Problem;

interface ProblemProvider
{
    public function get(string $slug): Problem;
}
