<?php
namespace Granam\Tests\Exceptions\Tools;

class NotAutoLoadedExceptionClassIsReportedTest extends AbstractExceptionsHierarchyTest
{
    /**
     * @test
     * @expectedException \Granam\Exceptions\Tools\Exceptions\ExceptionClassNotFoundByAutoloader
     * @expectedExceptionMessageRegExp ~class .+ interface .+AutoLoaderCanNotFindMeBecauseSomeoneNamedMeWrongly~
     */
    public function My_exceptions_are_in_family_tree()
    {
        parent::My_exceptions_are_in_family_tree();
    }

    protected function getTestedNamespace()
    {
        return __NAMESPACE__ . '\DummyExceptionsHierarchy\CanNotBeLoadedByAutoLoader\WithWronglyNamedClass';
    }

    protected function getExceptionsSubDir()
    {
        return false;
    }

    protected function getRootNamespace()
    {
        return $this->getTestedNamespace();
    }
}