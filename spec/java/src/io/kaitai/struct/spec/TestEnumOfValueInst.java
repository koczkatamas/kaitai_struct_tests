package io.kaitai.struct.spec;

import io.kaitai.struct.testformats.EnumOfValueInst;
import org.testng.annotations.Test;

import static org.testng.Assert.assertEquals;

public class TestEnumOfValueInst extends CommonSpec {
    @Test
    public void testEnumOfValueInst() throws Exception {
        EnumOfValueInst r = EnumOfValueInst.fromFile(SRC_DIR + "enum_0.bin");

        assertEquals(r.pet1(), EnumOfValueInst.Animal.CAT);
        assertEquals(r.pet2(), EnumOfValueInst.Animal.CHICKEN);
        assertEquals(r.pet3(), EnumOfValueInst.Animal.DOG);
        assertEquals(r.pet4(), EnumOfValueInst.Animal.DOG);
    }
}
