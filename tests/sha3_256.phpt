--TEST--
Verify sha3 256 bit output
--SKIPIF--
<?php if (!extension_loaded("sha3")) print "skip"; ?>
--FILE--
<?php
const OUTPUT_SIZE = 256;
function h2s($h){$s='';for($i=0,$l=strlen($h)-1;$i<$l;$i+=2){$s.=chr(hexdec($h[$i].$h[$i+1]));}return $s;}

echo sha3(h2s(''), OUTPUT_SIZE).PHP_EOL;
echo sha3(h2s('cc'), OUTPUT_SIZE).PHP_EOL;
echo sha3(h2s('41fb'), OUTPUT_SIZE).PHP_EOL;
echo sha3(h2s('433c5303131624c0021d868a30825475e8d0bd3052a022180398f4ca4423b98214b6beaac21c8807a2c33f8c93bd42b092cc1b06cedf3224d5ed1ec29784444f22e08a55aa58542b524b02cd3d5d5f6907afe71c5d7462224a3f9d9e53e7e0846dcbb4ce'), OUTPUT_SIZE).PHP_EOL;
?>
--EXPECT--
c5d2460186f7233c927e7db2dcc703c0e500b653ca82273b7bfad8045d85a470
eead6dbfc7340a56caedc044696a168870549a6a7f6f56961e84a54bd9970b8a
a8eaceda4d47b3281a795ad9e1ea2122b407baf9aabcb9e18b5717b7873537d2
ce87a5173bffd92399221658f801d45c294d9006ee9f3f9d419c8d427748dc41