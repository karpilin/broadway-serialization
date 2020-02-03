<?php

declare(strict_types=1);

namespace BroadwaySerialization\Test\Serialization\Fixtures;

use Broadway\Serializer\Serializable;
use BroadwaySerialization\Serialization\AutoSerializable;

abstract class SerializableAbstractClass implements Serializable
{
    use AutoSerializable;

    protected $foo;

    public function __construct(TraditionalSerializableObject $foo)
    {
        $this->foo = $foo;
    }

    protected static function deserializationCallbacks()
    {
        return [
            'foo' => [TraditionalSerializableObject::class, 'deserialize']
        ];
    }
}
