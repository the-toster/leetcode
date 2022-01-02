<?php

declare(strict_types=1);

namespace TheToster\LeetcodeHelper\Infrastructure;

use TheToster\LeetcodeHelper\Application\Filesystem;

final class LocalFilesystem implements Filesystem
{

    public function writeFile(string $path, string $content): void
    {
        file_put_contents($path, $content);
    }
}
