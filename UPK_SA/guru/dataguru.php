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
    <th width="150" rowspan="1"><div align="left">Nama Kompetensi Keahlian</div></th>
    <th width="225" rowspan="1"><div align="left">Nama Lengkap</div></th>
    <th width="200" rowspan="1"><div align="left">NIP</div></th>
    <th width="150" rowspan="1"><div align="left">Alamat</div></th>
    <th width="100" rowspan="1"><div align="left">Telepon</div></th>
    <th width="100" rowspan="1"><div align="left">Username</div></th>
    <th colspan="2"><div align="left">Action</div></th>
  </tr>

     <?php
		include"../php_include/conn.php";

		// Memanggil dan menginisiasi class
		include "../php_include/class_paging.php";

		$p = new Paging;

		// Tentukan limit atau batas
		$batas = 3;

		// Cek halaman dan posisi data
		$posisi = $p->cariPosisi($batas);

		// Sesuaikan perintah SQL
		$tampil="SELECT * FROM guru INNER JOIN kompetensi_keahlian ON guru.kode_kk=kompetensi_keahlian.kode_kk ORDER BY  kode_guru ASC LIMIT $posisi,$batas";
		$query_tampil=mysql_query($tampil);

$no=$posisi+1;
while ($hasil=mysql_fetch_array($query_tampil)){
$kodegr=$hasil['kode_guru']; 

echo " 	<tr>
  		<td>$hasil[kode_guru]</td>
  		<td>$hasil[nama_kk]</td>
  		<td>$hasil[nama_guru]</td>
 		<td>$hasil[nip]</td>
  		<td>$hasil[alamat]</td>
  		<td>$hasil[telepon]</td>
  		<td>$hasil[username]</td>
  		<td><a href='delete.php?kodegr=$kodegr'onClick=\"return confirm('Apakah Anda benar-benar akan menghapus $hasil[nama_guru]?')\"><img src ='../image/del.ico'></a></td>
  		<td><a href='?link=editguru.php&kodegr=$kodegr'><img src ='../image/edt.ico'></a></td>
  		</tr>";
$no++;
}
  		echo "</table></br>";

// Dapatkan jumlah data keseluruhan
$jmldata = mysql_num_rows(mysql_query("SELECT * FROM guru"));

// Dapatkan jumlah halaman
$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);

// Cetak link navigasi halaman
$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
echo "<div align= 'center'>";echo $linkHalaman;
}
	
?>
  </div>
