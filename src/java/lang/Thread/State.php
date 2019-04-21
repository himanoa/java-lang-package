<?php
namespace PHPJava\Imitation\java\lang\Thread;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Imitation\java\lang\Enum;

// use PHPJava\Imitation\java\io\Serializable;
// use PHPJava\Imitation\java\lang\Comparable;

/**
 * The `State` class was auto generated.
 *
 * @parent \PHPJava\Imitation\java\lang\_Object
 * @parent \PHPJava\Imitation\java\lang\Enum
 */
class State extends Enum /* implements Serializable, Comparable */
{
    /*
     * Thread state for a thread blocked waiting for a monitor lock.
     */
    const BLOCKED = 'BLOCKED';

    /*
     * Thread state for a thread which has not yet started.
     */
    const _NEW = '_NEW';

    /*
     * Thread state for a runnable thread.
     */
    const RUNNABLE = 'RUNNABLE';

    /*
     * Thread state for a terminated thread.
     */
    const TERMINATED = 'TERMINATED';

    /*
     * Thread state for a waiting thread with a specified waiting time.
     */
    const TIMED_WAITING = 'TIMED_WAITING';

    /*
     * Thread state for a waiting thread.
     */
    const WAITING = 'WAITING';


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
