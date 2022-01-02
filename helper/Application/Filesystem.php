<?php

declare(strict_types=1);

namespace TheToster\LeetcodeHelper\Application;


interface Filesystem
{
    public function writeFile(string $path, string $content): void;
}
