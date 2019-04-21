<?php
namespace PHPJava\Tests;

use PHPJava\Core\JavaArchive;
use PHPUnit\Framework\TestCase;

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
}

