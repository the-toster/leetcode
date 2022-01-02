<?php

declare(strict_types=1);

namespace TheToster\LeetcodeHelper\Infrastructure;


use TheToster\LeetcodeHelper\Application\Filesystem;

final class TestFs implements Filesystem
{
    public array $files = [];

    public function writeFile(string $path, string $content): void
    {
        $this->files[$path] = $content;
    }
}
