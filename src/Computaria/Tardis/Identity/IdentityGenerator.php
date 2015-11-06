<?php

namespace Computaria\Tardis\Identity;

interface IdentityGenerator
{
    /**
     * Given any number of arguments, create a unique identity
     * to them.
     * If the same arguments are presented again, the same identity
     * must be returned.
     *
     * @param   Object  $instance
     * @param   string  $methodName
     * @param   array   $methodArguments
     * @return  string
     */
    public function createIdFor($instance, $methodName, array $methodArguments);
}
