<!DOCTYPE html>
<html>
<head>
	<title>DATA USER APLIKASI KASIR</title>
</head>
<body>
 
	<br/>
	<a href="registrasi.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA USER</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from users where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="aksi_edituser.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
                <tr>
                <td>Level</td>
                <td>
                <select name="level" id="">
                    <option value="<?php echo $d['level']; ?>"><?php echo $d['level']; ?></option>
                    <option value="Administrator">Administrator</option>
                    <option value="Petugas">Petugas</option>
                </select>
                </td>
                
            </tr>
				<tr>
					<td></td>
					<td><input type="submit" value="UPDATE"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>