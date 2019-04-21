<?php
namespace PHPJava\Imitation\java\lang\StackWalker;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Imitation\java\lang\Enum;

// use PHPJava\Imitation\java\io\Serializable;
// use PHPJava\Imitation\java\lang\stack frame;

/**
 * The `Option` class was auto generated.
 *
 * @parent \PHPJava\Imitation\java\lang\_Object
 * @parent \PHPJava\Imitation\java\lang\Enum
 */
class Option extends Enum /* implements Serializable, stack frame */
{
    /*
     * Retains Class object in StackFrames walked by this StackWalker.
     */
    const RETAIN_CLASS_REFERENCE = 'RETAIN_CLASS_REFERENCE';

    /*
     * Shows all hidden frames.
     */
    const SHOW_HIDDEN_FRAMES = 'SHOW_HIDDEN_FRAMES';

    /*
     * Shows all reflection frames.
     */
    const SHOW_REFLECT_FRAMES = 'SHOW_REFLECT_FRAMES';


    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#valueOf
     */
    public static function valueOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array containing the constants of this enum type, inthe order they are declared.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#values
     */
    public static function values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
