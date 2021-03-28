<?php
$get_page=$_GET['page'];
switch($get_page){
    case "0";
	include "input_kk.php";
	break;
	
	case "1";
	include "data_kk.php";
	break;
	
	case "2";
	include "edit_kk.php";
	break;
	
	case "3";
	include "input_guru.php";
	break;
	
	case "4";
	include "data_guru.php";
	break;
		
	case "5";
	include "edit_guru.php";
	break;
	
	case "6";
	include "input_siswa.php";
	break;
	
	case "7";
	include "data_siswa.php";
	break;
	
	case "8";
	include "edit_siswa.php";
	break;
	
	case "9";
	include "input_md.php";
	break;
	
	case "10";
	include "data_md.php";
	break;
	
	case "11";
	include "edit_md.php";
	break;
	
	case "12";
	include "input_wm.php";
	break;
	case "13";
	include "data_wm.php";
	break;
	case "14";
	include "edit_wm.php";
	break;
	case "15";
	include "input_sk.php";
	break;
	case "16";
	include "data_sk.php";
	break;
	case "17";
	include "edit_sk.php";
	break;
	case "18";
	include "input_nilai.php";
	break;
	case "19";
	include "data_nilai.php";
	break;
	case "20";
	include "edit_nilai.php";
	break;
	case "21";
	include "input_kelas.php";
	break;
	case "22";
	include "data_kelas.php";
	break;
	case "23";
	include "edit_kelas.php";
	break;
	
	default;
	include "default.php";
	break;
	
	
	
	
	
	}
?>