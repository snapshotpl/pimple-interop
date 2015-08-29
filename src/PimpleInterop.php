<?php

namespace Interop\Container\Pimple;

use Interop\Container\ContainerInterface;
use Interop\Container\Pimple\Exception\ContainerException;
use Interop\Container\Pimple\Exception\NotFoundException;
use Pimple\Container;

/**
 * PimpleInterop
 *
 * @author Witold Wasiczko <witold@wasiczko.pl>
 */
class PimpleInterop implements ContainerInterface
{
    protected $container;

    public function __construct(Container $contaner)
    {
        $this->container = $contaner;
    }

    public function get($id)
    {
        try {
            return $this->container->offsetGet($id);
        } catch (\InvalidArgumentException $exception) {
            throw new NotFoundException($exception->getMessage(), $exception->getCode(), $exception);
        } catch (\Exception $exception) {
            throw new ContainerException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    public function has($id)
    {
        return $this->container->offsetExists($id);
    }

}
