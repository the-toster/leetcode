<?php

declare(strict_types=1);

namespace TheToster\LeetcodeHelper\Application;


use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

final class CodeGenerator
{
    public function __construct(
        private readonly ProblemProvider $problemFetcher,
        private readonly string $generationPath,
        private readonly Filesystem $fs
    ) {
    }

    public function generate(string $problemUrl): void
    {
        [, $slug] = explode('/problems/', trim($problemUrl, '/'));
        $problem = $this->problemFetcher->get($slug);
        $namespace = $this->namespaceFromSlug($slug);
        $problemPath = $this->generationPath . DIRECTORY_SEPARATOR . $namespace . DIRECTORY_SEPARATOR;
        $this->fs->writeFile($problemPath . 'Solution.php', $problem->template);
        $this->fs->writeFile($problemPath . 'Test.php', $this->testContent($namespace));
    }

    private function namespaceFromSlug(string $slug): string
    {
        $camelCased = implode('', ucwords(str_replace('-', ' ', $slug)));

        return $this->namespacePrefix . '\\' . $camelCased;
    }

    private function testContent(string $namespace): string
    {
        $header = $this->header($namespace);
        return <<<PHP
        {$header}
        
        use PHPUnit\Framework\TestCase;
        
        final class Test extends TestCase
        {
            /** @test */
            public function it_can_merge(): void
            {
                \$s = new Solution();
                \$this->assertEquals(0, \$s);
            }
        }   
        PHP;
    }

    private function header(string $namespace): string
    {
        return <<<PHP
        <?php

        declare(strict_types=1);

        namespace $namespace;
        
        PHP;
    }
}
