<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>tampil_buku</title>
<link rel="shortcut icon" href="../../argo/favicon/unixwearlinux.png" />
<style type="text/css">
<!--
.style2 {color: #000000}
-->
</style>

<script>
alert('Hati-hati dalam proses pengeditan data!');
</script>

</head>



<table width="681" height="48" border="0" align="center">
<caption>
<div align="center"><font color="#FFFFFF" size="+2"> Data Buku </font></div>
</caption>
    <div align="center"><strong><br />
    </div>
<form action="" method="post"> 
    <table width="360" border="0" align="center">
  <tr>
    <td width="118"><span class="style2">Masukan NISN</span></td>
    <td width="149"><label>
      <input type="text" name="keyword" id="keyword" />
    </label></td>
    <td width="79"><label>
      <input type="submit" name="search" id="search" value="Search" />
    </label></td>
  </tr>
</table>

</form>
  <table width="869" border="0" align="center">
  <tr bgcolor="#99FF00">
    <td width="103" height="34"><div align="center">NISN</div></td>
    <td width="154"><div align="center">Kode Guru </div></td>
    <td width="203"><div align="center">Kode Standar Kompetensi </div></td>
    <td width="131"><div align="center">Nilai Angka </div></td>
    <td width="103"><div align="center">Nilai Huruf </div></td>

	</tr>
<?php

include"koneksi.php";
if(isset($_POST['search'])){
$i=0;
$entries=3;
$key=$_POST['keyword'];
$sql2=mysql_query("select * from siswa where kode_kelas like '%$key%'");
//$idx=0;
$idx=$_GET['id'];
$offset=$idx*$entries;
$result=mysql_query("select * from siswa where kode_kelas like '%$key%' order by kode_kelas asc limit $offset,$entries");
//$sql=mysql_query("select * from buku where ISBN like '%$key%'");
while($row=mysql_fetch_array($result)){

if($i==0){
	$warna="#ffffff";
	$i=1;
}
else{
	$warna="#cccccc";
	
	$i=0;
}


	echo"<tr bgcolor=$warna><td>$row[NISN]</td>
		<td>$row[kode_kelas]</td>
		<td>$row[jenis]</td>
		<td>$row[pengarang]</td>
		<td>$row[stokawal]</td>
		<td>$row[stokakhir]</td>
		
	</tr>";
		 }
		 

$get_pages=mysql_num_rows($sql2);
if($get_pages>$entries){
echo "<font color=black align=center> Halaman : </font>";
$pages=1;
while($pages<=ceil($get_pages/$entries))
{
if ($pages!=1)
{
echo"<font color=black align=center> | </font>";
}
$x=$pages-1;
echo"
<a href=tampil_buku.php?id=$x style=text-decoration:none><font color=black align=center> $pages </font></a>
";

$pages++;
}
}else{
$pages=0;
}
}
		 
else{
$i=0;
$entries=3;
include"koneksi.php";
$sql=mysql_query("select * from nilai order by NISN asc");
$idx=0;
$idx=$_GET['id'];
$offset=$idx*$entries;
$result=mysql_query("select * from nilai order by NISN asc limit $offset,$entries");
while($row=mysql_fetch_array($result)){
if($i==0){
	$warna="#ffffff";
	$i=1;
}
else{
	$warna="#cccccc";
	$i=0;
}
	echo"<tr bgcolor=$warna><td>$row[NISN]</td>
		<td>$row[guru_kode]</td>
		<td>$row[sk_kode]</td>
		<td>$row[nilai_angka]</td>
		<td>$row[nilai_huruf]</td>
	</tr>";
}
?>
</table>


<div align="center">
  <p>
    <?php
$get_pages=mysql_num_rows($sql);
if($get_pages>$entries){
echo "<font color=white align=center> Halaman : </font>";
$pages=1;
while($pages<=ceil($get_pages/$entries))
{
if ($pages!=1)
{
echo"<font color=white align=center> | </font>";
}
$x=$pages-1;
echo"
<a href=tampil_buku.php?id=$x style=text-decoration:none><font color=#FFFFFF align=center> $pages </font></a>
";

$pages++;
}
}else{
$pages=0;
}
}
?>
  </p>
  <p align="right"><a href="../../argo/index.php?page=2">Kembali ke halaman index</a>
  </p>
    <br />
    </p>
</div>
</body>
</html>
