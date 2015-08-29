<?php

namespace Interop\Container\Pimple\Exception;

use Interop\Container\Exception\ContainerException;
use Interop\Container\Pimple\Exception\PimpleInteropExceptionInterface;

/**
 * RuntimeException
 *
 * @author Witold Wasiczko <witold@wasiczko.pl>
 */
class ContainerException extends \RuntimeException implements PimpleInteropExceptionInterface, ContainerException
{

}
