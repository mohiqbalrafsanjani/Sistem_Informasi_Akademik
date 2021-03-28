<?php
session_start();
if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])){
   header('location:error.html');
}
else if($_SESSION['status'] != "guru"){
	header('location:../error.html');
}
else{
	include "../php_include/conn.php";
	include "../php_include/terbilang.php";

	$kodeguru=$_SESSION['kodeguru'];
	
	echo "	
			<table class = 'table table-hover' border='0'>
			<tr>
 			<th><strong><div align ='left'>Standar Kompetensi </div></strong></th>
 			<th><strong><div align ='left'>Kelas</div></strong></th>
			</tr>";
	
	$tampil="SELECT * FROM mengajar INNER JOIN guru ON mengajar.kode_guru = guru.kode_guru INNER JOIN standar_kompetensi ON mengajar.kode_sk = standar_kompetensi.kode_sk INNER JOIN kls ON standar_kompetensi.kelas_sk = kls.kelas_sk WHERE guru.kode_guru='$kodeguru'";
	$query_tampil=mysql_query($tampil);
	while ($hasil=mysql_fetch_array($query_tampil)){
	$id=$hasil['id'];
	$kelas=$hasil['kode_kls'];
	$sk=$hasil['kode_sk'];
	
	$query=mysql_query("SELECT * FROM nilai WHERE kode_guru='$kodeguru'AND kode_sk='$sk'");
	$cek=mysql_num_rows($query);
	
	if($cek=='0'){
 	echo "	<tr>
  			<td><div align='left'>$hasil[nama_sk]</div></td>
			<td><div align ='left'><a href='?link=nilaisiswa.php&kelas=$kelas&sk=$sk' ><button type='button' class='btn btn-primary'>Input $hasil[nama_kls]</button></div></td>
       		</tr>";
					}
			else{ 
 	echo "	<tr>
  			<td><div align='left'>$hasil[nama_sk]</div></td>
			<td><div align ='left'><a href='?link=nilaiupdate.php&kelas=$kelas&sk=$sk' ><button type='button' class='btn btn-primary'>Update $hasil[nama_kls]</button></div></td>
       		</tr>";
			}
			
			
			}echo "</table><br>";


}



?>
