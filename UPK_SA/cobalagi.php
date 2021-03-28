<?php
// memanggil file koneksi.php
include "koneksi.php";
// membuat variable dengan nilai dari form
$username = $_POST['username']; // variablenya = username, dan nilainya sesuai yang dimasukkan di input name=”username” tadi
$password = md5($_POST['password']); // variable password, dan nilainya sesuai yang dimasukkan di input name=”password” tadi
// md5 ada sebuah fungsi PHP untuk engkripsi. misalnya admin jadi 21232f297a57a5a743894a0e4a801fc3. untuk lengkapnya, silahkan googling tentang md5

// proses untuk login

// menyesuaikan dengan data di database
$perintah = "select * from login WHERE username = '$username' AND password = '$password'";
$hasil = mysql_query($perintah);
$row = mysql_fetch_array($hasil);
if ($row['username'] == $username AND $row['password'] == $password) {
session_start(); // memulai fungsi session
$_SESSION['username'] = $username;
header("location:home.php"); // jika berhasil login, maka masuk ke file home.php
}
else {
echo "Gagal Masuk"; // jika gagal, maka muncul teks gagal masuk
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action ="">
Username : <input type="text" name="username" size="40" /> <br />
Password : <input type="password" name="password" size="40" /><br />
<input type="submit" value="Login">
</form>
</body>
</html>
