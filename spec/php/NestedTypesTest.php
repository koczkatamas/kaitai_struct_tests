<?php
namespace Kaitai\Struct\Tests;

class NestedTypesTest extends TestCase {
    public function testNestedTypes() {
        $r = NestedTypes::fromFile(self::SRC_DIR_PATH . "/fixed_struct.bin");
        $this->assertEquals(80, $r->one()->typedAtRoot()->valueB());
        $this->assertEquals(65, $r->one()->typedHere()->valueC());
        $this->assertEquals(67, $r->two()->valueB());
    }
}
