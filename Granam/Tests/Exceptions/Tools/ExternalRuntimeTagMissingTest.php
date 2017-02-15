<?php
namespace Granam\Tests\Exceptions\Tools;

class ExternalRuntimeTagMissingTest extends AbstractExceptionsHierarchyTest
{
    protected function getTestedNamespace()
    {
        return __NAMESPACE__ . '\DummyExceptionsHierarchy\ExternalRuntimeTagMissing';
    }

    protected function getRootNamespace()
    {
        return $this->getTestedNamespace();
    }

    protected function getExceptionsSubDir()
    {
        return '';
    }

    protected function getExternalRootNamespaces()
    {
        // skipping some namespace chain up from root namespace
        return ['\Granam\ExceptionsHierarchy'];
    }

    protected function getExternalRootExceptionsSubDir()
    {
        return 'Exceptions';
    }

    /**
     * @test
     * @expectedException \Granam\ExceptionsHierarchy\Exceptions\InvalidTagInterfaceHierarchy
     * @expectedExceptionMessageRegExp ~^Tag interface .+\\Runtime should extends external parent tag interface .+~
     */
    public function My_exceptions_are_in_family_tree()
    {
        parent::My_exceptions_are_in_family_tree();
    }

}