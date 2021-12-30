<?php

declare(strict_types=1);

namespace TheToster\LeetcodeHelper\Domain;


final class Problem
{
    public function __construct(
        public readonly string $title,
        public readonly string $template
    ) {
    }
}
