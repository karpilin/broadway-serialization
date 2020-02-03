<?php

declare(strict_types=1);

namespace BroadwaySerialization\Test\Serialization\Fixtures;

use Broadway\Serializer\Serializable;
use BroadwaySerialization\Serialization\AutoSerializable;

abstract class SerializableAbstractClassWithPrivates implements Serializable
{
    use AutoSerializable;

    private $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function foo()
    {
        return $this->foo;
    }
}
