<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";
if(isset($_GET['NISN']))
{
$NISN=$_GET['NISN'];
}
$database= mysql_query ("select * from nilai where NISN='$NISN'");
$data= mysql_fetch_array ($database);
	$NISN=$data['NISN'];
	$kode_guru=$data['kode_guru'];
	$kode_sk=$data['kode_sk'];
	$nilai_angka=$data['nilai_angka'];
	$nilai_huruf=$data['nilai_huruf'];
	
	
if(isset($_POST['edit']))
{
	
	$kode_guru=$_POST['kode_guru'];
	$kode_sk=$_POST['kode_sk'];
	$nilai_angka=$_POST['nilai_angka'];
	$nilai_huruf=$_POST['nilai_huruf'];
	
	

	//update ke tabel
	$query = "update nilai set kode_guru='$kode_guru',kode_sk='$kode_sk',nilai_angka='$nilai_angka',nilai_huruf='$nilai_huruf' where NISN='$NISN'";
	$sql = mysql_query ($query) or die (mysql_error());
	if ($sql) {
		echo "<script language=javascript>
alert('Data Nilai Berhasil Di Edit');
document.location='index.php?page=19';
</script>";	
			} else {
		echo "<script language=javascript>
alert('Data Nilai Gagal Di Edit');
document.location='index.php?page=19';
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
              <h3 class="panel-title">Edit Data Nilai</h3>
            </div>
            <div class="panel-body">

    <form method="post" action="" enctype="multipart/form-data">
<p>NISN</p>
<p><input type="text" class="form-control" name="NISN" size="25" value="<?php echo "$NISN"; ?>" readonly="" required ></p>
<p>Kode Guru</p>
<p><?php    
    // Koneksi
    mysql_connect("localhost","root","");    
    mysql_select_db("raport1");    
    $result = mysql_query("select * from guru order by kode_guru asc");  
    $jsArray = "var prdName = new Array();\n";  
    echo '<select name="kode_guru" id="select01" class="chzn-select" style="width: 150px" onchange="document.getElementById(\'nama_guru\').value = prdName[this.value]" required>';  
    echo '<option> </option>';  
    while ($row = mysql_fetch_array($result)) {  
        echo '<option value="' . $row['kode_guru'] . '">' . $row['kode_guru'] . '</option>';  
        $jsArray .= "prdName['" . $row['kode_guru'] . "'] = '" . addslashes($row['nama_guru']) . "';\n";  
    }  
    echo '</select>';  
    ?>  </p>
      
      
    <p><input type="text" class="form-control" id="nama_guru" size="25" value="<?php
	$database= mysql_query ("select * from guru where kode_guru='$kode_guru'");
	$data= mysql_fetch_array ($database);
	$nama_gurut=$data['nama_guru'];
	
	 echo "$nama_guru"; 
	 
	 ?>" required></p> 
    <script type="text/javascript">  
    <?php echo "$jsArray"; ?>  
    </script>
<p>Kode Standard Kompetensi</p>
<p><?php    
    // Koneksi
    mysql_connect("localhost","root","");    
    mysql_select_db("raport1");    
    $result1 = mysql_query("select * from standar_kompetensi order by kode_sk asc");  
    $jsArray1 = "var prdName = new Array();\n";  
    echo '<select name="kode_sk" id="select01" class="chzn-select" style="width: 150px" onchange="document.getElementById(\'nama_sk\').value = prdName1[this.value]" required>';  
    echo '<option> </option>';  
    while ($row1 = mysql_fetch_array($result1)) {  
        echo '<option value="' . $row1['kode_sk'] . '">' . $row1['kode_sk'] . '</option>';  
        $jsArray1 .= "prdName1['" . $row1['kode_sk'] . "'] = '" . addslashes($row1['nama_sk']) . "';\n";  
    }  
    echo '</select>';  
    ?>  </p>
      
   <!-------------------------------------------------------------------------------------------------->   
    <p><input type="text" class="form-control" id="nama_sk" size="25" value="<?php
	$database= mysql_query ("select * from standar_kompetensi where kode_sk='$kode_sk'");
	$data= mysql_fetch_array ($database);
	$nama_sk=$data['nama_sk'];
	
	 echo "$nama_sk"; 
	 
	 ?>" required></p> 
	 <!--------------------------------------------------------------------------------------------->
    <script type="text/javascript">  
    <?php echo "$jsArray1"; ?>  
    </script>
<p>Nilai Angka</p>
<p><input type="text" class="form-control" name="nilai_angka" size="25" value="<?php echo "$nilai_angka"; ?>" required></p>
<p>Nilai Huruf</p>
<p><input type="text" class="form-control" name="nilai_huruf" size="25" value="<?php echo "$nilai_huruf"; ?>" required></p>
<!--
<p>Gambar</p>
<p><input type="file" class="form-control uniform_on"  name="gambar" ></p>-->
<p><input type="submit" name="edit"  class="btn btn-lg btn-primary" value="Edit">
<a href="index.php?page=19"><input type="button"  class="btn btn-lg btn-default" value="Batal/Kembali"></a></p>
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
