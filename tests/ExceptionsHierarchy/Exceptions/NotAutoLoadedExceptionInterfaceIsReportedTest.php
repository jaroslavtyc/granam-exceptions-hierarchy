<?php declare(strict_types=1);

namespace Granam\Tests\ExceptionsHierarchy\Exceptions;

class NotAutoLoadedExceptionInterfaceIsReportedTest extends AbstractExceptionsHierarchyTest
{
    /**
     * @test
     */
    public function My_exceptions_are_in_family_tree()
    {
        $this->expectException(\Granam\ExceptionsHierarchy\Exceptions\ExceptionClassNotFoundByAutoloader::class);
        $this->expectExceptionMessageMatches('~class .+ interface .+\\\AutoLoaderCanNotFindMeBecauseSomeoneNamedMeWrongly~');
        parent::My_exceptions_are_in_family_tree();
    }

    protected function getTestedNamespace(): string
    {
        return __NAMESPACE__ . '\DummyExceptionsHierarchy\CanNotBeLoadedByAutoLoader\WithWronglyNamedInterface';
    }

    protected function getExceptionsSubDir(): string
    {
        return '';
    }

    protected function getRootNamespace(): string
    {
        return $this->getTestedNamespace();
    }

    protected function getExceptionClassesSkippedFromUsageTest(): array
    {
        return [
            DummyExceptionsHierarchy\CanNotBeLoadedByAutoLoader\WithWronglyNamedInterface\AutoLoaderCanNotFindMeBecauseSomeoneNamedMeWrongly::class,
        ];
    }

}
