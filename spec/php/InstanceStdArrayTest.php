<?php
namespace Kaitai\Struct\Tests;

class InstanceStdArrayTest extends TestCase {
    public function testInstanceStdArray() {
        $r = InstanceStdArray::fromFile(self::SRC_DIR_PATH . "/instance_std_array.bin");

        $this->assertEquals(0x10, $r->ofs());
        $this->assertEquals(3, $r->qtyEntries());
        $this->assertEquals(4, $r->entrySize());

        $this->assertEquals(3, count($r->entries()));
        $this->assertEquals("\x11\x11\x11\x11", $r->entries()[0]);
        $this->assertEquals("\x22\x22\x22\x22", $r->entries()[1]);
        $this->assertEquals("\x33\x33\x33\x33", $r->entries()[2]);
    }
}
