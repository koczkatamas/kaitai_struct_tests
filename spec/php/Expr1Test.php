<?php
namespace Kaitai\Struct\Tests;

class Expr1Test extends TestCase {
    public function testExpr1() {
        $r = Expr1::fromFile(self::SRC_DIR_PATH . "/str_encodings.bin");

        $this->assertEquals(10, $r->lenOf1());
        $this->assertEquals(8, $r->lenOf1Mod());
        $this->assertEquals("Some ASC", $r->str1());
        $this->assertEquals(8, $r->str1Len());
    }
}
