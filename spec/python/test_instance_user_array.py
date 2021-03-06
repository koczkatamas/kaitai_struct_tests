import unittest

from instance_user_array import InstanceUserArray

class TestInstanceUserArray(unittest.TestCase):
    def test_instance_user_array(self):
        with InstanceUserArray.from_file("src/instance_std_array.bin") as r:

            self.assertEqual(r.ofs, 0x10)
            self.assertEqual(r.qty_entries, 3)
            self.assertEqual(r.entry_size, 4)

            self.assertEqual(r.user_entries[0].word1, 0x1111)
            self.assertEqual(r.user_entries[0].word2, 0x1111)
            self.assertEqual(r.user_entries[1].word1, 0x2222)
            self.assertEqual(r.user_entries[1].word2, 0x2222)
            self.assertEqual(r.user_entries[2].word1, 0x3333)
            self.assertEqual(r.user_entries[2].word2, 0x3333)
