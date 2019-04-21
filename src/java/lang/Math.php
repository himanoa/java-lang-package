<?php
namespace PHPJava\Imitation\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Imitation\java\lang\_Object;
use PHPJava\Utilities\Extractor;

/**
 * The `Math` class was auto generated.
 *
 * @parent \PHPJava\Imitation\java\lang\_Object
 */
class Math extends _Object
{
    /**
     * The double value that is closer than any other to e, the base of the natural logarithms.
     *
     * @var mixed $E
     */
    public static $E = M_E;

    /**
     * The double value that is closer than any other to pi, the ratio of the circumference of a circle to its diameter.
     *
     * @var mixed $PI
     */
    public static $PI = M_PI;


    /**
     * Returns the absolute value of a double value.
     * Returns the absolute value of a float value.
     * Returns the absolute value of an int value.
     * Returns the absolute value of a long value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#abs
     */
    public static function abs($a = null)
    {
        return abs(Extractor::realValue($a));
    }

    /**
     * Returns the arc cosine of a value; the returned angle is in the range 0.0 through pi.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#acos
     */
    public static function acos($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the sum of its arguments, throwing an exception if the result overflows an int.
     * Returns the sum of its arguments, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#addExact
     */
    public static function addExact($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the arc sine of a value; the returned angle is in the range -pi/2 through pi/2.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#asin
     */
    public static function asin($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the arc tangent of a value; the returned angle is in the range -pi/2 through pi/2.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#atan
     */
    public static function atan($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the angle theta from the conversion of rectangular coordinates (x,&nbsp;y) to polar coordinates (r,&nbsp;theta).
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#atan2
     */
    public static function atan2($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the cube root of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#cbrt
     */
    public static function cbrt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the smallest (closest to negative infinity) double value that is greater than or equal to the argument and is equal to a mathematical integer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#ceil
     */
    public static function ceil($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the first floating-point argument with the sign of the second floating-point argument.
     * Returns the first floating-point argument with the sign of the second floating-point argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#copySign
     */
    public static function copySign($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the trigonometric cosine of an angle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#cos
     */
    public static function cos($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the hyperbolic cosine of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#cosh
     */
    public static function cosh($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the argument decremented by one, throwing an exception if the result overflows an int.
     * Returns the argument decremented by one, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#decrementExact
     */
    public static function decrementExact($a = null)
    {
        return Extractor::realValue($a) - 1;
    }

    /**
     * Returns Euler's number e raised to the power of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#exp
     */
    public static function exp($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns ex&nbsp;-1.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#expm1
     */
    public static function expm1($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the largest (closest to positive infinity) double value that is less than or equal to the argument and is equal to a mathematical integer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#floor
     */
    public static function floor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the largest (closest to positive infinity) int value that is less than or equal to the algebraic quotient.
     * Returns the largest (closest to positive infinity) long value that is less than or equal to the algebraic quotient.
     * Returns the largest (closest to positive infinity) long value that is less than or equal to the algebraic quotient.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#floorDiv
     */
    public static function floorDiv($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the floor modulus of the int arguments.
     * Returns the floor modulus of the long and int arguments.
     * Returns the floor modulus of the long arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#floorMod
     */
    public static function floorMod($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the fused multiply add of the three arguments; that is, returns the exact product of the first two arguments summed with the third argument and then rounded once to the nearest double.
     * Returns the fused multiply add of the three arguments; that is, returns the exact product of the first two arguments summed with the third argument and then rounded once to the nearest float.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#fma
     */
    public static function fma($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the unbiased exponent used in the representation of a double.
     * Returns the unbiased exponent used in the representation of a float.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getExponent
     */
    public static function getExponent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns sqrt(x2&nbsp;+y2) without intermediate overflow or underflow.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#hypot
     */
    public static function hypot($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Computes the remainder operation on two arguments as prescribed by the IEEE 754 standard.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#IEEEremainder
     */
    public static function IEEEremainder($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the argument incremented by one, throwing an exception if the result overflows an int.
     * Returns the argument incremented by one, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#incrementExact
     */
    public static function incrementExact($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the natural logarithm (base e) of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#log
     */
    public static function log($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the base 10 logarithm of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#log10
     */
    public static function log10($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the natural logarithm of the sum of the argument and 1.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#log1p
     */
    public static function log1p($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the greater of two double values.
     * Returns the greater of two float values.
     * Returns the greater of two int values.
     * Returns the greater of two long values.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#max
     */
    public static function max($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the smaller of two double values.
     * Returns the smaller of two float values.
     * Returns the smaller of two int values.
     * Returns the smaller of two long values.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#min
     */
    public static function min($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the product of the arguments, throwing an exception if the result overflows an int.
     * Returns the product of the arguments, throwing an exception if the result overflows a long.
     * Returns the product of the arguments, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#multiplyExact
     */
    public static function multiplyExact($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the exact mathematical product of the arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#multiplyFull
     */
    public static function multiplyFull($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns as a long the most significant 64 bits of the 128-bit product of two 64-bit factors.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#multiplyHigh
     */
    public static function multiplyHigh($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the negation of the argument, throwing an exception if the result overflows an int.
     * Returns the negation of the argument, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#negateExact
     */
    public static function negateExact($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the floating-point number adjacent to the first argument in the direction of the second argument.
     * Returns the floating-point number adjacent to the first argument in the direction of the second argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#nextAfter
     */
    public static function nextAfter($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the floating-point value adjacent to d in the direction of negative infinity.
     * Returns the floating-point value adjacent to f in the direction of negative infinity.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#nextDown
     */
    public static function nextDown($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the floating-point value adjacent to d in the direction of positive infinity.
     * Returns the floating-point value adjacent to f in the direction of positive infinity.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#nextUp
     */
    public static function nextUp($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the first argument raised to the power of the second argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#pow
     */
    public static function pow($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a double value with a positive sign, greater than or equal to 0.0 and less than 1.0.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#random
     */
    public static function random($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the double value that is closest in value to the argument and is equal to a mathematical integer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#rint
     */
    public static function rint($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the closest long to the argument, with ties rounding to positive infinity.
     * Returns the closest int to the argument, with ties rounding to positive infinity.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#round
     */
    public static function round($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns d &times; 2scaleFactor rounded as if performed by a single correctly rounded floating-point multiply to a member of the double value set.
     * Returns f &times; 2scaleFactor rounded as if performed by a single correctly rounded floating-point multiply to a member of the float value set.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#scalb
     */
    public static function scalb($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the signum function of the argument; zero if the argument is zero, 1.0 if the argument is greater than zero, -1.0 if the argument is less than zero.
     * Returns the signum function of the argument; zero if the argument is zero, 1.0f if the argument is greater than zero, -1.0f if the argument is less than zero.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#signum
     */
    public static function signum($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the trigonometric sine of an angle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#sin
     */
    public static function sin($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the hyperbolic sine of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#sinh
     */
    public static function sinh($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the correctly rounded positive square root of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#sqrt
     */
    public static function sqrt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the difference of the arguments, throwing an exception if the result overflows an int.
     * Returns the difference of the arguments, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#subtractExact
     */
    public static function subtractExact($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the trigonometric tangent of an angle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#tan
     */
    public static function tan($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the hyperbolic tangent of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#tanh
     */
    public static function tanh($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts an angle measured in radians to an approximately equivalent angle measured in degrees.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toDegrees
     */
    public static function toDegrees($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the long argument; throwing an exception if the value overflows an int.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toIntExact
     */
    public static function toIntExact($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts an angle measured in degrees to an approximately equivalent angle measured in radians.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toRadians
     */
    public static function toRadians($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the size of an ulp of the argument.
     * Returns the size of an ulp of the argument.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#ulp
     */
    public static function ulp($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
