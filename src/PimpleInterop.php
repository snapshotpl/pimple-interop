<?php

namespace Interop\Container\Pimple;

use Interop\Container\ContainerInterface;
use Interop\Container\Pimple\Exception\ContainerException;
use Interop\Container\Pimple\Exception\NotFoundException;
use Pimple\Container as Pimple;

/**
 * PimpleInterop
 *
 * @author Witold Wasiczko <witold@wasiczko.pl>
 */
class PimpleInterop extends Pimple implements ContainerInterface
{
    public function get($id)
    {
        try {
            return $this[$id];
        } catch (\InvalidArgumentException $exception) {
            throw new NotFoundException($exception->getMessage(), $exception->getCode(), $exception);
        } catch (\Exception $exception) {
            throw new ContainerException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    public function has($id)
    {
        return isset($this[$id]);
    }
}
