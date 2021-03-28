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

	if(isset($_GET['kelas']))
		{
			$kelas=$_GET['kelas'];
			$sk=$_GET['sk'];
		}
		
?>
	<form class="form" method="post" action="" enctype="multipart/form-data">
	<table>
<?		
echo "	
	<table class = 'table table-hover' border='0'>
	<tr>
	<td><strong><div align='left'>Nisn</div></strong></td>	
	<td><strong><div align ='left'>Nama Siswa</div></strong></td>
	<td><strong><div align ='left'>Nilai</div></strong></td>

	</tr>";
	
	$kodeguru=$_SESSION['kodeguru'];
	$tampil="SELECT * FROM siswa INNER JOIN kls ON siswa.kode_kls=kls.kode_kls WHERE siswa.kode_kls='$kelas' ORDER BY siswa.nisn ASC";
	$query_tampil=mysql_query($tampil);
	$i = 1;
	while ($hasil=mysql_fetch_array($query_tampil)){
	echo "	<tr>
  			<td><div align='left'><input class='form-control' type='text' name='nisn".$i."' value='".$hasil['nisn']."' readonly='readonly'/></div></td>
        	<td><div align ='left'><input class='form-control' type='text' name='nama".$i."' value='".$hasil['nama_siswa']."' readonly='readonly'/></div></td>
			<th><div  align ='right'><input class='form-control' type='text' name='nilaiangka".$i."' maxlength='2'/></div></th>

			</tr>";
 	$i++;
			}
	$jumSis = $i-1;
?>
		  </table><br>
          <input type="hidden" name="jumlah" value="<?php echo $jumSis ?>" />
	      <div align="center">
          <input id="submit" name="submit" type="submit" onclick="return confirm('Apakah Anda yakin?')" value="Simpan"data-loading-text="Saving...." class="btn btn-primary js-loading-button" >
          <input id="reset" name="reset" type="reset" value="Batal" class="btn btn-primary" >
      </div></td>
    </tr>
</table>
</form>	
<script src="../js/jquery.min.js"></script>
<script src="../js/transition.js"></script>
<script src="../js/button.js"></script>
<script src="js/alert.js"></script>

<script>
$(function () {
  $('.js-loading-button').on('click', function () {
    var btn = $(this).button('loading')
    setTimeout(function (){
      btn.button('reset')
    }, 2000)
  })
})
</script>
<?
if(isset($_POST['submit'])){
	
	$jumSis = $_POST['jumlah'];
	
	for ($i=1; $i<=$jumSis; $i++)
	{
	   $nisn = $_POST['nisn'.$i];
	   $nilaiangka  = $_POST['nilaiangka'.$i];
	   $x=
	   $query = "INSERT INTO nilai(nisn,kode_guru,kode_sk,nilai) VALUES('$nisn','$kodeguru','$sk','$nilaiangka')";
	   $result=mysql_query($query);

		}
			if($result)
			{
				echo "				 	
						<script>
							alert('Data Sukses Disimpan');
							document.location='homeguru.php?u=$_SESSION[namauser]';
						</script>";						
                }
			else 
			{
				echo "
						<script>
							alert('Data Gagal Disimpan');
							document.location='?link=nilaisiswa.php&u=$_SESSION[namauser]';
						</script>";						
			}


}
}
?>
