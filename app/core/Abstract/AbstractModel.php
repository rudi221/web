<?php

namespace App\Core\Abstract;

use ArrayAccess;
use ReturnTypeWillChange;

abstract class AbstractModel implements ArrayAccess {

    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }

    public function getStrlen($value){
        return strlen($value);
    }


}