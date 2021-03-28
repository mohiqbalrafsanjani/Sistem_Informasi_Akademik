<?php
$host="localhost";
$user="root";
$pass="";
$db="raport1";
$koneksi=mysql_connect($host,$user,$pass);
$koneksi_db=mysql_select_db($db,$koneksi);

date_default_timezone_set('Asia/Jakarta');
$date=date('D, d-M-Y H:i:s');

/*
if($koneksi_db){
echo"KONEKSI SUKSES : )";
}
else{
 echo"KONEKSI GAGAL";
 }
*/

 ?>