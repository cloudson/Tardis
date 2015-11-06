<?php

namespace Computaria\Tardis\Identity;

use InvalidArgumentException;

class MethodCall implements IdentityGenerator
{
    /**
     * @inherit
     */
    public function createIdFor($instance, $methodName, array $methodArguments)
    {
        // @TODO throw error if  instance is not an object  
        $serializedArguments = serialize($methodArguments);

        return sha1(get_class($instance).$methodName.$serializedArguments);
    }
}
