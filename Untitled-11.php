<?php
$bil=13;
$flag=0;
for($a=2;$a<100;$a++){;
if($bil%$a==0){;
$flag++;
}
}
if($flag==1){
echo"bilangan prima";
} else{
echo"bukan bilangan prima";
}
?>