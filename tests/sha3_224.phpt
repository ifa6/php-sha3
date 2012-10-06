--TEST--
Verify sha3 224 bit output
--SKIPIF--
<?php if (!extension_loaded("sha3")) print "skip"; ?>
--FILE--
<?php
const OUTPUT_SIZE = 224;
function h2s($h){$s='';for($i=0,$l=strlen($h)-1;$i<$l;$i+=2){$s.=chr(hexdec($h[$i].$h[$i+1]));}return $s;}

echo sha3(h2s(''), OUTPUT_SIZE).PHP_EOL;
echo sha3(h2s('cc'), OUTPUT_SIZE).PHP_EOL;
echo sha3(h2s('41fb'), OUTPUT_SIZE).PHP_EOL;
echo sha3(h2s('433c5303131624c0021d868a30825475e8d0bd3052a022180398f4ca4423b98214b6beaac21c8807a2c33f8c93bd42b092cc1b06cedf3224d5ed1ec29784444f22e08a55aa58542b524b02cd3d5d5f6907afe71c5d7462224a3f9d9e53e7e0846dcbb4ce'), OUTPUT_SIZE).PHP_EOL;
?>
--EXPECT--
f71837502ba8e10837bdd8d365adb85591895602fc552b48b7390abd
a9cab59eb40a10b246290f2d6086e32e3689faf1d26b470c899f2802
615ba367afdc35aac397bc7eb5d58d106a734b24986d5d978fefd62c
62b10f1b6236ebc2da72957742a8d4e48e213b5f8934604bfd4d2c3a