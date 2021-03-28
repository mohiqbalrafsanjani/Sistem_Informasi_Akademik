<?php
		include "koneksi.php";
if(isset($_POST['submit'])){
	if(($_POST['pilihan'] == "admin")){
$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysql_query("select * from hak_akses where username='$username' and password='$password'");
$row=mysql_num_rows($sql);
$row2=mysql_fetch_array($sql);
if($row>=1){
$status=$row2['status'];
session_start();
$_SESSION['username']=$username;
$_SESSION['status']=$status;
session_register("username");
session_register("status");
echo"
<script language=javascript>
document.location='index.php';
</script>
";
}
else{
echo"
<script language=javascript>
alert('login tidak valid!!!!!');
document.location='login.php';
</script>
";
}
	}
	else if (($_POST['pilihan'] == "siswa"))
	{
$NISN=$_POST['NISN'];
$password=$_POST['password'];
$sql=mysql_query("select * from siswa where NISN='$NISN' and password='$password'");
$row=mysql_num_rows($sql);
$row2=mysql_fetch_array($sql);
if($row>=0){

session_start();
$_SESSION['NISN']=$NISN;
$_SESSION['password']=$password;
session_register("NISN");
session_register("password");
echo"
<script language=javascript>
document.location='index.php';
</script>
";
}
else{
echo"
<script language=javascript>
alert('login tidak valid!!!!!');
document.location='login.php';
</script>
";
}
	}
	else if (($_POST['pilihan'] == "guru")){
		$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysql_query("select * from hak_akses where username='$username' and password='$password'");
$row=mysql_num_rows($sql);
$row2=mysql_fetch_array($sql);
if($row>=0){
$status=$row2[status];
session_start();
$_SESSION['username']=$username;
$_SESSION['status']=$status;
session_register("username");
session_register("status");
echo"
<script language=javascript>
document.location='index.php';
</script>
";
}
else{
echo"
<script language=javascript>
alert('login tidak valid!!!!!');
document.location='login.php';
</script>
";
	}
} 
}
?>
<!DOCTYPE html>
<html class="bootstrap-admin-vertical-centered">
    <head>
        <title>Halaman Login | Sistem Informasi Akademik Iqbal</title>
		
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">

        <!-- Custom styles -->
        <style type="text/css">
            .alert{
                margin: 0 auto 20px;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <body class="bootstrap-admin-without-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <a class="close" data-dismiss="alert" href="#">&times;</a>
                        Press enter key or click the Submit button                    </div>
                    <form method="post" action=" " class="bootstrap-admin-login-form">
                        <h1>Login</h1>
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                         <div class="form-group">
                            <select id="select01" name="pilihan" class="form-control" >
                                                        <option value="admin">admin</option>
                                                        <option value="siswa">siswa</option>
                                                        <option value="guru">guru</option>
                                                        
                                                    </select>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="remember_me">
                                Remember me                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary" type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function() {
                // Setting focus
                $('input[name="email"]').focus();

                // Setting width of the alert box
                var alert = $('.alert');
                var formWidth = $('.bootstrap-admin-login-form').innerWidth();
                var alertPadding = parseInt($('.alert').css('padding'));

                if (isNaN(alertPadding)) {
                    alertPadding = parseInt($(alert).css('padding-left'));
                }

                $('.alert').width(formWidth - 2 * alertPadding);
            });
        </script>
    </body>
</html>
