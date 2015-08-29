<?php

namespace Interop\Container\Pimple\Exception;

use Interop\Container\Exception\NotFoundException as NotFoundExceptionInterface;
use Interop\Container\Pimple\Exception\PimpleInteropExceptionInterface;

/**
 * NotFoundException
 *
 * @author Witold Wasiczko <witold@wasiczko.pl>
 */
class NotFoundException extends \InvalidArgumentException implements NotFoundExceptionInterface, PimpleInteropExceptionInterface
{

}
