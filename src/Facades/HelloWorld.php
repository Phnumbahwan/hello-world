<?php

namespace Pacturan\HelloWorld\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class HelloWorld
 *
 * @author Gil Pacturan <gilpacturan@gmail.com>
 *
 * @see \Pacturan\HelloWorld\Services\HelloWorld
 */
class HelloWorld extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'hello-world';
    }
}
