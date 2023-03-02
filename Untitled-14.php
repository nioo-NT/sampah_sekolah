<?php
$koneksi= mysqlI_connect("localhost","root","");
if($koneksi){
    echo "koneksi berhasil"."<br>";
}else{
    echo "koneksi berhasil"."<br>";
}
$db=mysqlI_select_db($koneksi,"toko");
if($db){
    echo "koneksi berhasil :)"."<br>";
}else{
    echo "koneksi tidak berhasil :)"."<br>";
}
?>