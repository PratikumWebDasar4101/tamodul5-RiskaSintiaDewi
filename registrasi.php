<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<table align="center">
		<form action="prosesregis.php" method="POST" enctype="multipart/form-data">
			<tr>
				<td colspan="3"><br><h4>============= FORM ============= </h4><br></td> 
			</tr>
			<tr>
				<td>NIM</td> 
				<td>:</td>
				<td> <input type="number" maxlength="10" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td> 
				<td>:</td>
				<td> <input type="text" maxlength="25" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td> 
				<td>:</td>
				<td><input type="radio" name="jk" value="Perempuan">Perempuan 
    			<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="fakultas">
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
					</select></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><select name="jurusan">
					<option value="MI">Manajemen Informatika</option>
					<option value="SisMul">Sistem Multimedia</option>
					<option value="DKV">DKV</option>
					<option value="Ikom">Ilmu Komunikasi</option>
					<option value="MBTI">MBTI</option>
					<option value="TK">Teknik Komputer</option>
					</select></td>
			</tr>
			<tr>
				<td>Email</td> 
				<td>:</td>
				<td> <input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Hobi</td> 
				<td>:</td>
				<td><input type="checkbox" name="Hobi[]" value="Menggambar">Menggambar<br>
				<input type="checkbox" name="Hobi[]" value="Menulis">Menulis<br>
				<input type="checkbox" name="Hobi[]" value="Membaca">Membaca<br>
				<input type="checkbox" name="Hobi[]" value="Berenang">Berenang<br></td>
			</tr>
			<tr>
				<td>Komentar</td> 
				<td>:</td>
				<td> <input type="text" name="komentar"></td>
			</tr>
			<tr>
				<td colspan="3"><br><center><input type="file" name="dokumen" ></center></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><br><input type="submit" name="upload" value="Upload"></td>
			</tr>
			<tr>
				<td colspan="3"><h4>================================ </h4><br></td> 
			</tr>
		</form>
	</table>


</body>
</html>
