<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";
if(isset($_POST['send']))
{
$jawab=$_POST['send'];
$kode_kelas=$_GET['kode_kelas'];
$database= mysql_query ("select * from kelas where kode_kelas='$kode_kelas'");
$data= mysql_fetch_row ($database);
	$kode_kelas=$_POST['kode_kelas'];
	$kelas=$_POST['kelas'];
	$kode_kk=$_POST['kode_kk'];
	$kode_guru=$_POST['kode_guru'];
	$kelas_sk=$_POST['kelas_sk'];
	

	
	//insert ke tabel
	$query = "insert into kelas values('$kode_kelas','$kelas','$kode_kk','$kode_guru','$kelas_sk')";
	$sql = mysql_query ($query) or die (mysql_error());
	if ($sql) {
		echo "<script language=javascript>
alert('Data Kelas Berhasil Di Simpan');
document.location='index.php?page=21';
</script>";	
			} else {
		echo "<script language=javascript>
alert('Data Kelas Gagal Di Simpan');
document.location='index.php?page=21';
</script>";	
	}
}

?>
<?php
include "koneksi.php";
$query="SELECT max(kode_kelas) as maxkode FROM kelas";
$hasil=mysql_query($query);
$data=mysql_fetch_array($hasil);
$kode_kelas=$data['maxkode'];
$no=(int) substr($kode_kelas, 2,2);
$no++;
$char="K";
$id=$char.sprintf("%03s", $no);
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
              <h3 class="panel-title">Input Data Kelas</h3>
            </div>
            <div class="panel-body">
<div class="form-group">
<div class="col-lg-10">
    <form method="post" action=""  enctype="multipart/form-data">
<p>Kode Kelas</p>
<p><input type="text" class="form-control" name="kode_kelas" size="25" value="<?php echo"$id"; ?>" readonly="" required ></p>

<p>Kelas</p>
<p><input type="text" class="form-control" name="kelas" size="25" ></p>
<p>Kode KK</p>
<p><?php    
    // Koneksi
    mysql_connect("localhost","root","");    
    mysql_select_db("raport1");    
    $result = mysql_query("select * from kompetensi_keahlian order by kode_kk asc");  
   
    echo '<select name="kode_kk" id="select01" class="chzn-select"  onchange="document.getElementById(\'nama_kompetensi_keahlian\').value = prdName[this.value]" required>';  
    echo '<option></option>';  
    while ($row = mysql_fetch_array($result)) {  
        echo '<option value="' . $row['kode_kk'] . '">' . $row['nama_kompetensi_keahlian'] . '</option>';  
         
    }  
    echo '</select>';  
    ?>  </p>
<p>Kode Guru</p>
<p><?php    
    // Koneksi
    mysql_connect("localhost","root","");    
    mysql_select_db("raport1");    
    $result1 = mysql_query("select * from guru order by kode_guru asc");  
   
    echo '<select name="kode_guru" id="select01" class="chzn-select"  onchange="document.getElementById(\'nama_guru\').value = prdName1[this.value]" required>';  
    echo '<option></option>';  
    while ($row1 = mysql_fetch_array($result1)) {  
        echo '<option value="' . $row1['kode_guru'] . '">' . $row1['nama_guru'] . '</option>';  
         
    }  
    echo '</select>';  
    ?>  </p>
<p>Kelas SK</p>
<p><?php    
    // Koneksi
    mysql_connect("localhost","root","");    
    mysql_select_db("raport1");    
    $result2 = mysql_query("select * from standar_kompetensi order by kode_sk asc");  
   
    echo '<select name="kelas_sk" id="select01" class="chzn-select"  onchange="document.getElementById(\'nama_sk\').value = prdName2[this.value]" required>';  
    echo '<option></option>';  
    while ($row2 = mysql_fetch_array($result2)) {  
        echo '<option value="' . $row2['kelas_sk'] . '">' . $row2['kelas_sk'] . '</option>';  
         
    }  
    echo '</select>';  
    ?>  </p>
<!--<p>Gambar</p>
<p><input type="file" class="form-control uniform_on"  name="gambar" ></p>-->
<p><input type="submit" name="send" class="btn btn-lg btn-primary" value="Simpan"></p>
</form>
</div>
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
