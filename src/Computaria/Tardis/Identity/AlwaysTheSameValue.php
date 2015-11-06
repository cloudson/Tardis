<?php

namespace Computaria\Tardis\Identity;

class AlwaysTheSameValue implements IdentityGenerator
{
    private $value = null;

    public function __construct($returnAlwaysThisValue)
    {
        $this->value = $returnAlwaysThisValue;
    }

    /**
     * @inherit
     */
    public function createIdFor($instance, $methodName, array $methodArguments)
    {
        return $this->value;
    }
}
