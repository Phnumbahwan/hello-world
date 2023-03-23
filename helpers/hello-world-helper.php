<?php

/**
 * @author Gil Pacturan <gilpacturan@gmail.com>
 */

use Pacturan\HelloWorld\Services\HelloWorld;

if (! function_exists('helloWorld'))
{
    /**
     * @return HelloWorld
     */
    function helloWorld(): HelloWorld
    {
        return resolve('hello-world');
    }
}

if (! function_exists('hello_world'))
{
    /**
     * @return HelloWorld
     */
    function hello_world(): HelloWorld
    {
        return helloWorld();
    }
}
