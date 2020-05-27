<?php

namespace Softonic\GraphQL\Traits;

trait CollectionArrayAccess
{
    public function offsetSet($offset, $value)
    {
        throw new \BadMethodCallException('Try using add() instead');
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->arguments);
    }

    public function offsetUnset($offset)
    {
        throw new \BadMethodCallException('Try using remove() instead');
    }

    public function offsetGet($offset)
    {
        return isset($this->arguments[$offset]) ? $this->arguments[$offset] : null;
    }
}