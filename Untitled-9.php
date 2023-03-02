<?php
$hasil = 0;
$bilangan=[1,7,8,5,9,10,13,18,19,30,44];
$i=count($bilangan);
for($a=1;$a<$i;$a++){
$hasil=$hasil+$bilangan[$a];
}
echo $hasil;
?>