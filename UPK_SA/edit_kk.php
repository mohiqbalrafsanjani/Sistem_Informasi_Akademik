<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";
if(isset($_GET['kode_kk']))
{
$kode_kk=$_GET['kode_kk'];
}
$database= mysql_query ("select * from kompetensi_keahlian where kode_kk='$kode_kk'");
$data= mysql_fetch_array ($database);
	$kode_kk=$data['kode_kk'];
	$kode_mata_diklat=$data['kode_mata_diklat'];
	$nama_kompetensi_keahlian=$data['nama_kompetensi_keahlian'];
	
	
if(isset($_POST['edit']))
{
	
	$kode_mata_diklat=$_POST['kode_mata_diklat'];
	$nama_kompetensi_keahlian=$_POST['nama_kompetensi_keahlian'];
	
	

	//update ke tabel
	$query = "update kompetensi_keahlian set kode_mata_diklat='$kode_mata_diklat',nama_kompetensi_keahlian='$nama_kompetensi_keahlian' where kode_kk='$kode_kk'";
	$sql = mysql_query ($query) or die (mysql_error());
	if ($sql) {
		echo "<script language=javascript>
alert('Data Kompetensi Keahlian Berhasil Di Edit');
document.location='index.php?page=1';
</script>";	
			} else {
		echo "<script language=javascript>
alert('Data Kompetensi Keahlian Gagal Di Edit');
document.location='index.php?page=1';
</script>";	
	}
}

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
	<!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
	<!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme-change-size.css">
<!-- Vendors -->
        <link rel="stylesheet" media="screen" href="vendors/bootstrap-datepicker/css/datepicker.css">
        <link rel="stylesheet" media="screen" href="css/datepicker.fixes.css">
        <link rel="stylesheet" media="screen" href="vendors/uniform/themes/default/css/uniform.default.min.css">
        <link rel="stylesheet" media="screen" href="css/uniform.default.fixes.css">
        <link rel="stylesheet" media="screen" href="vendors/chosen.min.css">
        <link rel="stylesheet" media="screen" href="vendors/selectize/dist/css/selectize.bootstrap3.css">
        <link rel="stylesheet" media="screen" href="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css">
    <!-- Custom styles for this template -->
    <!-----link href="justified-nav.css" rel="stylesheet"------!>

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
  <div class="row featurette">
  <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Data Kompetensi Keahlian</h3>
            </div>
            <div class="panel-body">

    <form method="post" action="" enctype="multipart/form-data">
<p>Kode KK</p>
<p><input type="text" class="form-control" name="kode_kk" size="25" value="<?php echo "$kode_kk"; ?>" readonly required></p>
<p>Kode Mata Diklat</p>
<p><?php    
    // Koneksi
    mysql_connect("localhost","root","");    
    mysql_select_db("raport1");    
    $result = mysql_query("select * from mata_diklat order by kode_mata_diklat asc");  
    $jsArray = "var prdName = new Array();\n";  
    echo '<select name="kode_mata_diklat" id="select01" class="chzn-select" style="width: 150px" onchange="document.getElementById(\'nama_mata_diklat\').value = prdName[this.value]" required>';  
    echo '<option> </option>';  
    while ($row = mysql_fetch_array($result)) {  
        echo '<option value="' . $row['kode_mata_diklat'] . '">' . $row['kode_mata_diklat'] . '</option>';  
        $jsArray .= "prdName['" . $row['kode_mata_diklat'] . "'] = '" . addslashes($row['nama_mata_diklat']) . "';\n";  
    }  
    echo '</select>';  
    ?>  </p>
            
    <p>
	<input type="text" class="form-control" id="nama_mata_diklat" size="25" value="
	<?php
	
	$database= mysql_query ("select * from mata_diklat where kode_mata_diklat='$kode_mata_diklat'");
	$data= mysql_fetch_array ($database);
	$nama_mata_diklat=$data['nama_mata_diklat'];
	
	 echo "$nama_mata_diklat"; 
	 
	 ?>" required>
	 </p> 
    <script type="text/javascript">  
    <?php echo "$jsArray"; ?>  
    </script>

<p>Nama Kompetensi Keahlian</p>
<p><input type="text" class="form-control" name="nama_kompetensi_keahlian" size="25" value="<?php echo "$nama_kompetensi_keahlian"; ?>" required></p>
<!--
<p>Gambar</p>
<p><input type="file" class="form-control uniform_on"  name="gambar" ></p>-->
<p><input type="submit" name="edit"  class="btn btn-lg btn-primary" value="Edit">
<a href="index.php?page=1"><input type="button"  class="btn btn-lg btn-default" value="Batal/Kembali"></a></p>
</form>
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
        <script type="text/javascript" src="vendors/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="vendors/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="vendors/selectize/dist/js/standalone/selectize.min.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js"></script>
        <script type="text/javascript" src="vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard-for.bootstrap3.js"></script>
        <script type="text/javascript" src="vendors/boostrap3-typeahead/bootstrap3-typeahead.min.js"></script>

        <script type="text/javascript">
		 $(function() {
                $('.datepicker').datepicker();
                $('.uniform_on').uniform();
                $('.chzn-select').chosen();
                $('.selectize-select').selectize();
                $('.textarea-wysihtml5').wysihtml5({
                    stylesheets: [
                        'vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/wysiwyg-color.css'
                    ]
                });

                $('#rootwizard').bootstrapWizard({
                    'nextSelector': '.next',
                    'previousSelector': '.previous',
                    onNext: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onPrevious: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.bar').css({width: $percent + '%'});
                    }
                });
                $('#rootwizard .finish').click(function() {
                    alert('Finished!, Starting over!');
                    $('#rootwizard').find('a[href*=\'tab1\']').trigger('click');
                });
            });
        </script>
  </body>
</html>
