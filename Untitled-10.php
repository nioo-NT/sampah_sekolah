<?php
$bilangan=[1,7,8,5,9,10,13,18,19,30,44];
$i=count($bilangan);
$hasil = 0;
for($a=0;$a<$i;$a++){
$hasil=$hasil+$bilangan[$a];
}
echo $hasil."<br>";

foreach($bilangan as $key){
    echo $key."<br>";
    $hasil = $hasil + $key;
}

echo $hasil;
?> 