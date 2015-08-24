<?php
namespace Granam\Exceptions\Tests\Tools;

use Granam\Exceptions\Tools\TestOfExceptionsHierarchy;

abstract class AbstractTestOfExceptionsHierarchy extends \PHPUnit_Framework_TestCase
{

    /**
     * @var TestOfExceptionsHierarchy
     */
    private $testOfExceptionsHierarchy;

    protected function setUp()
    {
        $this->testOfExceptionsHierarchy = new TestOfExceptionsHierarchy(
            $this->getTestedNamespace(),
            $this->getRootNamespace(),
            $this->getExceptionsSubDir()
        );
    }

    /**
     * @return TestOfExceptionsHierarchy
     */
    protected function getTestOfExceptionsHierarchy()
    {
        return $this->testOfExceptionsHierarchy;
    }

    abstract protected function getTestedNamespace();

    abstract protected function getRootNamespace();

    protected function getExceptionsSubDir()
    {
        return 'Exceptions';
    }

    /**
     * @test
     */
    public function My_tag_interfaces_are_in_hierarchy()
    {
        $this->getTestOfExceptionsHierarchy()->My_tag_interfaces_are_in_hierarchy();
    }

    /**
     * @test
     */
    public function My_exceptions_are_in_family_tree()
    {
        $this->getTestOfExceptionsHierarchy()->My_exceptions_are_in_family_tree();
    }

}