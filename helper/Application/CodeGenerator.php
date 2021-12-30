<?php

declare(strict_types=1);

namespace TheToster\LeetcodeHelper\Application;


final class CodeGenerator
{
    public function __construct(
        private readonly ProblemProvider $problemFetcher,
        private readonly string $generationPath,
    ) {
    }

    public function generate(string $problemUrl): void
    {
        [, $slug] = explode('/problems/', trim($problemUrl, '/'));
        $problem = $this->problemFetcher->get($slug);
        $namespace = $this->namespaceFromTitle($slug);
        $problemPath = $this->generationPath . DIRECTORY_SEPARATOR . $namespace . DIRECTORY_SEPARATOR;
        file_put_contents($problemPath . 'Solution.php', $problem->template);
        file_put_contents($problemPath . 'Test.php', file_get_contents($this->testTemplatePath));
    }

    private function namespaceFromTitle(string $slug): string
    {
        $camelCased = implode(ucwords(str_replace('-', ' ', preg_replace('~^[a-zA-Z0-9-]~', '', $slug))));

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

        PHP;
    }
}
