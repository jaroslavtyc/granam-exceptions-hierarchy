<?php declare(strict_types=1);

namespace Granam\Tests\ExceptionsHierarchy\Exceptions;

class ExternalSingleParentRootNamespaceTest extends ExternalParentRootNamespaceTest
{
    protected function getExternalRootNamespaces(): array
    {
        return ['\Granam\ExceptionsHierarchy'];
    }

}
