<?php  

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
$jk=$_POST['jk'];
$fakultas=$_POST['fakultas'];
$jurusan=$_POST['jurusan'];


echo "NIM : $nim<br>";
echo "Nama : $nama<br>";
echo "Jenis Kelamin : $jk<br>";
echo "Fakultas : $fakultas<br>";
echo "Program Studi : $jurusan<br>";
echo "Email : $email<br>";

$Hobi = $_POST['Hobi'];
echo "Hobi Anda adalah : <br>";
foreach ($Hobi as $nilai) {
	echo "- $nilai<br>";
}

echo "<br>Komentar : $komentar<br><br>";

$string = "$komentar";
$hasil = str_word_count($string);
echo "Jumlah : $hasil kata<br>";

if ($hasil < 5) {
	echo "<br>Maaf, kata yang Anda inputkan kurang.<br>";
}else{
	die (" ");
}

$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "upload/";
move_uploaded_file ($nama_tmp,$upload_dir.$nama_file);

?>
<img src="upload/<?php echo $nama_file; ?>">
