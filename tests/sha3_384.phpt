--TEST--
Verify sha3 384 bit output
--SKIPIF--
<?php if (!extension_loaded("sha3")) print "skip"; ?>
--FILE--
<?php
const OUTPUT_SIZE = 384;
function h2s($h){$s='';for($i=0,$l=strlen($h)-1;$i<$l;$i+=2){$s.=chr(hexdec($h[$i].$h[$i+1]));}return $s;}

echo sha3(h2s(''), OUTPUT_SIZE).PHP_EOL;
echo sha3(h2s('cc'), OUTPUT_SIZE).PHP_EOL;
echo sha3(h2s('41fb'), OUTPUT_SIZE).PHP_EOL;
echo sha3(h2s('433c5303131624c0021d868a30825475e8d0bd3052a022180398f4ca4423b98214b6beaac21c8807a2c33f8c93bd42b092cc1b06cedf3224d5ed1ec29784444f22e08a55aa58542b524b02cd3d5d5f6907afe71c5d7462224a3f9d9e53e7e0846dcbb4ce'), OUTPUT_SIZE).PHP_EOL;
?>
--EXPECT--
2c23146a63a29acf99e73b88f8c24eaa7dc60aa771780ccc006afbfa8fe2479b2dd2b21362337441ac12b515911957ff
1b84e62a46e5a201861754af5dc95c4a1a69caf4a796ae405680161e29572641f5fa1e8641d7958336ee7b11c58f73e9
495cce2714cd72c8c53c3363d22c58b55960fe26be0bf3bbc7a3316dd563ad1db8410e75eefea655e39d4670ec0b1792
135114508dd63e279e709c26f7817c0482766cde49132e3edf2eedd8996f4e3596d184100b384868249f1d8b8fdaa2c9