<?php
$a = 150000;
if ($a<100000){
echo "anda tidak mendapatkan potongan harga";
} else{
$a=$a - (0.05*$a);
echo "anda mendapat potongan 5%, totalnya $a";
}
?>