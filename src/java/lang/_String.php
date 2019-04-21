<?php
namespace PHPJava\Imitation\java\lang;

use PHPJava\Kernel\Structures\_Utf8;

class _String extends _Object
{
    private $object = null;

    public function __construct($object = null)
    {
        parent::__construct();
        $this->object = $object;
    }

    public function length()
    {
        return strlen($this->toString());
    }

    public function isEmpty()
    {
        return $this->length() === 0;
    }

    public function equals($a = null)
    {
        if (!($this->object instanceof _Utf8)) {
            return false;
        }
        if ($a instanceof _String) {
            return $this->toString() === $a->toString();
        }
        return $this->toString() === $a;
    }

    public function toString(): string
    {
        return $this->__toString();
    }

    public function __toString(): string
    {
        if (!($this->object instanceof _Utf8)) {
            return (string) $this->object;
        }
        return $this->object->getString();
    }
}
