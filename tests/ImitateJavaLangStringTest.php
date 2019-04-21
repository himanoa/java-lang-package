<?php
namespace PHPJava\Tests;

use PHPJava\Core\JavaArchive;
use PHPUnit\Framework\TestCase;
use PHPJava\Imitation\java\lang\IndexOutOfBoundsException;

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

        $this->initiatedJavaClasses['ImitateJavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'charAtIndex',
                'abc',
                -1
            );
    }

    public function testThrowsCharAtOutOfRangeIndex()
    {
        $this->expectException(IndexOutOfBoundsException::class);
        $this->expectExceptionMessage('String index out of range: 3');

        $this->initiatedJavaClasses['ImitateJavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'charAtIndex',
                'abc',
                3
            );
    }

    public function testRepeat()
    {
        ob_start();
        $this->initiatedJavaClasses['ImitateJavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'repeat',
                'abc',
                3
            );
        $value = ob_get_clean();
        $this->assertEquals('abcabcabc', $value);
    }
}
