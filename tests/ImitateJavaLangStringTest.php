<?php
namespace PHPJava\Tests;

use PHPJava\Core\JavaArchive;
use PHPJava\Exceptions\UnableToCatchException;
use PHPJava\Packages\java\lang\IndexOutOfBoundsException;
use PHPJava\Packages\java\lang\_String;

class ImitateJavaLangStringTest extends Base
{
    protected $fixtures = [
        'ImitateJavaLangStringTest',
    ];

    public function testCharAtIndex()
    {
        ob_start();
        $this->initiatedJavaClasses['ImitateJavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'charAtIndex',
                'abc',
                1
            );
        $value = ob_get_clean();
        $this->assertEquals('b', $value);
    }

    public function testThrowsCharAtNegativeIndex()
    {
        $this->expectException(IndexOutOfBoundsException::class);
        $this->expectExceptionMessage('String index out of range: -1');

        try {
            $this->initiatedJavaClasses['ImitateJavaLangStringTest']
                ->getInvoker()
                ->getStatic()
                ->getMethods()
                ->call(
                    'charAtIndex',
                    'abc',
                    -1
                );
        } catch (UnableToCatchException $e) {
            throw $e->getPrevious();
        }
    }

    public function testThrowsCharAtOutOfRangeIndex()
    {
        $this->expectException(IndexOutOfBoundsException::class);
        $this->expectExceptionMessage('String index out of range: 3');

        try {
            $this->initiatedJavaClasses['ImitateJavaLangStringTest']
                ->getInvoker()
                ->getStatic()
                ->getMethods()
                ->call(
                    'charAtIndex',
                    'abc',
                    3
                );
        } catch (UnableToCatchException $e) {
            throw $e->getPrevious();
        }
    }

    public function testConcat()
    {
        ob_start();
        $this->initiatedJavaClasses['ImitateJavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'concat',
                'abc',
                'def'
            );
        $value = ob_get_clean();
        $this->assertEquals('abcdef', $value);
    }

    public function testIntern()
    {
        ob_start();
        $this->initiatedJavaClasses['ImitateJavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'intern'
            );
        [ $a, $b ] = explode(' ', ob_get_clean());
        $this->assertEquals($a, $b);
    }

    public function testReplace()
    {
        ob_start();
        $this->initiatedJavaClasses['ImitateJavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'replace',
                'abcabc',
                new _String('b'),
                new _String('c')
            );
        $value = ob_get_clean();
        $this->assertEquals('accacc', $value);
    }

    public function testToLowerCase()
    {
        ob_start();
        $this->initiatedJavaClasses['ImitateJavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'toLowerCase',
                'Hello, World'
            );
        $value = ob_get_clean();
        $this->assertEquals('hello, world', $value);
    }

    public function testToUpperCase()
    {
        ob_start();
        $this->initiatedJavaClasses['ImitateJavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'toUpperCase',
                'Hello, World'
            );
        $value = ob_get_clean();
        $this->assertEquals('HELLO, WORLD', $value);
    }
}
