<?php
include "koneksi.php";
	$no=$_GET['no'];
	$jenis=$_GET['type'];
	
	switch($jenis)
	{
		
	case "guru";
		//echo "anda hapus data";
		$hapus="delete from guru where kode_guru='$no'";
		$hasil=mysql_query($hapus);
		if ($hasil)
		{
			echo "<script> document.location.href='index.php?page=4&status=Data sudah di hapus'; </script>";
		}
		else
		{
			echo "Proses Penghapusan data gagal";
			echo mysql_error();
		}
		break;
		case "md";
		//echo "anda hapus data";
		$hapus="delete from mata_diklat where kode_mata_diklat='$no'";
		$hasil=mysql_query($hapus);
		if ($hasil)
		{
			echo "<script> document.location.href='index.php?page=10&status=Data sudah di hapus'; </script>";
		}
		else
		{
			echo "Proses Penghapusan data gagal";
			echo mysql_error();
		}
		break;
		case "nilai";
		//echo "anda hapus data";
		$hapus="delete from nilai where NISN='$no'";
		$hasil=mysql_query($hapus);
		if ($hasil)
		{
			echo "<script> document.location.href='index.php?page=19&status=Data sudah di hapus'; </script>";
		}
		else
		{
			echo "Proses Penghapusan data gagal";
			echo mysql_error();
		}
		break;
		case "kk";
		//echo "anda hapus data";
		$hapus="delete from kompetensi_keahlian where kode_kk='$no'";
		$hasil=mysql_query($hapus);
		if ($hasil)
		{
			echo "<script> document.location.href='index.php?page=1&status=Data sudah di hapus'; </script>";
		}
		else
		{
			echo "Proses Penghapusan data gagal";
			echo mysql_error();
		}
		break;
		case "siswa";
		//echo "anda hapus data";
		$hapus="delete from siswa where NISN='$no'";
		$hasil=mysql_query($hapus);
		if ($hasil)
		{
			echo "<script> document.location.href='index.php?page=7&status=Data sudah di hapus'; </script>";
		}
		else
		{
			echo "Proses Penghapusan data gagal";
			echo mysql_error();
		}
		break;
		case "sk";
		//echo "anda hapus data";
		$hapus="delete from standar_kompetensi where kode_sk='$no'";
		$hasil=mysql_query($hapus);
		if ($hasil)
		{
			echo "<script> document.location.href='index.php?page=16&status=Data sudah di hapus'; </script>";
		}
		else
		{
			echo "Proses Penghapusan data gagal";
			echo mysql_error();
		}
		break;
		case "wali";
		//echo "anda hapus data";
		$hapus="delete from wali_murid where kode_wali='$no'";
		$hasil=mysql_query($hapus);
		if ($hasil)
		{
			echo "<script> document.location.href='index.php?page=13&status=Data sudah di hapus'; </script>";
		}
		else
		{
			echo "Proses Penghapusan data gagal";
			echo mysql_error();
		}
		break;
		
		}
		
?>