<?php
namespace PHPJava\Imitation\java\lang\ProcessBuilder\Redirect;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Imitation\java\lang\Enum;

// use PHPJava\Imitation\java\io\Serializable;
// use PHPJava\Imitation\java\lang\Comparable;

/**
 * The `Type` class was auto generated.
 *
 * @parent \PHPJava\Imitation\java\lang\_Object
 * @parent \PHPJava\Imitation\java\lang\Enum
 */
class Type extends Enum /* implements Serializable, Comparable */
{
    /*
     * The type of redirects returned from Redirect.appendTo(File).
     */
    const APPEND = 'APPEND';

    /*
     * The type of Redirect.INHERIT.
     */
    const INHERIT = 'INHERIT';

    /*
     * The type of Redirect.PIPE.
     */
    const PIPE = 'PIPE';

    /*
     * The type of redirects returned from Redirect.from(File).
     */
    const READ = 'READ';

    /*
     * The type of redirects returned from Redirect.to(File).
     */
    const WRITE = 'WRITE';


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
