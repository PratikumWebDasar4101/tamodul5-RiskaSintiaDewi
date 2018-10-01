<?php  

$user=$_POST['user']? $_POST['user']:"Input tidak boleh kosong";
$password=$_POST['password']? $_POST['password']:"Input tidak boleh kosong";

if($user == "user" && $password == "123"){
	$_SESSION["username"]=$username;
	header("Location:registrasi.php");
}else{
	echo "Maaf Anda salah inputkan";
}

?>
<br><br>Kembali ke <a href="login.php">FORM</a>
