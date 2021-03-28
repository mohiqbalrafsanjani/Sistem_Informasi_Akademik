
<?php
session_start();
if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])){
   	header('location:../error.html');
}
else if($_SESSION['status'] != "guru"){
	header('location:../error.html');
}
else {
?>

<table class="table table-hover" width="1083" border="0">
  <tr>
    <th width="30" rowspan="1"><div align="left">Kode Guru</div></th>
    <th width="30" rowspan="1"><div align="left">Kompetensi Keahlian</div></th>
    <th width="225" rowspan="1"><div align="left">Nama Lengkap</div></th>
    <th width="200" rowspan="1"><div align="left">NIP</div></th>
    <th width="150" rowspan="1"><div align="left">Alamat</div></th>
    <th width="100" rowspan="1"><div align="left">Telepon</div></th>
  </tr>

<?php
include"../php_include/conn.php";

$kodeguru=$_SESSION['kodeguru'];

$tampil="SELECT * FROM guru LEFT JOIN kompetensi_keahlian ON (guru.kode_kk=kompetensi_keahlian.kode_kk) WHERE guru.kode_guru='$kodeguru'ORDER BY  kode_guru ASC ";
$query_tampil=mysql_query($tampil);
while ($hasil=mysql_fetch_array($query_tampil)){
echo " 	<tr>
  		<td>$hasil[kode_guru]</td>
  		<td>$hasil[nama_kk]</td>
  		<td>$hasil[nama_guru]</td>
 		<td>$hasil[nip]</td>
  		<td>$hasil[alamat]</td>
  		<td>$hasil[telepon]</td>
  		</tr>";
}
}
?>
