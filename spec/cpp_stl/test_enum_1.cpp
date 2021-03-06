#include <boost/test/unit_test.hpp>

#include <enum_1.h>

#include <iostream>
#include <fstream>
#include <vector>

BOOST_AUTO_TEST_CASE(test_enum_1) {
    std::ifstream ifs("src/enum_0.bin", std::ifstream::binary);
    kaitai::kstream ks(&ifs);
    enum_1_t* r = new enum_1_t(&ks);

    BOOST_CHECK_EQUAL(r->main()->submain()->pet_1(), enum_1_t::main_obj_t::ANIMAL_CAT);
    BOOST_CHECK_EQUAL(r->main()->submain()->pet_2(), enum_1_t::main_obj_t::ANIMAL_CHICKEN);

    delete r;
}
