<!DOCTYPE html>
<html lang="en">
<?php
		include "koneksi.php";

		$query=mysql_query("select * from kompetensi_keahlian order by kode_kk asc"); //input
		

?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Sistem Informasi Akademik Iqbal</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	
<!-- Bootstrap -->
        
        <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme-change-size.css">

        <!-- Datatables -->
        <link rel="stylesheet" media="screen" href="css/DT_bootstrap.css">
    <!-- Custom styles for this template -->
    <!--link href="justified-nav.css" rel="stylesheet"--!>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="container marketing">
  
<div class="page-header">
        <h1>Data Kompetensi Keahlian</h1>
		<form> 
            <input type="text" class="form-control" placeholder="Search...">
          </form>
      </div>
	  <div class="row">
	  <div class="col-lg-12">
	  <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Tabel Data Kompetensi Keahlian</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <table class="table bootstrap-admin-table-with-actions table-striped" align="center">
                                        <thead>
                                            <tr>
                                                <th>Kode KK</th>
                                                <th>Kode Mata Diklat</th>
                                                <th>Nama KK</th>
												<th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
	   <?php
			
			while($row=mysql_fetch_array($query))
			{
			$kode_kk=$row[kode_kk];
			echo "  
			      	
                                            <tr>
                                                <td>$row[kode_kk]</td>
                                                <td>$row[kode_mata_diklat]</td>
                                                <td>$row[nama_kompetensi_keahlian]</td>
												<td class='actions'>
                                                    <a href='index.php?page=2&kode_kk=$kode_kk'>
                                                        <button class='btn btn-sm btn-primary'>
                                                            <i class='glyphicon glyphicon-pencil'></i>
                                                            Edit
                                                        </button>
                                                    </a>
                                                    <a href='delete.php?no=$kode_kk&type=kk'>
                                                        <button class='btn btn-sm btn-danger'>
                                                            <i class='glyphicon glyphicon-trash'></i>
                                                            Delete
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>                                            
                                       
       ";
  $kode_kk++;
}
   ?>
   					 </tbody>
                                    </table>
                                </div>
                            </div>
						</div>
					</div>
     </div>
	 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
	<script type="text/javascript" src="jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-admin-theme-change-size.js"></script>
        <script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/DT_bootstrap.js"></script>
  </body>
</html>
