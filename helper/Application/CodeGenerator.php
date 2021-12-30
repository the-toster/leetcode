<?php

declare(strict_types=1);

namespace TheToster\LeetcodeHelper\Application;


final class CodeGenerator
{
    private readonly string $testTemplate = <<<PHP
        fi
    PHP;

    public function __construct(
        private readonly ProblemProvider $problemFetcher,
        private readonly string $generationPath,
    ) {
    }

    public function generate(string $problemUrl): void
    {
        [, $slug] = explode('/problems/', trim($problemUrl, '/'));
        $problem = $this->problemFetcher->get($slug);
        $namespace = $this->namespaceFromTitle($problem->title);
        $problemPath = $this->generationPath . DIRECTORY_SEPARATOR . $namespace . DIRECTORY_SEPARATOR;
        file_put_contents($problemPath . 'Solution.php', $problem->template);
        file_put_contents($problemPath . 'Test.php', file_get_contents($this->testTemplatePath));
    }
}
