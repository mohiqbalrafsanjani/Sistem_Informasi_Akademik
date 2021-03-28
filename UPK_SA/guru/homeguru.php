<?
session_start();
if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])){
   header('location:error.html');
}
else if($_SESSION['status'] != "guru"){
	header('location:../error.html');
}
else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../image/punk.ico">

    <title>.: Halaman Guru :.</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">i-Raport</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             <?php echo " <li class='active'><a href='homeguru.php?u=$_SESSION[namauser]'"?>><img src="../image/home.ico" width="25" height="25"></a></li>
            <?php echo "<li><a href='?link=inputnilai.php&u=$_SESSION[namauser]'>Input Nilai</a></li>";?>
            <?php echo "<li><a href='?link=profilguru.php&u=$_SESSION[namauser]'>Data Guru</a></li>";?>
              <li><a href="#">Data Siswa</a></li></ul>
                    <form class="navbar-form navbar-left" role="search">
        			<div class="form-group">
          			<input type="text" class="form-control" placeholder="Search">
       				 </div>
        			<button type="submit" class="btn btn-default">Submit</button>
      				</form>
              <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-togle" data-toggle="dropdown" role="button" aria-expanded="false">Setting <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Account</a></li>
                   
                  <li class="divider"></li>
               	  <li><a href="../logout.php">Log Out</a></li>
                </ul>
              </li>
            </ul>
           </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      
<div class="jumbotron">
        <?php 
			$link=$_GET[link];
			if(file_exists($link))
			{
				include"$link";
			}
				else{
				echo "<h2>Selamat Datang,<a href='?link=profil.php&u=$_SESSION[namauser]'> $_SESSION[nama]!!</a></br>";
				echo "<small><blockquote>Anda Login Terakhir Pada : $_SESSION[lastlogin]</blockquote></small></h2>";
			}
		?>
        </div>
    </div> <!-- /container -->
        
        


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   	<script src="../js/jquery.min.js"></script>
	<script src="../js/transition.js"></script>
	<script src="../js/dropdown.js"></script>
	<script src="../js/collapse.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php
}
?>
